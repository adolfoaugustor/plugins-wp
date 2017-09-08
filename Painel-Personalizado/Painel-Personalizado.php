<?php
/*
Plugin Name: Painel Personalizado
Plugin URI:  https://aerowebsite.wordpress.com/
Description: Basic WordPress Plugin painel
Version:     20170908
Author:      aerowebsite.wordpress.com/
Author URI:  https://aerowebsite.wordpress.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wp-painel
Domain Path: /languages
*/

/**
 * Panel Custom
 */
class Panel_Person{
	private static $instance;
	
	public static function getInstance(){
		if (self::$instance == NULL) {
			self::$instance = new self();
		}
	}

	private function __construct(){
		// remove action Welcome_painel
		remove_action( 'welcome_panel', 'wp_welcome_panel');

		add_action( 'welcome_panel', array($this, 'welcome_panel') );        
		add_action( 'admin_enqueue_scripts', array($this, 'add_css') );        
    }

	function welcome_panel( ){
		?>
		<div class="welcome-panel-content">
			<h3>Seja bem vindo! Painel Administrativo.</h3>
			<p>Nós da <a href="aerowebsites.wordpress.com" title="Aero Web Sites">Aero Web Sites</a> agradeçemos a preferencia. Siga-nos nas redes Sociais.</p>
			<div id="icons">
				<a href="https://www.facebook.com/Aero-Web-Site-490312787976405/" target="_blank">
					<?php echo '<img src="'.plugins_url( 'img/facebook.png', __FILE__ ).'" > ';?>
				</a>
				<a href="https://www.instagram.com/aero_website/" target="_blank">
					<?php echo '<img src="'.plugins_url( 'img/instagram.png', __FILE__ ).'" > ';?>
				</a>
			</div>
		</div>	
		<?php 
	}

	function add_css() {
		wp_register_style( 'painel-person', plugins_url( 'css/painel-person.css', __FILE__ ) );
		wp_enqueue_style( 'painel-person' );
	}
}

Panel_Person::getInstance();

