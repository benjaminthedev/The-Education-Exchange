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

                

                <select name="themes" class="themeSelect">
                    <option value="00">What theme is your reflection in please? </option>
                    <option value="01">The purpose and vision of education</option>
                    <option value="02">Connecting and expanding learning</option>
                    <option value="03">Online and digital learning</option>
                    <option value="04">Building learning independence</option>
                    <option value="05">Professional learning for the 21st century</option>
                </select>


            <div class="result"></div>


                <?php //echo do_shortcode('[facetwp facet="drop"]'); ?>

 <?php //echo do_shortcode('[facetwp facet="enw"]'); ?>

 <?php //echo do_shortcode(''); ?>

 

                <?php //echo do_shortcode('[facetwp template="reflections"]'); ?>
            </div>

<article id="activityPDF">

<h4>Your Reflections!</h4>

                    <?php

                        $the_query = new WP_Query( array(
                            'post_type' => 'userreflections',
                            'author' => $authorID,
                            'facetwp' => true
                        ));?>

                        <?php //echo do_shortcode('[facetwp facet="drop"]'); ?>

                        <?php while ( $the_query->have_posts() ) :
                            $the_query->the_post();?>
                                                      
                                             

                            <div class="userLog">

                                <!-- <h1><?php //the_title(); ?></h1> -->

                                <h3><?php the_field('title_of_reflection'); ?></h3>
                                <br />

                                 <div class="user__reflection">
                                    <?php the_field('reflection'); ?>                                
                                 </div>
                                 <br />

                                 <em class="what__field">Theme: <?php the_field('what_theme'); ?></em>

                            </div><!-- end userLog -->                             
                        

                        <? endwhile;

                        /* Restore original Post Data 
                        * NB: Because we are using new WP_Query we aren't stomping on the 
                        * original $wp_query and it does not need to be reset.
                        */
                        wp_reset_postdata();
                    ?>

            </article>

            <style>
            .userLog.not__showing {
                display: none;
            }
            .userLog.newnewnew {
                background: lightblue;
            }
            </style>

            <script>
    /*
    
    POA

    1, Get all the what__fields textContent etc 
    2, Stick in an array?
    3, Create a dropdown select filter
    4, If X is selected then hide x parent containing div - add class  - hides the whole thing
    5, If none select then show all

Use this to hide!
    allFields[0].parentElement.classList.add('not__showing');


            Default:
    allFields[0].parentElement.classList.remove('not__showing');


    Notes:


    Use this to hide!
    allFields[0].parentElement.classList.add('not__showing');


            Default:
    allFields[0].parentElement.classList.remove('not__showing');

    
    */



//Target Value 
const selectElement = document.querySelector('.themeSelect');

selectElement.addEventListener('change', (event) => {
//Target Value Selected:
//   const result = document.querySelector('.result');
//   result.textContent = `You like ${event.target.value}`;
console.log(`Your chosen target is ${event.target.value}`);

//all fields
const allFields = document.querySelectorAll('.what__field');
//sconsole.log(allFields);


// 
    allFields.forEach((text, i) => {          
        const textEle = text.textContent;
        //console.log(`this is textEle: ${textEle}`);

        if(event.target.value === "01" && textEle === "Theme: The purpose and vision of education"){
            console.log('the same as Theme: The purpose and vision of education - working');
            text.parentElement.classList.add('newnewnew');
        } else {
            text.parentElement.classList.remove('newnewnew');
        }

        //not__showing 
        // allFields[0].parentElement.classList.add('not__showing');



            
    });

});

            </script>

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