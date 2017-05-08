<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package piclectic
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site animsition">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'piclectic' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
    	<div class="grid grid-pad">
        	<div class="col-1-1">
                <div class="site-branding">
                
                
                <?php if ( has_custom_logo() ) : ?> 
                    
                    <?php if ( function_exists( 'the_custom_logo' )) : ?>
                        	
                    	<span class="site-logo">
                    		<a class="transition-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    			<?php the_custom_logo(); ?>
                        	</a>
                    	</span>
                 
            		<?php endif; ?>
                    
                    <span class="title-container">
       					<h1 class='site-title'>
                   			<a class="transition-link" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                                
								<?php bloginfo( 'name' ); ?>
                            
                    		</a>
                    	</h1>
    				</span>
                
				<?php else : ?>
            
    				<span class="title-container">
       					<h1 class='site-title'>
                   			<a class="transition-link" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                                
								<?php bloginfo( 'name' ); ?>
                            
                    		</a>
                    	</h1>
    				</span>
                
				<?php endif; ?> 
                	
                    
                </div><!-- .site-branding -->
        
        		<div class="navigation-container">
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <a id="mobile-menu" href="#sidr" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<?php esc_html_e( 'Menu', 'piclectic' ); ?>
                        </a>
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                    </nav><!-- #site-navigation -->
               	</div>
                
          	</div>
       	</div>
        
        <div id="sidr">
          	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
