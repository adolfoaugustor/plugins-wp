<style>
/*---Getting Started---*/
.init-video{
  text-align: center;
  box-sizing: border-box;
}
.init-video .tabs{
  width: 100%;
  margin-top: -25px;
  display: -webkit-inline-box;
}
.tabs .tab_video-title1,
.tab_video-title2 {
  margin: 0px 10px 0px 5px;
  border-bottom: 4px solid transparent;
}
.tabs li a:hover {
  border-bottom: 2px solid #3190f7;
}
.tabs .active {
    border-bottom: 2px solid #3190f7;
    font: 600 19px/1.2em "Open Sans",arial,sans-serif;
}
.tabs li a{
  border-bottom: 3px solid #fff;
  cursor: pointer;
  text-decoration: none;
  position: relative;
  background-color: transparent;
  font: 500 19px/1.2em "Open Sans",arial,sans-serif;
  color: #222222;
}

@media only screen and (min-width: 800px){
  .list-videos .getting_started-item:nth-child(4n),
  .list-videos .learning_path-item:nth-child(4n){
    margin-right: 0;
    clear:right;
  }
  .list-videos .getting_started-item:first-child,
  .list-videos .getting_started-item:nth-child(5n),
  .list-videos .learning_path-item:first-child,
  .list-videos .learning_path-item:nth-child(5n){
    margin-left: 0;
        clear: left;
  }
}

.list-videos .getting_started-item,
.list-videos .learning_path-item {
  float: left;
  box-sizing: border-box;
/*  width: 23%;*/
    width: 24%;
    margin: 0.6666666666666667%;
  border: 1px solid #e6e6e6;
}
.list-videos .getting_started-item .card-content {
    width: 100%;
    /* float: left; */
    position: relative;
    margin: 0.4em 0px;
}
.list-videos .item_card .card-content p > a {
  text-decoration: none;
  color: #888;
}
.list-videos .item_card .card-content p > a:hover {
    color: #ff0000;
}
.list-videos .getting_started-item .title_card {
  text-decoration: none;
}
.list-videos .card img {
  width: 100%;
  max-width:230px;
  border:0;
  padding:0;
}
.list-videos .card .image {
  width: 100%;
}
.list-videos .learning_path-item {
   /* width: 100%;
    border: 1px solid #e6e6e6;
    margin: 5px 0 5px 0;*/
}
.learning_path-item .card-content {
    margin: 0.5em 0px;
    height: 35px;
    width: 100%;
}
.list-videos  div.learning_path-item article.item_thumb span.lesson {
    position: absolute;
    left: 2%;
    color: white;
    background: #3ecf59;
    padding: 2px 12px;
    bottom: 30%;
    font-size: 14px;
}
.list-videos .learning_path-item .item_thumb .alignleft {
    float: left;
    text-decoration: none;
    margin: 0;
}
span.topic-name {
  font-size: 17px;
  line-height: 19px;
  text-shadow: 0 0 13px rgba(0,0,0,.55);
}
.tile .title-text span {
  display: block;
  font-size: 13px;
  font-weight: 600;
  line-height: 20px;
  margin: 0 10px;
}
.more {
  text-align: center;
  font: bold 18px/1em Arial, sans-serif;
  color: #222222;
  padding: 5px;
}
.more .btn-link, .btn-link:active, .btn-link:focus, .btn-link:hover {
    border-color: transparent;
}
.more .btn-link, .btn-link.active, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
    background-color: transparent;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.more .btn-link {
    padding-bottom: 10px;
    padding-top: 0;
    font: bold 17px/1em Arial, sans-serif;
    color: #222222;
}
.more a.btn-link {
    cursor: pointer;
}
@media only screen and (max-width: 480px) {
  div.truncate .card:nth-child(n+4),
  div.truncate .card:nth-child(n+4) { display: none; }
  #getting:not(.truncate) .card:nth-child(n+7),
  #learning:not(.truncate) .card:nth-child(n+7){ display: none; }
  .tabs li a {
     font: 500 17px/1em "Open Sans",arial,sans-serif;
     cursor: pointer;
     text-decoration: none;
  }
  .tabs .active {
    border-bottom: 2px solid  #3190f7;
    font: 600 18px/1em "Open Sans",arial,sans-serif;
  }
  .init-video .list-videos h1{
    text-align: center;
  }
  .list-videos .getting_started-item,
  .list-videos .learning_path-item {
    float: left;
    width: 99%;
    margin: 1%;
  }
  .list-videos .getting_started-item .image,
  .list-videos .learning_path-item .image{
    float: left;
    width: 35%;
  }
  .list-videos .getting_started-item .card-content,
  .list-videos .learning_path-item .card-content {
    float: right;
    padding-top: 5%;
    width: 65%;
  }
  .list-videos .card .card-content h4 {
      font: 400 16px/1em 'Open Sans', arial, sans-serif;
      color: #555555;
  }
  .list-videos .card img {
    width: 100%;
    max-width:230px;
    border:0;
    padding:0;
  }
  .list-videos div.learning_path-item article.item_thumb span.lesson {
      position: absolute;
      left: 2%;
      color: white;
      background: #3ecf59;
      padding: 1px 10px;
      bottom: 4%;
      font-size: 14px;
  }
  span.topic-name {
    font-size: 17px;
    line-height: 19px;
    text-shadow: 0 0 13px rgba(0,0,0,.55);
  }
  .tile .title-text span {
    display: block;
    font-size: 13px;
    font-weight: 600;
    line-height: 20px;
    margin: 0 10px;
  }
  .list-videos .item_card .card_text .card-content p > a {
    text-decoration: none;
    color: #888;
  }
}
@media (min-width: 481px) and (max-width: 800px) {
  div.truncate .card:nth-child(n+4),
  div.truncate .card:nth-child(n+4) { display: none; }
  #getting:not(.truncate) .card:nth-child(n+7),
  #learning:not(.truncate) .card:nth-child(n+7){ display: none; }
  .list-videos .getting_started-item,
  .list-videos .learning_path-item {
    width: 99%;
    margin: 0.5%;
  }
  .list-videos .getting_started-item .image,
  .list-videos .learning_path-item .image{
    float: left;
    width: 32%;
  }
  .list-videos .getting_started-item .card-content,
  .list-videos .learning_path-item .card-content{
    width: 68%;
    float: left;
    padding-top: 3%;
  }
  .list-videos .card .card-content h4 {
      font: 400 17px/1.2em 'Open Sans', arial, sans-serif;
      color: #555555;
      float: none;
      padding: 3px;
  }
  .list-videos .item_card .card_text .card-content p > a {
    text-decoration: none;
    color: #888;
  }

  .list-videos  .learning_path-item.lessons article a.quickthumb {
    margin-bottom: 0px;
  }
  .list-videos .card img {
    width: 100%;
    max-width:230px;
    border:0;
    padding:0;
  }
  .list-videos  div.learning_path-item article.item_thumb span.lesson {
    position: absolute;
    left: 3%;
    color: white;
    background: #3ecf59;
    padding: 2px 12px;
    bottom: 3%;
    font-size: 14px;
  }
}
@media (min-width: 801px) and (max-width: 992px) {
  div.truncate .card:nth-child(n+5),
  div.truncate .card:nth-child(n+5) { display: none; }
  #getting:not(.truncate) .card:nth-child(n+9),
  #learning:not(.truncate) .card:nth-child(n+9){ display: none; }
  .list-videos .card img {
    width: 100%;
    border:0;
    padding:0;
  }
  .list-videos .getting_started-item,
  .list-videos .learning_path-item {
/*    width: 32%;
    margin: 0.5%;*/
  }
  .list-videos .getting_started-item .image {
    float: left;
    width: 100%;
  }
  .list-videos .getting_started-item .card-content {
    width: 100%;
    float: left;
    /*height: 50px;*/
  }
  .list-videos .card .card-content h4 {
    font: 400 17px/1.2em 'Open Sans', arial, sans-serif;
    color: #555555;
    float: none;
    padding: 3px;
  }
  .list-videos .item_card .card_text .card-content p > a {
    text-decoration: none;
    color: #888;
  }
}
@media (min-width: 993px) and (max-width: 1023px) {
  div.truncate .card:nth-child(n+5),
  div.truncate .card:nth-child(n+5) { display: none; }
  #getting:not(.truncate) .card:nth-child(n+9),
  #learning:not(.truncate) .card:nth-child(n+9){ display: none; }

  .init-video .list-videos.slick-list.draggable {
      width: 100%;
      /* margin: 0.4%; */
      /* padding-left: 0%; */
      /* height: 185px; */
  }
  .list-videos .item_card .card_text .card-content p > a {
    text-decoration: none;
    color: #888;
  }
/*  .list-videos .getting_started-item,
   .list-videos .learning_path-item{
    width: 32%;
    margin: 0.5%;
  }*/
  .list-videos .getting_started-item .card-content {
    width: 100%;
    float: left;
    bottom: 0;
  }
  .list-videos .card img {
    width: 100%;
    max-width:230px;
    vertical-align: baseline;
    border:0;
    padding:0;
  }
  .list-videos .card .card-content h4 {
    font: 400 17px/1.2em 'Open Sans', arial, sans-serif;
    color: #555555;
  }
}
@media screen and (min-width: 1024px) and (max-width: 1220px) {
  div.truncate .card:nth-child(n+5) { display: none; }

/* .list-videos .getting_started-item,
  .list-videos .learning_path-item {
    width: 24%;
    margin: 0 0.6666666666666667%;
  }*/
  .list-videos .card .card-content h4 {
    font: 400 17px/1.2em 'Open Sans', arial, sans-serif;
    color: #555555;
  }
  .list-videos .getting_started-item .card-content {
      width: 100%;
      float: left;
      height: 50px;
  }

  .list-videos .card img {
    width: 100%;
    max-width:230px;
    border:0;
    padding:0;
  }
}

@media screen and (min-width: 1221px) and (max-width: 1366px){
   div.truncate .card:nth-child(n+5) { display: none; }

  .list-videos .card article .card-content span {
    text-decoration: none;
    color: #9E9E9E;
  }
  .list-videos .card img {
    width: 100%;
    max-width:230px;
    border:0;
    padding:0;
  }
/* .list-videos .getting_started-item,
  .list-videos .learning_path-item {
    width: 24%;
    margin: 0.3%;
    color: #ffffff;
  }*/
  .more a.btn-link {
    cursor: pointer;
  }
  .list-videos .card .card-content h4 {
    font: 400 17px/1.2em 'Open Sans', arial, sans-serif;
    color: #555555;
  }
  /*.list-videos .getting_started-item .card-content {
    width: 100%;
    float: left;
    margin: 5px 0px;
    height: 45px;
  }*/
}
@media screen and (min-width: 1440px) {
  div.truncate .card:nth-child(n+5) { display: none; }

/*  .list-videos .getting_started-item,
  .list-videos .learning_path-item {
    width: 23%;
    margin: 0.5%;
  }*/
  .list-videos .card .card-content h4 {
    font: 400 17px/1.2em 'Open Sans', arial, sans-serif;
    color: #555555;
  }
  .list-videos .getting_started-item .card-content {
    width: 100%;
    float: left;
    margin: 0.5em 0px;
    height: 45px;
  }
  .list-videos .card img {
    width: 100%;
    max-width:230px;
    border:0;
    padding:0;
  }
}
@media screen and (min-width: 1600px) {
  div.truncate .card:nth-child(n+5) { display: none; }

 /* .list-videos .getting_started-item,
  .list-videos .learning_path-item {
    width: 23%;
    margin: 0.5%;
  }*/
  div.learning_path-item article.item_thumb span.lesson {
      position: absolute;
      /* left: 5%; */
      color: white;
      background: #3ecf59;
      padding: 2px 12px;
      bottom: 30%;
      font-size: 14px;
  }
  .list-videos .card img {
    width: 100%;
    max-width:230px;
    border:0;
    padding:0;
  }
}
.learning_path-videoCarrousel {
    margin-bottom: 10px;
}
/*---Getting Started-fim-----*/
</style>
<?php
    $terms_sub = get_terms( array(
        'taxonomy' => 'sub_videos',
        'hide_empty' => true,
    ) );
    $terms_id = array();
    foreach ( $terms_sub as $term_subject ) {
        $terms_id[] = $term_subject->term_id;
        $result = array_unique($terms_id);
    }

/*
* If it is not filtering anything, what are the standard arguments?
*/
function getStandardArgsFor($post_type,$posts_per_page=8,$orderby='rand',$ids_off=array()){
    global $result;
    switch ($post_type) {
        case 'videos_new':
             $args = array(
                        'post_type'         => 'videos_new',
                        'orderby'            => $orderby,
                        'order'             => 'DESC',
                        'posts_per_page'    => $posts_per_page,
                            'tax_query'     => array(
                                array(
                                    'taxonomy'  => 'genero',
                                    'field'     => 'term_id',
                                    'terms'     => 130,
                                ),
                                array(
                                    'taxonomy' => 'sub_videos',
                                    'field'     => 'term_id',
                                    'terms'     => array($result[0]),
                                ),
                            ),
                        'post__not_in'      =>  $ids_off,
                    );
            break;

        case 'noticias_new':
            $args = array(
                    'post_type'      => 'noticias_new',
                    'orderby'         => $orderby,
                    'order'          => 'DESC',
                    'posts_per_page' => $posts_per_page,
                        'tax_query' => array(
                            'taxonomy'  => 'genero',
                            'field'     => 'term_id',
                            'terms'     => array($result[0]),
                        ),
                    'post__not_in'  =>  $ids_off,
                );
            break;
        default:
            return false;
            break;
    }
    return $args;
} // end function

    if ( $isFiltering == true ) {
        /*________________videos_________________*/
        // debug($sideQuery);
        $args1 = array(
            'post_type'      => 'videos_new',
            'orderby'         => 'rand',
            'order'          => 'DESC',
            'posts_per_page' => 8,
                 'tax_query' => array(
                     'relation'  => 'AND',
                            array(
                                'taxonomy' => 'genero',
                                'field' => 'id',
                                // 'terms' => array( 180, 131, 132 ),
                                'terms' => array( 130 ),
                                'operator' => 'IN',
                                )
                     )
        );

        foreach ($sideQuery["tax_query"] as $key => $value){
            if ($key !== "relation"){
                $args1["tax_query"][] = $value;
            }
        }

        $videos = new WP_Query( $args1 );

        /*________________ noticias _________________*/
        $args2 = array(
            'post_type'      => 'noticias_new',
            'orderby'         => 'rand',
            'order'          => 'DESC',
            'posts_per_page' => 8,
                 'tax_query' => $sideQuery
        );
        // commenting noticias path stuff for site launch
        //$noticias = new WP_Query( $args2 );

    }

    // only searching by term, not filtering by tax..
    elseif ($q != " " || $q != NULL) {
        /*________________videos_________________*/
        $args1 = array(
            'post_type'         => 'videos_new',
            's'                 => $q,
            'orderby'           => 'rand',
            'order'             => 'DESC',
            'posts_per_page'    => 8,
            'tax_query'         => array(
                'taxonomy'      => 'genero',
                'field'         => 'term_id',
                'terms'         => array( 130 ),
                'operator'      => 'IN'
                )
        );
        $videos = new WP_Query( $args1 );

        /*________________ noticias _________________*/
        $args2 = array(
            'post_type' => 'noticias_new',
            's' => $q
        );
        // commenting noticias stuff for site launch
        //$noticias = new WP_Query( $args2 );

    }
    // not filtering at all...
    else{
    /*________________videos_________________*/

        $args1 = getStandardArgsFor('videos_new');
        $videos = new WP_Query( $args1 );
    /*________________noticias_________________*/
        // commenting noticias stuff for site launch
        //$args2 = getStandardArgsFor('noticias_new');
        //$noticias = new WP_Query( $args2 );
    }
?>

<div class="init-video noticias_path-videoCarrousel slick-initializedr">

    <ul class="tabs">
        <li class="tab_video-title1">
            <a class="title-1 videos active" onclick="openSlick('videos')">Lançamentos</a>
        </li>
        <li class="tab_video-title2">
            <a class="title-2 noticias" onclick="openSlick('noticias')">CoffNews</a>
        </li>
    </ul>

    <div class="fix"></div>

    <div class="list-videos slick-list draggable">
        <div id="videos" class="slick-track truncate" style="display:block;">
           <?php
            $g_array_ids = array();//array for armezening ids posts show
            if( $videos->have_posts() ) {
               $i=0;
                while ( $videos->have_posts() ) : $videos->the_post();
                    $terms = rwmb_meta('', 'type=taxonomy&taxonomy=author',get_the_ID() );
                    foreach ($terms as $term):
                        $instructorcontent = sprintf('<a href="%s" title="%s" class="related_instructor-name">%s</a>, ', get_term_link($term, 'tax_slug'), $term->name, $term->name);
                    endforeach; ?>

                    <div class="card videos_started-item lessons slick-current slick-active" <?php $i++; ?>>
                        <article class="item_card item-video">
                            <a href="<?php the_permalink(); ?>" class="title_card">
                                <div class="image">
                                    <?php
                                        if ( has_post_thumbnail() ){
                                            $customThumb = getImageSrcSet( get_post_thumbnail_id( get_the_ID() ), 'videos_new',
                                                                            array( 'class' => 'woo-image thumbnail cboxElement',
                                                                                   'alt'   => esc_attr( get_the_title() ),
                                                                                    )
                                                                        );

                                        }
                                        else {
                                            $customThumb = getImageSrcSet( false, false, false, IMAGE_URL . 'ghost-image.gif');
                                        }

                                        echo $customThumb;
                                    ?>
                                </div>
                            </a>
                        </article>
                    </div>
                <?php //Array of ids not to display (repeated)
                $g_array_ids[] = $post->ID;
                $ids_videos = $g_array_ids;
                endwhile; wp_reset_postdata();
                // Continues to show up to a total of 8 in the filters
                $total_a=8;
                if ($i < $total_a){
                $d = $total_a - $i;
                    $orderby='date';
                $args1 = getStandardArgsFor('videos_new',$d,$orderby, $ids_videos);
                $videos2 = new WP_Query( $args1 );

                if ( $videos2->have_posts() ) :
                while ( $videos2->have_posts() ) : $videos2->the_post();
                    $terms = rwmb_meta('', 'type=taxonomy&taxonomy=author',get_the_ID() );
                    foreach ($terms as $term):
                        $instructorcontent = sprintf('<a href="%s" title="%s" class="related_instructor-name">%s</a>, ',
                        get_term_link($term, 'tax_slug'), $term->name, $term->name);
                    endforeach; ?>

                    <div class="card videos_started-item lessons slick-current slick-active">
                        <article class="item_card item-video">
                        <a href="<?php the_permalink(); ?>" class="title_card">
                            <div class="image">
                                <?php
                                    if ( has_post_thumbnail() ){
                                        $customThumb = getImageSrcSet( get_post_thumbnail_id( get_the_ID() ), 'videos_new',
                                                                        array( 'class' => 'woo-image thumbnail cboxElement',
                                                                               'alt'   => esc_attr( get_the_title() ),
                                                                                )
                                                                    );
                                    }
                                    else {
                                        $customThumb = getImageSrcSet( false, false, false, IMAGE_URL . 'ghost-image.gif');
                                    }

                                    echo $customThumb;
                                ?>
                            </div>
                            <div class="card-content">
                                <h4><?php short_title('...', 24); ?></h4>
                                <p><?php echo rtrim($instructorcontent, ", ");?></p>
                            </div>
                        </a>
                        </article>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
                <?php endif;
                }
            }else{ // In case of any result for this specific filtering... show standard data
                $args_video = getStandardArgsFor('videos_new');
                $videos3 = new WP_Query( $args_video );

                while ( $videos3->have_posts() ) : $videos3->the_post();
                    $terms = rwmb_meta('', 'type=taxonomy&taxonomy=author',get_the_ID() );
                    foreach ($terms as $term):
                        $instructorcontent = sprintf('<a href="%s" title="%s" class="related_instructor-name">%s</a>, ',
                        get_term_link($term, 'tax_slug'), $term->name, $term->name);
                    endforeach; ?>

                    <div class="card videos_started-item lessons slick-current slick-active">
                        <article class="item_card item-video">
                        <a href="<?php the_permalink(); ?>" class="title_card">
                                <div class="image">
                                    <?php
                                        if ( has_post_thumbnail() ){
                                            $customThumb = getImageSrcSet( get_post_thumbnail_id( get_the_ID() ), 'videos_new',
                                                                            array( 'class' => 'woo-image thumbnail cboxElement',
                                                                                   'alt'   => esc_attr( get_the_title() ),
                                                                                    )
                                                                        );
                                        }
                                        else {
                                            $customThumb = getImageSrcSet( false, false, false, IMAGE_URL . 'ghost-image.gif');
                                        }
                                        echo $customThumb;
                                        ?>
                                </div
                        </a>
                        </article>
                    </div>
                <?php endwhile; wp_reset_postdata();
            }?>
        </div>
        <div id="noticias" class="slick-track truncate" style="display:none;">
          <?php
            $l_array_ids = array();//array for armezening ids posts show
            if ( $noticias->have_posts() ) {
                $c=0;
                while ( $noticias->have_posts() ) : $noticias->the_post();
                $post = get_post($id);
                $noticias_info = getnoticiasPathMeta($post->ID); ?>
                    <div class="card noticias_path-item lessons slick-slide slick-active" <?php $c++; ?>>
                        <article class="item_thumb">
                        <a href="<?php the_permalink(); ?>" class="quickthumb alignleft">
                            <div class="image">
                                <?php
                                if ( has_post_thumbnail() ){
                                        $customThumb = getImageSrcSet( get_post_thumbnail_id( get_the_ID() ), 'videos_new',
                                                                        array( 'class' => 'woo-image thumbnail cboxElement',
                                                                               'alt'   => esc_attr( get_the_title() ),
                                                                                )
                                                                    );
                                    }
                                    else {
                                        $customThumb = getImageSrcSet( false, false, false, IMAGE_URL . 'ghost-image.gif');
                                    }

                                    echo $customThumb;
                                    ?>
                            </div>
                            <div class="card-content">
                                <h4><?php short_title('...', 45); ?></h4>
                            </div>
                        </a>
                        </article>
                    </div>
                <?php
                //Array of ids not to display (repeated)
                $l_array_ids[] = $post->ID;
                $ids_noticias = $l_array_ids; //
                endwhile; wp_reset_postdata();
                // Continues to show up to a total of 8 in the filters
                // if posts null in filter, get normaly query.

                $total_b=8;
                if ($c < $total_b){
                $b = $total_b - $c;
                    $orderby='date';
                $args2 = getStandardArgsFor("noticias_new",$b,$orderby,$ids_noticias);
                $noticias2 = new WP_Query( $args2 );

                if (  $noticias2->have_posts() ) :
                while ( $noticias2->have_posts() ) : $noticias2->the_post();
                $post = get_post($id);
                $noticias_info = getnoticiasPathMeta($post->ID); ?>
                    <div class="card noticias_path-item lessons slick-slide slick-active">
                        <article class="item_thumb">
                        <a href="<?php the_permalink(); ?>" class="quickthumb alignleft">
                            <div class="image">
                                <?php
                                  if ( has_post_thumbnail() ){
                                            $customThumb = getImageSrcSet( get_post_thumbnail_id( get_the_ID() ), 'videos_new',
                                                                            array( 'class' => 'woo-image thumbnail cboxElement',
                                                                                   'alt'   => esc_attr( get_the_title() ),
                                                                                    )
                                                                        );
                                        }
                                        else {
                                            $customThumb = getImageSrcSet( false, false, false, IMAGE_URL . 'ghost-image.gif');
                                        }

                                    echo $customThumb;
                                    ?>
                            </div>
                            <div class="card-content">
                                <h4><?php short_title('...', 45); ?></h4>
                            </div>
                        </a>
                        </article>
                    </div>
                <?php endwhile; wp_reset_postdata();  ?>
                <?php endif;
               }
            }else{ // In case of any result for this specific filtering... show standard data
                $args2 = getStandardArgsFor("noticias_new");
                $noticias2 = new WP_Query( $args2 );

                if (  $noticias2->have_posts() ) :
                while ( $noticias2->have_posts() ) : $noticias2->the_post();
                $post = get_post($id);
                $noticias_info = getnoticiasPathMeta($post->ID); ?>
                    <div class="card noticias_path-item lessons slick-slide slick-active">
                        <article class="item_thumb">
                        <a href="<?php the_permalink(); ?>" class="quickthumb alignleft">
                            <div class="image">
                                <?php
                                if ( has_post_thumbnail() ){
                                            $customThumb = getImageSrcSet( get_post_thumbnail_id( get_the_ID() ), 'videos_new',
                                                                            array( 'class' => 'woo-image thumbnail cboxElement',
                                                                                   'alt'   => esc_attr( get_the_title() ),
                                                                                    )
                                                                        );
                                        }
                                        else {
                                            $customThumb = getImageSrcSet( false, false, false, IMAGE_URL . 'ghost-image.gif');
                                        }

                                        echo $customThumb;
                                ?>
                            </div>
                            <div class="card-content">
                                <h4><?php short_title('...', 45); ?></h4>
                            </div>
                        </a>
                        </article>
                    </div>
                <?php endwhile; wp_reset_postdata();  ?>
                <?php endif;
            } ?>
        </div><!-- noticias -->
    </div>
    <div style="clear:both;"></div>

</div>

<div class="more">
    <a class="btn btn-link show-more" id='btn-1'>Show More</a>
</div>
<!-- <div class="fix"></div> -->

<script>

/*-----------------------------------------------------------------------------------*/
/* structure th box getting started and learning path */
/*-----------------------------------------------------------------------------------*/
// tab between gatting and learning
function openSlick(slickName) {
  var i;
  var x = document.getElementsByClassName("slick-track");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  document.getElementById(slickName).style.display = "block";
}

// effect border between gatting and learning
jQuery(document).ready(function(){
  jQuery("a.title-2").click(function(){
      jQuery("a.title-2").addClass("active");
      jQuery("a.title-1").removeClass("active");
  });
  jQuery("a.title-1").click(function(){
      jQuery("a.title-1").addClass("active");
      jQuery("a.title-2").removeClass("active");
  });
});
// remove class truncate for show more itens
jQuery(document).ready(function() {
  jQuery('#btn-1').click(function(e) {
      e.preventDefault();
      jQuery(".slick-track").removeClass("truncate");
    jQuery( this ).closest('.more').slideUp('slow');
  });
});

</script>