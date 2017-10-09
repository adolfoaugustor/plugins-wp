<?php

/**
* Redirect Rules for Login
*/
define('REDIRECT_BACK', true);
define( home_url(), 'HOME_PAGE');

add_action('login_redirect','loginRedirectRules',10,3);
function loginRedirectRules($redirect_to, $request, $user) {
    if (isset($user->roles) and is_array($user->roles)):
        if (!in_array('administrator', $user->roles)):
            $location = $_SERVER['HTTP_REFERER'];
            if (REDIRECT_BACK === true && !strstr( $location,'/wp-login/' )):
                wp_safe_redirect($location);
                exit;
            else:
               return get_permalink(HOME_PAGE);
            endif;
        else:
            return home_url() . '/wp-admin/index.php';
        endif;
    endif;
}
