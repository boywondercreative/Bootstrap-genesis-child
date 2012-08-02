<?php

/* Twitter Bootstrap
   Add or include to WordPress functions file
--------------------------------------------------------------------------------------- */

add_action('genesis_title', 'link_twitter_bootstrap');
function link_twitter_bootstrap() {	
	// bootstrap stylesheet
    wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/library/css/bootstrap.css', array(), '', 'all' );
    // bootstrap script
    wp_register_script( 'bootstrap.min', get_stylesheet_directory_uri() . '/library/js/libs/bootstrap.min.js', array( 'jquery' ), '', true );
    
    wp_enqueue_script( 'bootstrap.min' );
    wp_enqueue_style('bootstrap');
	
	?>
		<style type="text/css">
			body {
			padding-top: 60px;
			padding-bottom: 40px;
			}
		</style>
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<?php
}

remove_action('genesis_after_header', 'genesis_do_nav');
add_action('genesis_after_header', 'do_bootstrap_nav');

function do_bootstrap_nav() {
	?>
 <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<?php 
}

/* ----- Add Container Class to #inner ----- */

// Add div.wrap inside of div#inner
function child_before_content_sidebar_wrap() {
    echo '<div class="container">';
}
add_action('genesis_before_content_sidebar_wrap', 'child_before_content_sidebar_wrap');

function child_after_content_sidebar_wrap() {
    echo '</div><!-- end .container -->';
}
add_action('genesis_after_content_sidebar_wrap', 'child_after_content_sidebar_wrap');

/* ----- Enqueue BootStrap JavaScript ----- */

add_action('wp_enqueue_scripts', 'bootstrap_js_loader');
function bootstrap_js_loader() {
	wp_enqueue_script('prettify', get_template_directory_uri().'/js/prettify.js', array('jquery'),'1.0', true );
	wp_enqueue_script('transition', get_template_directory_uri().'/js/bootstrap-transition.js', array('jquery'),'1.0', true );
	wp_enqueue_script('alert', get_template_directory_uri().'/js/bootstrap-alert.js', array('jquery'),'1.0', true );
	wp_enqueue_script('modal', get_template_directory_uri().'/js/bootstrap-modal.js', array('jquery'),'1.0', true );
	wp_enqueue_script('dropdown', get_template_directory_uri().'/js/bootstrap-dropdown.js', array('jquery'),'1.0', true );
	wp_enqueue_script('scrollspy', get_template_directory_uri().'/js/bootstrap-scrollspy.js', array('jquery'),'1.0', true );
	wp_enqueue_script('tab', get_template_directory_uri().'/js/bootstrap-tab.js', array('jquery'),'1.0', true );
	wp_enqueue_script('tooltip', get_template_directory_uri().'/js/bootstrap-tooltip.js', array('jquery'),'1.0', true );
	wp_enqueue_script('popover', get_template_directory_uri().'/js/bootstrap-popover.js', array('tooltip'),'1.0', true );
	wp_enqueue_script('button', get_template_directory_uri().'/js/bootstrap-button.js', array('jquery'),'1.0', true );
	wp_enqueue_script('collapse', get_template_directory_uri().'/js/bootstrap-collapse.js', array('jquery'),'1.0', true );
	wp_enqueue_script('carousel', get_template_directory_uri().'/js/bootstrap-carousel.js', array('jquery'),'1.0', true );
	wp_enqueue_script('typeahead', get_template_directory_uri().'/js/bootstrap-typeahead.js', array('jquery'),'1.0', true );
	wp_enqueue_script('application', get_template_directory_uri().'/js/application.js', array('tooltip'),'1.0', true );
}
