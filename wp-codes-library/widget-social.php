<?php

class Social_Widget extends WP_Widget {

    public function __construct() {

        parent::WP_Widget( false, $name_ops = "Social Network" );
    }

    public function widget( $args, $instance ) {
        extract($args);
        $title          = apply_filters('widget_title', $instance['title'] );
        $urlFeed        = $instance['urlFeed'];
        $urlFacebook    = $instance['urlFacebook'];
        $urlTwitter     = $instance['urlTwitter'];
        $urlYoutube     = $instance['urlYoutube'];
        $urlGplus       = $instance['urlGplus'];

        $text           = $instance['text'];

        $link           = $instance['link'];
        $link_text      = $instance['link_text'];

        $button_link    = $instance['button_link'];
        $button_title   = $instance['button_title'];

        echo $before_widget;
            if($title){

                //echo $before_widget;
                echo '<h3>'.$title.'</h3>';

                if ($text != '') {
                    echo '<div class="footer-text"><p>'.$text.'
                    <a href="'.$link.'">'.$link_text.'</a></p></div>';
                }

                echo '<ul class="social">';
                    echo '<li><a href="'.get_bloginfo( 'rss2_url' ).'" alt="Feed" class="fa fa-rss" target="_blank"></a></li>';

                if ($urlFacebook != '') {
                    echo '<li><a href="'.$urlFacebook.'" alt="Facebook" class="fa fa-facebook" target="_blank"></a></li>';
                }
                if ($urlTwitter != '') {
                    echo '<li><a href="'.$urlTwitter.'" alt="Twitter" class="fa fa-twitter" target="_blank"></a></li>';
                }
                if ($urlYoutube != '') {
                    echo '<li><a href="'.$urlYoutube.'" alt="Youtube" class="fa fa-youtube" target="_blank"></a></li>';
                }
                if ($urlGplus != '') {
                    echo '<li><a href="'.$urlGplus.'" alt="GooglePlus" class="fa fa-google-plus" target="_blank"></a></li>';
                }
                echo '</ul>';

                if ( $button_title != '') {
                echo '<div class="subscribe">
                        <a href="'.$button_link.'" class="woo-sc-button yellow-btn custom large nma-btn yellow">'.$button_title.'</a>
                    </div>';
                }
                if ( $title != '') {
                    echo '<div class="img-logo"><a id="footer-logo" title="'.get_bloginfo( 'name').'" href="'.get_bloginfo( 'url').'" target="_blank">
                        <img width="154" height="61" src="'.get_template_directory_uri().'/images/logo.svg">
                    </a></div>';
                }


                //echo $after_widget;
            }

        echo $after_widget;
    }

    public function update( $new_instance, $old_instance ) {

        $instance = $old_instance;
        $instance['title']          = wp_strip_all_tags( $new_instance['title'] );
        // $instance['urlFeed']        = wp_strip_all_tags( $new_instance['urlFeed'] );
        $instance['urlTwitter']     = wp_strip_all_tags( $new_instance['urlTwitter'] );
        $instance['urlFacebook']    = wp_strip_all_tags( $new_instance['urlFacebook'] );
        $instance['urlYoutube']     = wp_strip_all_tags( $new_instance['urlYoutube'] );
        $instance['urlGplus']       = wp_strip_all_tags( $new_instance['urlGplus'] );

        $instance['text']           = wp_strip_all_tags( $new_instance['text'] );

        $instance['link']           = wp_strip_all_tags( $new_instance['link'] );
        $instance['link_text']      = wp_strip_all_tags( $new_instance['link_text'] );
        $instance['button_link']    = wp_strip_all_tags( $new_instance['button_link'] );
        $instance['button_title']    = wp_strip_all_tags( $new_instance['button_title'] );

        return $instance;
    }

    public function form( $instance ) {
        $title          = esc_attr( $instance['title'] );
        // $urlFeed        = esc_attr( $instance['urlFeed'] );
        $urlTwitter     = esc_attr( $instance['urlTwitter'] );
        $urlFacebook    = esc_attr( $instance['urlFacebook'] );
        $urlYoutube     = esc_attr( $instance['urlYoutube'] );
        $urlGplus       = esc_attr( $instance['urlGplus'] );

        $text           = esc_attr( $instance['text'] );

        $link           = esc_attr( $instance['link'] );
        $link_text      = esc_attr( $instance['link_text'] );

        $button_link    = esc_attr( $instance['button_link'] );
        $button_title    = esc_attr( $instance['button_title'] );

        ?>
        <p>
            <label for="<?=$this->get_field_id('title');?>"> <?= _e('Title'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('title');?>"
            name="<?=$this->get_field_name('title'); ?>" value="<?=$title ?>"/>
        </p>
        <p>
            <label for="Feed is set auto"> <?= _e('Feed is set auto'); ?></label>
        </p>
        <p>
            <label for="<?=$this->get_field_id('urlTwitter');?>"> <?= _e('Twitter'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('urlTwitter');?>"
            name="<?=$this->get_field_name('urlTwitter'); ?>" value="<?=$urlTwitter ?>"/>
        </p>
        <p>
            <label for="<?=$this->get_field_id('urlFacebook');?>"> <?= _e('Facebook'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('urlFacebook');?>"
            name="<?=$this->get_field_name('urlFacebook'); ?>" value="<?=$urlFacebook ?>"/>
        </p>
        <p>
            <label for="<?=$this->get_field_id('urlYoutube');?>"> <?= _e('Youtube'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('urlYoutube');?>"
            name="<?=$this->get_field_name('urlYoutube'); ?>" value="<?=$urlYoutube ?>"/>
        </p>
        <p>
            <label for="<?=$this->get_field_id('urlGplus');?>"> <?= _e('Gplus'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('urlGplus');?>"
            name="<?=$this->get_field_name('urlGplus'); ?>" value="<?=$urlGplus ?>"/>
        </p>
        <p>
            <label for="<?=$this->get_field_id('text');?>"> <?= _e('Text contact'); ?></label>
            <textarea class="widefat" rows="6" cols="10" id="<?php echo $this->get_field_id('text'); ?>"
            name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

            <label for="<?=$this->get_field_id('link_text');?>"> <?= _e('Link Text'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('link_text');?>"
            name="<?=$this->get_field_name('link_text'); ?>" value="<?=$link_text ?>"/>

            <label for="<?=$this->get_field_id('link');?>"> <?= _e('Link Contact Us'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('link');?>"
            name="<?=$this->get_field_name('link'); ?>" value="<?=$link ?>"/>

        </p>

        <p>
            <label for="<?=$this->get_field_id('button_title');?>"> <?= _e('Text Button Subscribe'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('button_title');?>"
            name="<?=$this->get_field_name('button_title'); ?>" value="<?= $button_title ?>"/>

            <label for="<?=$this->get_field_id('button_link');?>"> <?= _e('Link Button Subscribe'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('button_link');?>"
            name="<?=$this->get_field_name('button_link'); ?>" value="<?=$button_link ?>"/><br>
        </p>

        <?php
    }
}
add_action('widgets_init', create_function('', 'return register_widget("Social_Widget");'));



/* Style of widget */

/* footer - changes logo /copyrigth /social icons*/

/*
.widget_social_widget {
  margin-right: 2.4%;
}
.social li {
    display: inline-block;
}
.widget_social_widget .subscribe a{
    text-align: center;
    background-color: #414040;
    padding: 10px;
    border-radius: 5px;
    text-decoration: none;
    color: white;
    font: 600 13px/1.5em "Helvetica Neue", Helvetica, sans-serif;
}
.widget_social_widget .subscribe a:hover{
  background-color: #1f1f1f;
}
.widget_social_widget .footer-text p{
  font: 300 13px/1.5em "Helvetica Neue", Helvetica, sans-serif;
  color: #999;
}
.widget_social_widget .subscribe{
    margin-top: 10px;
    margin-bottom: 0px;
    display: inline-flex;
}
.widget_social_widget .social li {
    display: inline-block;
    background-color: #414040;
    border-radius: 7px;
    margin-right: 5px;
    overflow: hidden;
    padding: 1px;
}
#footer-widgets .widget_social_widget .social li .fa {
    height: 32px;
    width: 32px;
    display: block;
    font-size: 20px;
    color: #fff;
    position: relative;
    top: 6px;
    left: 6px;
}
.widget_social_widget .social li a .fa {
    left: 10px;
}
.widget_social_widget .social li a:hover {
    text-decoration: none;
}
.widget_social_widget .social li:hover {
    background-color: #1f1f1f;
    -webkit-transition: all ease .3s;
    -o-transition: all ease .3s;
    transition: all ease .3s;
}
.img-logo {
    margin-top: 15px;
}


*/
