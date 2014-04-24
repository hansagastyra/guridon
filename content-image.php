<?php
/**
 * @package Guridon
 */
?>
<div id="entry-wrapper" class="item">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-image">
                    <div class="entry-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                            <img src="<?php echo catch_first_image(); ?>">
                        <?php endif; ?>
                        </a>
                    </div>
                    <h1 class="entry-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h1>

                    <?php if ( 'post' == get_post_type() ) : ?>
                    <div class="entry-meta">
                        
                    </div><!-- .entry-meta -->
                    <?php endif; ?>
            </div><!-- .entry-header -->
    </article><!-- #post-## -->
</div><!-- #entry-wrapper -->
