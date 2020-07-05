<?php
/*
 * Template Name: User Own Activity Template BACKUP
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

                    <h1 class="elementor-heading-title elementor-size-large">Your Activity</h1>
                    <hr />




       <?php 
       
              global $current_user;
                get_currentuserinfo();
                $authorID = $current_user->ID;

       
       
       if ( !is_user_logged_in() ) { ?>
            <p>You need to be signed up and logged in to add your activites</p>

            <p>Log in or sign up <a href="/login/" alt="Sign Up Or Log In Here">here</a></p>
        <?php } else { ?>

<article>




                    <?php

         
                //echo "Author ID: ";
                //echo $authorID;

                        $the_query = new WP_Query( array(
                            'post_type'      => 'user_logs',
                            'author' => $authorID,
                                // 'tax_query'      => array(
                                //     array(
                                //         'taxonomy' => 'user_sub_logs', 
                                //         'field'    => 'id',
                                //         'terms'    => array(341)
                                //     ),
                                // ),
                                ));

                        while ( $the_query->have_posts() ) :
                            $the_query->the_post();?>

                            <div >
                                
                         
                           

                            <div class="userLog">

                                <h1><?php the_title(); ?></h1>

                                <div class="activityWrapper">
                            
                            <div class="rowDown">
                                <?php if( get_field('learning_type') ): ?>
                                    <h5>Learning Type:</h5> 
                                    <p class="learningType"><?php the_field('learning_type'); ?></p>
                                <?php endif; ?>
                            </div>




                                <?php if( get_field('start_date') ): ?>
                                    <p><h5>Start Date:</h5> <?php the_field('start_date'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( get_field('end_date') ): ?>
                                    <p><h5>End Date:</h5> <?php the_field('end_date'); ?></p>
                                <?php endif; ?>

                                <?php if( get_field('time_spent_hours') ): ?>
                                    <h5>Hours:</h5>
                                    <p class="hours"><?php the_field('time_spent_hours'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( get_field('time_spent_minutes') ): ?>
                                    
                                    <h5>Minutes:</h5>
                                    <p class="minutes"><?php the_field('time_spent_minutes'); ?></p>
                                <?php endif; ?>   

                                <?php if( get_field('notes') ): ?>
                                    <p><h5>Notes:</h5> <?php the_field('notes'); ?></p>
                                <?php endif; ?>  

                                <?php if( get_field('useful_links') ): ?>
                                    <p>Useful Links: <?php the_field('useful_links'); ?></p>
                                <?php endif; ?>                                  
                                </div>
                        </div>

                        <? endwhile;

                        /* Restore original Post Data 
                        * NB: Because we are using new WP_Query we aren't stomping on the 
                        * original $wp_query and it does not need to be reset.
                        */
                        wp_reset_postdata();
                    ?>

</article>

        <div class="clear"></div>

  
            <a href="/edit-your-activities/">Edit Your Activities</a>
        <?php } ?>                           

			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!-- #content-wrap -->
<?php get_footer(); ?>







<style>

</style>