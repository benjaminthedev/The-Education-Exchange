<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */ ?>

        </main><!-- #main -->

        <?php do_action( 'ocean_after_main' ); ?>

        <?php do_action( 'ocean_before_footer' ); ?>

        <?php
        // Elementor `footer` location
        if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) { ?>

            <?php do_action( 'ocean_footer' ); ?>

        <?php } ?>

        <?php do_action( 'ocean_after_footer' ); ?>

    </div><!-- #wrap -->

    <?php do_action( 'ocean_after_wrap' ); ?>

</div><!-- #outer-wrap -->

<?php do_action( 'ocean_after_outer_wrap' ); ?>

<?php
// If is not sticky footer
if ( ! class_exists( 'Ocean_Sticky_Footer' ) ) {
    get_template_part( 'partials/scroll-top' );
} ?>

<?php
// Search overlay style
if ( 'overlay' == oceanwp_menu_search_style() ) {
    get_template_part( 'partials/header/search-overlay' );
} ?>

<?php
// If sidebar mobile menu style
if ( 'sidebar' == oceanwp_mobile_menu_style() ) {

    // Mobile panel close button
    if ( get_theme_mod( 'ocean_mobile_menu_close_btn', true ) ) {
        get_template_part( 'partials/mobile/mobile-sidr-close' );
    } ?>

    <?php
    // Mobile Menu (if defined)
    get_template_part( 'partials/mobile/mobile-nav' ); ?>

    <?php
    // Mobile search form
    if ( get_theme_mod( 'ocean_mobile_menu_search', true ) ) {
        get_template_part( 'partials/mobile/mobile-search' );
    }

} ?>

<?php
// If full screen mobile menu style
if ( 'fullscreen' == oceanwp_mobile_menu_style() ) {
    get_template_part( 'partials/mobile/mobile-fullscreen' );
} ?>

<?php wp_footer(); ?>


<?php
if ( is_user_logged_in() ) : ?>

    <script>

        <?php
        $user_id = '';
        $user_email = '';

        $user_id = get_current_user_id();
        $the_user = get_user_by( 'id', $user_id );
        $user_email = $the_user->user_email; ?>
        

        (function() { window.satismeter = window.satismeter || function() {(window.satismeter.q = window.satismeter.q || []).push(arguments);};window.satismeter.l = 1 * new Date();var script = document.createElement("script");var parent = document.getElementsByTagName("script")[0].parentNode;script.async = 1;script.src = "https://app.satismeter.com/satismeter.js";parent.appendChild(script);})();

        satismeter({
        writeKey: "nPTRv8MR9CCpoCJk",
        userId: "<?php echo $user_id; ?>",
        traits: {
          email: "<?php echo $user_email; ?>",
        }
        });
    </script>

<?php
endif; ?>



</body>
</html> 