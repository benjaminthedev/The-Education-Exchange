<?php
/*
 * Template Name: Shared Content - Building learning independence
 * 
 *
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>

	<?php do_action( 'ocean_before_content_wrap' ); ?>

	<div id="content-wrap" class="container clr">

		<?php do_action( 'ocean_before_primary' ); ?>

		<div id="primary" class="content-area clr">

			<?php do_action( 'ocean_before_content' ); ?>

			<div id="content" class="site-content clr">

				<?php do_action( 'ocean_before_content_inner' ); ?>

                    <!-- wp query -->

                    <h1 class="elementor-heading-title elementor-size-large">Building learning independence learning shared content.</h1>
                    <hr />



<h5 class="center">Do you have an article you would like to be posted on the site? Please visit the:</h5>
<div class="clear"></div>
<a href="/shared-content-form" class="standardBtn">Shared Content Page</a>

<div class="">

                    <?php
                        $the_query = new WP_Query( array(
                            'post_type'      => 'share',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'user_shared_content_categories', 
                                        'field'    => 'id',
                                        'terms'    => array(327, 332, 333, 328, 331, 329, 330)
                                    ),
                                ),
                                ));

                        while ( $the_query->have_posts() ) :
                            $the_query->the_post();?>

                            <div class="elementor-post__card">
        
                            <h3><?php the_title(); ?></h3>

                            <p>By: <?php the_field('name'); ?></p>

                            <p>From: <?php the_field('country'); ?></p>

                            <?php the_excerpt(); ?>

                            <a href="#" alt="Read More">Read More...</a>

                        </div><!-- end linkBox -->

                        <? endwhile;

                        /* Restore original Post Data 
                        * NB: Because we are using new WP_Query we aren't stomping on the 
                        * original $wp_query and it does not need to be reset.
                        */
                        wp_reset_postdata();
                    ?>


</div><!-- end linkBox -->

				<?php do_action( 'ocean_after_content_inner' ); ?>

			</div><!-- #content -->

			<?php do_action( 'ocean_after_content' ); ?>

		</div><!-- #primary -->

		<?php do_action( 'ocean_after_primary' ); ?>

	</div><!-- #content-wrap -->

	<?php do_action( 'ocean_after_content_wrap' ); ?>

<?php get_footer(); ?>