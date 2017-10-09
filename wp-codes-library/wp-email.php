<?php 

/* ----------------------------------------------------------------------------------- */
function comment_email_notification($comment_ID, $comment_type) {
    $commentPost = get_comment( $comment_ID );//id of the comment user actual(that post)
    $comment_post_id = $commentPost->comment_post_ID ;

    define("NOTIFY_INSTRUCTOR", true);
    define("NOTIFY_ADMIN", true);

    //data instructor post(data of the custom field).
    $instrutor_post = get_post_meta( $comment_post_id, 'post_videoauthor', true );
    $instrutor_user = new WP_User( $instrutor_post );
    $instructor_id = $instrutor_user->ID;
    $email_instructor = $instrutor_user->user_email;

    /*
    * Saved part in the case of a per-user/dynamic settings for this
    * For now we will use constants
    *
    $instrutorNotific = get_user_meta($instructor_id, 'opt_notification_email', true);
    if ($instrutorNotific == 'yes') {
        $setInstructor = TRUE;
    }else{
        $setInstructor = FALSE;
    }
    */

    //admin geral (email).
    $email_admin = get_option( 'admin_email' );
    // $admin = get_user_by( 'email', $email_admin );
    // $adminId = $admin->ID;
    /*
    * Saved part in the case of a per-user/dynamic settings for this
    * For now we will use constants
    *
    $adminNotific = get_user_meta($adminId, 'opt_notification_email', true);
    if ($adminNotific == 'yes') {
        $setAdmin = TRUE;
    }else{
        $setAdmin = FALSE;
    }
    */

    //User comment post 'Logged'
    $current_user = wp_get_current_user();
    $current_user_id = $current_user->ID; //type user(ex: admin, author, subscriber).
    $current_user_email = $current_user->user_email;

    $current_comment        = get_comment_text( $comment_ID );//data comments
    $current_comment_link   = get_comment_link( $commentPost );
    $post_link = get_permalink( $comment_post_id );//data link post
    $postTitle = get_the_title( $comment_post_id );//data title post

    // if ($comment_parent == 0){ o array fica vazio }
    $current_comment_id = $commentPost->comment_ID;
        $users      = array();
        $loop_ids   = array();
    do {
        $comment = get_comment($current_comment_id);

        if ( $comment->user_id != $instructor_id && !in_array($comment->user_id, $loop_ids) ) {
            $loop_ids[] = $comment->user_id;
            $users[] = get_user_by("id",$comment->user_id); // return User Obj | false
        }

        $current_comment_id = $comment->comment_parent;
    } while ($comment->comment_parent > 0);

    $emails2send = array();
    if ( is_array($users) && !empty($users) ) {
        foreach ( $users as $user ) {
            if ( $current_user_id != $user->ID ) {
                $opt_email = get_user_meta($user->ID, 'opt_notification_email', true);
                    if($opt_email == 'yes' || $opt_email == ''){
                        $emails2send[] = array( $user->data->user_email, $user->data->display_name );
                    }
                }
        }
    }

    // template header
    $headers = 'Content-Type: text/html; charset=UTF-8';
    $headers = 'charset=UTF-8';
    $subj_admim = 'Hello, POSTAGEM has a new comment in lesson '.$postTitle;
    $subj_instructor = 'Hello Instructor, you have a new comment on your lesson';

    //$subject = "Has an answer in your comment ".$postTitle;

    //template for type users.
    $tpl_instructor = sprintf(
        "<h1>Dear Instructor %s</h1>
        <p>One lesson of yours has a new comment.<br />
        <strong>Lesson</strong>: %s<br />
        <strong>Comment</strong>:</br />
        %s
        <br /><strong>Comment Link: </strong>%s</p>",
        $instrutor_user->display_name,
        $postTitle,
        $current_comment,
        $current_comment_link);

    $tpl_admin = sprintf(
        "<h1>Dear Administrator of POSTAGEM</h1>
        <p>You have a new comment on a lesson. The instructor is receiving the same notification. If you want to stop receiving this, please contact Dev. Team.<br />
        <strong>Lesson</strong>: %s<br />
        <strong>Comment</strong>:</br />
        %s
        <br /><strong>Comment Link: </strong>%s</p>",
        $postTitle,
        $current_comment,
        $current_comment_link);


    // Instructor
    if ($current_user_id != $instrutor_user->ID && NOTIFY_INSTRUCTOR ) {
        wp_mail( $email_instructor, $subj_instructor, $tpl_instructor, $headers );
    }
    //Admin
    if ( $current_user_email != $email_admin && NOTIFY_ADMIN ) {
        wp_mail( $email_admin, $subj_admim, $tpl_admin, $headers );
    }
    // array by users for send
    if ( is_array($emails2send) && !empty($emails2send) ) {
        foreach ($emails2send as $toSend){
        $tpl_students = sprintf(
            "<h1>Dear student, %s</h1>
            <p>You have a new comment on a discussion you are involved in.<br />
            <strong>Lesson</strong>: %s<br />
            <strong>Comment</strong>:</br />
            %s
            <br /><strong>Comment Link: </strong>%s</p>",
            $toSend[1],
            $postTitle,
            $current_comment,
            $current_comment_link
            );
            wp_mail( $toSend[0], $toSend[1].", you have an answer in your comment.", $tpl_students, $headers );
        }
    }

}
add_action('comment_post', 'comment_email_notification', 20, 2);
/* ----------------------------------------------------------------------------------- */