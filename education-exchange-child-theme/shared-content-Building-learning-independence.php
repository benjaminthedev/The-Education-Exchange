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

                    <h1 class="elementor-heading-title elementor-size-large">Building learning independence - content shared by the community</h1>
                    <hr />

<h5 class="center">Do you have written or video reflections you'd like to share with The Education Exchange community?</h5>
<div class="clear"></div>
<a href="/shared-content-form" class="standardBtn">Share Your Perspective</a>

<article class="sharedContentArticle">
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

                            <div class="sharedContent"> 

                            
        
                            <h3>
                                <a href="<?php the_permalink(); ?>" alt="Read The Shared Content">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <?php the_excerpt(); ?>

                                <hr />

                                <?php if( get_field('name') ): ?>
                                    <p>Submitted by: <?php the_field('name'); ?></p>
                                <?php endif; ?>

                        <?php if( get_field('country') ): ?>                
                            <p>From: <?php the_field('country'); ?></p>
                        <?php endif; ?>
                            <a href="<?php the_permalink(); ?>" alt="Read More">Read More »</a>

                        </div>

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







