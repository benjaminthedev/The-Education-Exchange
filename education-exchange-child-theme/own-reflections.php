<?php
/*
 * Template Name: User Own Reflections
 * 
 *
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>

	<?php do_action( 'ocean_before_content_wrap' ); ?>

	<div class="wrapAllActivities">

		<?php do_action( 'ocean_before_primary' ); ?>

		<div>

			<?php do_action( 'ocean_before_content' ); ?>

			<div>

                <?php do_action( 'ocean_before_content_inner' ); ?>
                
                       <?php the_content(); ?>

                       <div class="newWrap">
                
                       <?php 
       
              global $current_user;
                get_currentuserinfo();
                $authorID = $current_user->ID;

       
       
       if ( !is_user_logged_in() ) { ?>
            <p>You need to be signed up and logged in to add your Reflections</p>

            <p>Log in or sign up <a href="/login/" alt="Sign Up Or Log In Here">here</a></p>
        <?php } else { ?>

          <div class="reflections__filters">
                <h4>Reflections Filters</h4>

                <?php echo do_shortcode('[facetwp facet="drop"]'); ?>
            </div>

<article id="activityPDF">

<h4>Your Reflections!</h4>



                    <?php

                        $the_query = new WP_Query( array(
                            'post_type' => 'userreflections',
                            'author' => $authorID,
                            'facetwp' => true
                        ));

                        while ( $the_query->have_posts() ) :
                            $the_query->the_post();?>
                                                      
                                             

                            <div class="userLog">

                                <!-- <h1><?php //the_title(); ?></h1> -->

                                <h3><?php the_field('title_of_reflection'); ?></h3>
                                <br />

                                 <div class="user__reflection">
                                    <?php the_field('reflection'); ?>                                
                                 </div>
                                 <br />

                                 <em>Theme: <?php the_field('what_theme'); ?></em>

                            </div><!-- end userLog -->                             
                        

                        <? endwhile;

                        /* Restore original Post Data 
                        * NB: Because we are using new WP_Query we aren't stomping on the 
                        * original $wp_query and it does not need to be reset.
                        */
                        wp_reset_postdata();
                    ?>

            </article>

        <div class="clear"></div>


         <div class="buttonsWrap">
            <a href="/add-a-new-reflection/" class="standardBtn">Add A New Reflection</a>
            <a href="/edit-your-reflections/" class="standardBtn">Edit Your Reflections</a>
        <?php } ?>           
        
</div><!-- end newWrap -->

        </div>

			</div><!-- #content -->
		</div><!-- #primary -->
    </div><!-- #content-wrap -->

<?php get_footer(); ?>