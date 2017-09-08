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

// remove action Welcome_painel
remove_action( 'welcome_panel', 'wp_welcome_panel');

add_action( 'welcome_panel', 'my_welcome_panel');

function my_welcome_panel( ){
	?>
	<div class="welcome-panel-content">
		<h3>Seja bem vindo! Painel Administrativo.</h3>
		<p>Siga-nos nas redes Sociais.</p>
		<div id="icons">
			<a href="#" target="_blank">
				<img src="http://localhost/workwordpress/wp-content/uploads/2017/09/1474968150-facebook-circle-color.png">
			</a>
			<a href="#" target="_blank">
				<img src="http://localhost/workwordpress/wp-content/uploads/2017/09/1474968161-youtube-circle-color.png">
			</a>
		</div>
	</div>	
	<?php 
}