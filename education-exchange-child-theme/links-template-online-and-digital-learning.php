<?php
/*
 * Template Name: Links - Online and digital learning
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

                    <h1 class="elementor-heading-title elementor-size-large">Links shared by our community</h1>
                    <hr />



<h5 class="center">Do you have a link you'd like to share with The Education Exchange community?</h5>
<div class="clear"></div>
<a href="/submit-link/" class="standardBtn">Share Your Link</a>

<article class="sharedContentArticle">

                    <?php
                        $the_query = new WP_Query( array(
                            'post_type'      => 'links',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'user_submitted_link_categories', 
                                        'field'    => 'id',
                                        'terms'    => array(273, 292, 291, 289, 290, 293, 288)
                                    ),
                                ),
                                ));

                        while ( $the_query->have_posts() ) :
                            $the_query->the_post();?>

                        <div class="sharedContent">
    
                            <h3><?php the_title(); ?></h3>
                            
                            <p><?php the_field('short_description'); ?></p>

                            <a href="<?php the_field('url_of_link'); ?>" target="_blank" alt="User Submitted Link"><?php the_field('url_of_link'); ?></a>

                            <p>Submitted by: <?php the_field('name'); ?></p>

                            <p>From: <?php the_field('country'); ?></p>

                        </div><!-- end sharedContent -->

                        <? endwhile;

                        /* Restore original Post Data 
                        * NB: Because we are using new WP_Query we aren't stomping on the 
                        * original $wp_query and it does not need to be reset.
                        */
                        wp_reset_postdata();
                    ?>


</article>

				<?php do_action( 'ocean_after_content_inner' ); ?>

			</div><!-- #content -->

			<?php do_action( 'ocean_after_content' ); ?>

		</div><!-- #primary -->

		<?php do_action( 'ocean_after_primary' ); ?>

	</div><!-- #content-wrap -->

    <?php do_action( 'ocean_after_content_wrap' ); ?>
    
    <?php the_content(); ?>

<?php get_footer(); ?>