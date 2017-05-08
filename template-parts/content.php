<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package piclectic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('break'); ?>>
    
    <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="transition-link">
            <?php the_post_thumbnail( 'large', array( 'class' => 'archive-image') ); ?>
        </a>
        	
        <div class="post-content-container">   
            <header class="entry-header">
                <?php
                if ( is_single() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" class="transition-link" rel="bookmark">', '</a></h2>' );
                endif; ?>
                
                <?php
                if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php piclectic_posted_on(); ?>
                </div><!-- .entry-meta -->
                <?php
                endif; ?>
            </header><!-- .entry-header -->
        
            <footer class="entry-footer">
                <?php piclectic_entry_footer(); ?>
            </footer><!-- .entry-footer -->        
        </div>
        
    <?php else : ?>
        
        <header class="entry-header">
            <?php
            if ( is_single() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" class="transition-link" rel="bookmark">', '</a></h2>' );
            endif; ?>
            
            <?php
            if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php piclectic_posted_on(); ?>
            </div><!-- .entry-meta -->
            <?php
            endif; ?>
        </header><!-- .entry-header -->
    
        <footer class="entry-footer">
            <?php piclectic_entry_footer(); ?>
        </footer><!-- .entry-footer -->
        
    
    <?php endif; ?>
    
	
</article><!-- #post-## -->
