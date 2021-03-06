<?php 
/**
 * @package WordPress
 * @subpackage sigma
 */
?>
 <div class="header">  
    
    <div id="brand-header" class="container container-sixteen""> 
    
    <div class="logo">
    	<?php if ( get_header_image() != '' ) : ?>
               
            <a href="<?php echo esc_url( home_url('/') ); ?>">
            	<div class="header-elements-logo">
            		<img src="http://static.ucsc.edu/_responsive/images/logos/ucsc-logotype.svg" width="<?php if(function_exists('get_custom_header')) { echo get_custom_header() -> width;} else { echo HEADER_IMAGE_WIDTH;} ?>" height="<?php if(function_exists('get_custom_header')) { echo get_custom_header() -> height;} else { echo HEADER_IMAGE_HEIGHT;} ?>" alt="<?php bloginfo('name'); ?>" />
            	</div>
            	<div class="header-elements-h1">
            		<h1>MHIRT Program</h1>
            	</div>
            </a>
                    
        <?php else: ?>
        
			<a href="<?php echo esc_url( home_url() ); //make logo a home link?>">
            	<h1><?php echo get_bloginfo('name');?></h1>
			</a>
			
            <span class="site-description"><?php echo bloginfo('description');?></span>

    	<?php endif;?>

    </div>
    
   	
   		
    	<?php 
        wp_nav_menu( array( 
    		'fallback_cb'     => 'sigmatheme_page_menu',
    		'theme_location'  => 'primary',
    		'menu_class'      => 'sigma-theme-menu container thmfdn-menu dropdown sigma-theme-menu menu-hover',
    		'container'       => 'div',
    		'container_class' => 'thmfdn-menu-container'
    	)); 
    	?>
  
</div>
    
</div> <!--  End blog header -->