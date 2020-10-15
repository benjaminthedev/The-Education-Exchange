<?php
/*
 * Template Name: User Own Reflections
 * 
 *
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

	<?php do_action( 'ocean_before_content_wrap' ); ?>

	<div class="wrapAllActivities">

		<?php do_action( 'ocean_before_primary' ); ?>

		<div >

			<?php do_action( 'ocean_before_content' ); ?>

			<div >

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

<h4>Your Reflections</h4>



                    <?php

                        $the_query = new WP_Query( array(
                            'post_type' => 'userreflections',
                            'author' => $authorID,
                            'facetwp' => true
                        ));

                        while ( $the_query->have_posts() ) :
                            $the_query->the_post();?>




                            <div>                           
                                               

                            <div class="userLog">

                                <h1><?php the_title(); ?></h1>


                                 <?php the_field('reflection'); ?>

                                 <?php the_field('what_theme'); ?>

                                <div class="activityWrapper">
                            
                            <div class="rowDown">
                                <?php if( get_field('learning_type') ): ?>
                                    <h5>Learning Type:</h5> 
                                    <p class="learningType">
                                        <?php the_field('learning_type'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>



                            <div class="rowDown">            
                                <?php if( get_field('start_date') ): ?>
                                    <h5>Start Date:</h5> 
                                    <p class="startDate">
                                        <?php the_field('start_date'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            
                            

                            <div class="rowDown">                  
                                <?php if( get_field('end_date') ): ?>
                                    <h5>End Date:</h5>
                                    <p class="startDate"> 
                                        <?php the_field('end_date'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>   


                            <div class="rowDown">                  
                                <?php if( get_field('time_spent_hours') ): ?>
                                    <h5>Hours:</h5>
                                    <p class="hours">
                                        <?php the_field('time_spent_hours'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>  
                                

                            <div class="rowDown">                                              
                                <?php if( get_field('time_spent_minutes') ): ?>
                                    <h5>Minutes:</h5>
                                    <p class="minutes">
                                        <?php the_field('time_spent_minutes'); ?>
                                    </p>
                                <?php endif; ?>   
                            </div>        



                            <div class="rowDown">                      
                                <?php if( get_field('notes') ): ?>
                                    <h5>Notes:</h5> 
                                    <div class="notes">
                                        <?php the_field('notes'); ?>
                                    </div>
                                <?php endif; ?>  
                            </div>            



                            <div class="rowDown">          
                                <?php if( get_field('useful_links') ): ?>
                                    <h5>Useful Links:</h5>
                                    <div class="usefulLinks">
                                        <?php the_field('useful_links'); ?>
                                    </div>
                                <?php endif; ?>                                  
                            </div>        

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


    <div class="buttonsWrap">
            <a href="/add-a-new-reflection/" class="standardBtn">Add A New Reflection</a>
            <!-- <a href="#" class="standardBtn">Edit Your Reflections</a> -->


            
        <?php } ?>           
        
</div><!-- end newWrap -->

        </div>

			</div><!-- #content -->
		</div><!-- #primary -->
    </div><!-- #content-wrap -->

<?php get_footer(); ?>