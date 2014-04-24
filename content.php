<?php
/**
 * @package Guridon
 */
?>
<div id="entry-wrapper" class="item">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                    <?php if(has_post_thumbnail()): ?>
                        <div class="entry-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

                    <?php if ( 'post' == get_post_type() ) : ?>
                    <div class="entry-meta">
                        
                    </div><!-- .entry-meta -->
                    <?php endif; ?>
            </header><!-- .entry-header -->

            <?php if ( is_search() ) : // Only display Excerpts for Search ?>
            <div class="entry-summary">
                    <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
            <?php else : ?>
            <div class="entry-content">
                    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'guridon' ) ); ?>
                    <?php
                            wp_link_pages( array(
                                    'before' => '<div class="page-links">' . __( 'Pages:', 'guridon' ),
                                    'after'  => '</div>',
                            ) );
                    ?>
            </div><!-- .entry-content -->
            <?php endif; ?>

            <footer class="entry-footer">
                    
            </footer><!-- .entry-footer -->
    </article><!-- #post-## -->
</div><!-- #entry-wrapper -->
