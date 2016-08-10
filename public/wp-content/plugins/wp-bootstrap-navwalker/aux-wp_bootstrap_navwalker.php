<?php
/**
 * @package aux-wp_bootstrap_navwalker
 * @version 1.0
 */
/*
Plugin Name: aux-wp_bootstrap_navwalker
Plugin URI: http://aux.co.za
Description: This is the aux wp bootstrap navwalker plugin fix.
Author: auxstudios
Version: 1.0
Author URI: http://aux.co.za
*/

include( 'wp_bootstrap_navwalker.php' );

/*
<!-- change the default nav code after the header div to the one below -->

<!-- <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?//php bloginfo('name'); ?>
            </a>
    </div>
-->
            wp_nav_menu( array(
                'theme_location' => 'primary_navigation',
                'menu_class' => 'nav navbar',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
     
<!--  </div>
</nav>-->
*/
?>





