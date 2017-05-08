<?php
/**
 * piclectic Theme Customizer
 *
 * @package piclectic
 */


/**
 * Add CSS in <head> for styles handled by the theme customizer
 *
 * @since 1.5
 */
function piclectic_add_customizer_css() {
	
?>
	
<!-- piclectic customizer CSS -->  

	<style>
	
		<?php if ( get_theme_mod( 'piclectic_nav_link_color' ) ) : ?>
		.main-navigation a { color: <?php echo esc_attr( get_theme_mod( 'piclectic_nav_link_color', '#000000' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_nav_link_hover_color' ) ) : ?>
		.main-navigation li:hover > a, .main-navigation li.focus > a { color: <?php echo esc_attr( get_theme_mod( 'piclectic_nav_link_hover_color', '#000000' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_nav_dropdown_bg_color' ) ) : ?>
		.main-navigation ul ul { background-color: <?php echo esc_attr( get_theme_mod( 'piclectic_nav_dropdown_bg_color', '#f9f9f9' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_nav_dropdown_bg_color' ) ) : ?>
		.main-navigation ul ul { border-color: <?php echo esc_attr( get_theme_mod( 'piclectic_nav_dropdown_bg_color', '#f9f9f9' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'piclectic_mobile_menu_text' ) ) : ?>
		.main-navigation a.menu-toggle { color: <?php echo esc_attr( get_theme_mod( 'piclectic_mobile_menu_text', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_mobile_menu_bg' ) ) : ?>
		.menu-toggle { background-color: <?php echo esc_attr( get_theme_mod( 'piclectic_mobile_menu_bg', '#111111' )) ?>; } 
		<?php endif; ?>
		
		
		
		<?php if ( get_theme_mod( 'piclectic_image_text_color' ) ) : ?>
		p.image-title, .image-title-container ul.post-categories li a { color: <?php echo esc_attr( get_theme_mod( 'piclectic_image_text_color', '#ffffff' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'piclectic_link_button_color' ) ) : ?>
		.gallery-image .image-nav-container > a { background: <?php echo esc_attr( get_theme_mod( 'piclectic_link_button_color', '#ffffff' )) ?>; opacity:0.8; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_link_button_text' ) ) : ?>
		.gallery-image .image-nav-container > a { color: <?php echo esc_attr( get_theme_mod( 'piclectic_link_button_text', '#222222' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_gallery_lb_text' ) ) : ?>
		.mfp-title h3, .mfp-title p, .mfp-counter { color: <?php echo esc_attr( get_theme_mod( 'piclectic_gallery_lb_text', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_hero_heading_color' ) ) : ?>
		h2.home-overview { color: <?php echo esc_attr( get_theme_mod( 'piclectic_hero_heading_color', '#000000' )) ?>; }
		<?php endif; ?>
		
		
		
		<?php if ( get_theme_mod( 'piclectic_text_color' ) ) : ?> 
		body, textarea, p { color: <?php echo esc_attr( get_theme_mod( 'piclectic_text_color', '#404040' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_link_color' ) ) : ?>
		a { color: <?php echo esc_attr( get_theme_mod( 'piclectic_link_color', '#000000' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_hover_color' ) ) : ?>
		a:hover { color: <?php echo esc_attr( get_theme_mod( 'piclectic_hover_color', '#000000' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_body_size' ) ) : ?>
		body, p { font-size: <?php echo esc_attr( get_theme_mod( 'piclectic_body_size', '16' )) ?>px; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'piclectic_site_title_color' ) ) : ?>
		h1.site-title a { color: <?php echo esc_attr( get_theme_mod( 'piclectic_site_title_color', '#000000' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_entry' ) ) : ?>
		.entry-title { color: <?php echo esc_attr( get_theme_mod( 'piclectic_entry', '#000000' )) ?>; } 
		<?php endif; ?> 
		
		
		
		<?php if ( get_theme_mod( 'piclectic_button_color' ) ) : ?>
		button, input[type="button"], input[type="reset"], input[type="submit"] 
			{ border-color: <?php echo esc_attr( get_theme_mod( 'piclectic_button_color', '#000000' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_button_text_color' ) ) : ?>  
		button, input[type="button"], input[type="reset"], input[type="submit"] { color: <?php echo esc_attr( get_theme_mod( 'piclectic_button_text_color', '#000000' )) ?>; }    
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_button_hover_color' ) ) : ?>  
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { background-color: <?php echo esc_attr( get_theme_mod( 'piclectic_button_hover_color', '#000000' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_button_hover_color' ) ) : ?>  
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'piclectic_button_hover_color', '#000000' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_button_hover_text_color' ) ) : ?>  
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { color: <?php echo esc_attr( get_theme_mod( 'piclectic_button_hover_text_color', '#ffffff' )) ?>; }   
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_blockquote' ) ) : ?>
		blockquote { border-color: <?php echo esc_attr( get_theme_mod( 'piclectic_blockquote', '#404040' )) ?>; } 
		<?php endif; ?>  
		
		
		
		<?php if ( get_theme_mod( 'piclectic_social_color' ) ) : ?>
		.social-media-icons li .fa, #menu-social li a::before  { color: <?php echo esc_attr( get_theme_mod( 'piclectic_social_color', '#000000' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'piclectic_social_color_hover' ) ) : ?>
		.social-media-icons li .fa:hover, #menu-social li a:hover::before, #menu-social li a:focus::before { color: <?php echo esc_attr( get_theme_mod( 'piclectic_social_color_hover', '#000000' )) ?>; 
		}
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_social_text_size' ) ) : ?>
		.social-media-icons li .fa, #menu-social li a::before { font-size: <?php echo esc_attr( get_theme_mod( 'piclectic_social_text_size', '16' )) ?>px; }
		<?php endif; ?> 
	
	
	
	
		<?php if ( get_theme_mod( 'piclectic_footer_color' ) ) : ?>
		.site-footer { background: <?php echo esc_attr( get_theme_mod( 'piclectic_footer_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_footer_text_color' ) ) : ?>
		.site-info, .site-footer, .site-footer p { color: <?php echo esc_attr( get_theme_mod( 'piclectic_footer_text_color', '#404040' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_footer_link_color' ) ) : ?>
		.site-info a, .site-footer a { color: <?php echo esc_attr( get_theme_mod( 'piclectic_footer_link_color', '#000000' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_footer_link_hover_color' ) ) : ?>
		.site-info a:hover, .site-footer a:hover { color: <?php echo esc_attr( get_theme_mod( 'piclectic_footer_link_hover_color', '#000000' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'piclectic_footer_heading_color' ) ) : ?>
		.site-footer h1, .site-footer h2, .site-footer h3, .site-footer h4, .site-footer h5, .site-footer h6 { color: <?php echo esc_attr( get_theme_mod( 'piclectic_footer_heading_color', '#000000' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_post_nav_bg' ) ) : ?>
		.comment-navigation .nav-previous a, .posts-navigation .nav-previous a, .post-navigation .nav-previous a { background-color: <?php echo esc_attr( get_theme_mod( 'piclectic_post_nav_bg', '#000000' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'piclectic_post_nav_bg' ) ) : ?>
		.comment-navigation .nav-next a, .posts-navigation .nav-next a, .post-navigation .nav-next a { background-color: <?php echo esc_attr( get_theme_mod( 'piclectic_post_nav_bg', '#000000' )) ?>; }
		<?php endif; ?>
		
		  
	</style>
 
<?php   
    
}

add_action( 'wp_head', 'piclectic_add_customizer_css' );

