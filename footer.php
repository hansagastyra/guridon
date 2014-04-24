<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Guridon
 */
?>
	</div><!-- #content -->
        <div id="colophon" class="small-12 columns site-footer" role="contentinfo">
                <div class="site-info">
                        <?php printf( __( 'Proudly powered by %s', 'guridon' ),
                                '<a href="'.esc_url( __( 'http://wordpress.org/', 'guridon' ) ). '">' . 'WordPress' . '</a>' ); ?>
                        <span class="sep"> x </span>
                        <?php $themeinfo = wp_get_theme(); ?>
                        <?php printf( __( '%1$s', 'guridon' ), 
                                '<a href="' . $themeinfo->get('ThemeURI') . '" rel="theme-name">' . $themeinfo->get('Name') . '</a>'); ?>
                </div><!-- .site-info -->
        </div><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
