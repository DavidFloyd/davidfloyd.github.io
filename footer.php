<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package piclectic
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="grid grid-pad">
        	<div class="col-1-1">
                <div class="site-info">
                    
                    <?php if( get_theme_mod( 'active_byline' ) == '') : ?>
                    
                    	
                        
							<?php if ( get_theme_mod( 'piclectic_footerid' ) ) : ?> 
                
        						<?php echo wp_kses_post( get_theme_mod( 'piclectic_footerid' )); // footer id ?>
                    
							<?php else : ?>
                            
                            	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'piclectic' ) ); ?>">
									<?php printf( esc_html__( 'Proudly powered by %s', 'piclectic' ), 'WordPress' ); ?>
                        		</a>
            
            					<span class="sep"> | </span>
                
    							<?php printf( esc_html__( 'Theme: %1$s by %2$s', 'piclectic' ), 'piclectic', '<a href="//modernthemes.net">modernthemes.net</a>' ); ?>
                    
							<?php endif; ?>
                            
                        
                
        			<?php endif; ?>
                    
				</div><!-- .site-info -->
                
                
				<?php if( get_theme_mod( 'active_social_icons' ) == '') : ?>
                    
                    <?php if ( has_nav_menu( 'social' ) ) : // social icon location. ?>
                    
                    	<div class="site-socials">
        
        						<?php get_template_part( 'menu', 'social' ); ?>
            
                        </div>
            
					<?php endif; // End check for menu. ?>
                    
                <?php endif; ?>
                
            
          	</div>
      	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
