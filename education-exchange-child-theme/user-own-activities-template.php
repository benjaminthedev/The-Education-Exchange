<?php
/*
 * Template Name: User Own Activity Template
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

                    <h1 class="elementor-heading-title elementor-size-large">Your Activity :(</h1>
                    <hr />


                    <p>fcygvuhbijnkjbhvgchfgx</p>


<article class="sharedContentArticle">




                    <?php

       $the_query = new WP_Query( array(
                            'post_type'      => 'user_logs',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'user_sub_logs', 
                                        'field'    => 'id',
                                        'terms'    => array(341)
                                    ),
                                ),
                                ));



                        // $the_query = new WP_Query( array(
                        //     'post_type'      => 'user_logs',
                        //         'tax_query'      => array(
                        //             array(
                        //                 'taxonomy' => 'user_sub_logs',
                        //                 'field'    => 'id',
                        //                 'terms'   => array(341)
                        //             ),
                        //         ),
                        //         ));

                        while ( $the_query->have_posts() ) :
                            $the_query->the_post();?>

                            <div class="sharedContent">
                                
                            <h1>Your Activity</h1>
                            <?php the_title(); ?>

                            <p>Learning Type: <?php the_field('learning_type'); ?></p>

                                <?php if( get_field('learning_type') ): ?>
                                    <p>Learning Type: <?php the_field('learning_type'); ?></p>
                                <?php endif; ?>


                                <?php if( get_field('start_date') ): ?>
                                    <p>Start Date: <?php the_field('start_date'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( get_field('end_date') ): ?>
                                    <p>Start Date: <?php the_field('end_date'); ?></p>
                                <?php endif; ?>

                                <?php if( get_field('time_spent_hours') ): ?>
                                    <p>Hours: <?php the_field('time_spent_hours'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( get_field('time_spent_minutes') ): ?>
                                    <p>Minutes: <?php the_field('time_spent_minutes'); ?></p>
                                <?php endif; ?>   

                                <?php if( get_field('notes') ): ?>
                                    <p>notes: <?php the_field('notes'); ?></p>
                                <?php endif; ?>  

                                <?php if( get_field('useful_links') ): ?>
                                    <p>notes: <?php the_field('useful_links'); ?></p>
                                <?php endif; ?>                                  
                                
                                


                            
        
                            <h3>
                                <a href="<?php the_permalink(); ?>" alt="Read The Shared Content">
                                    Edit
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

<?php get_footer(); ?>







