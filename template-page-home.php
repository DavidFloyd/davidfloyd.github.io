<?php
/**
Template Name: Home Page
 *
 * @package piclectic
 */

get_header(); ?>

<section id="home-overview" class="overview-container">
    <div class="grid grid-pad">
        <div class="col-9-12">
        	<?php if ( get_theme_mod( 'piclectic_home_overview' ) ) : ?>
           		<h2 class="home-overview">
           			<?php echo wp_kses_post( get_theme_mod( 'piclectic_home_overview' )); ?>
                </h2>
            <?php endif; ?>
        </div>
    </div> 
</section>

<section id="home-gallery" class="gallery-container">
	<div class="grid">
    
    	<?php
		
			if ( get_theme_mod( 'active_random' ) ) :
				$piclectic_random_order = 'rand'; 
			else:
				$piclectic_random_order = 'date';
			endif;
			
			$piclectic_photo_order = piclectic_sanitize_photo_order( get_theme_mod( 'piclectic_post_order_method', 'DESC' ) );	
		
			// the query
			$piclectic_gallery_query = new WP_Query( array ( 
				'post_type' => 'post', 
				'order' => $piclectic_photo_order, 
				'orderby' => $piclectic_random_order,
				'posts_per_page' => 20, 
				'tax_query' => 				
					array(
						array(
      					'taxonomy' => 'post_format',
      					'field' => 'slug',
      					'terms' => 'post-format-image'
    		)))); ?>
          
			
			<?php while ( $piclectic_gallery_query->have_posts() ) : $piclectic_gallery_query->the_post(); ?>
                    
            	<?php if ( has_post_format( 'image' )) : ?>
                
                	<figure id="post-<?php the_ID(); ?>" <?php post_class('gallery-image'); ?>>
                        <div class="image-info-container">
                            
                            <div class="image-nav-container">
                            	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="transition-link">
                            		<span class="single-link"><?php echo wp_kses_post( get_theme_mod( 'piclectic_image_link_text', 'View Full' )); ?> <i class="fa fa-share"></i></span>
                                </a>
                                <a href="<?php the_post_thumbnail_url('full'); ?>" title="<?php the_title_attribute(); ?>" target="_blank">
                                	<span class="download-link"><?php echo wp_kses_post( get_theme_mod( 'piclectic_image_download_text', 'Download' )); ?> <i class="fa fa-download"></i></span>
                                </a>
                            </div>
                            <div class="image-title-container">
                                <p class="image-title"><?php the_title(); ?></p>
                                <?php echo wp_kses_post( get_the_category_list()); ?>
                            </div>
                        </div>
                        <?php the_post_thumbnail('piclectic-gallery-square'); ?>
                 	</figure>
                    
         		<?php endif; ?>
        
			<?php endwhile; // end of the loop. ?> 
                
    </div>
</section> 

<?php
get_footer();
