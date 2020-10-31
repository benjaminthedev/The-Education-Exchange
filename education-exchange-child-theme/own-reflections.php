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
                                                      
                                             

                            <div class="userLog ">

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
            .userLog.hide_me {
                display: none;
            }
            </style>

            <script>
                //Target Value - options
                const selectElement = document.querySelector('.themeSelect');
                //Event listener on change for the options above
                selectElement.addEventListener('change', (event) => {
                //Target Value Selected:
                console.log(`Your chosen target is ${event.target.value}`);

                //all fields
                const allFields = document.querySelectorAll('.what__field');

                //foreach on allFields 
                    allFields.forEach((text) => {  
                        //What is the textContent?        
                        const textEle = text.textContent;
                        //What is the target value
                        const valueIs = event.target.value;

                          //Ugh massive if statement
                          // will come back a refactor and remove all crap code.
                        if(valueIs === "00"){
                            text.parentElement.classList.add('new_show');
                            text.parentElement.classList.remove('hide_me');
                        } else if(valueIs === "01" && textEle === "Theme: The purpose and vision of education"){
                            text.parentElement.classList.remove('hide_me');
                            text.parentElement.classList.add('new_show');
                        } else if(valueIs === "02" && textEle === "Theme: Connecting and expanding learning"){
                            text.parentElement.classList.remove('hide_me');
                            text.parentElement.classList.add('new_show');
                        } else if(valueIs === "03" && textEle === "Theme: Online and digital learning"){
                            text.parentElement.classList.remove('hide_me');
                            text.parentElement.classList.add('new_show');
                        } else if(valueIs === "04" && textEle === "Theme: Building learning independence"){
                            text.parentElement.classList.remove('hide_me');
                            text.parentElement.classList.add('new_show');
                        } else if(valueIs === "05" && textEle === "Theme: Professional learning for the 21st century"){
                            text.parentElement.classList.remove('hide_me');
                            text.parentElement.classList.add('new_show');
                        }   else {
                            text.parentElement.classList.add('hide_me');
                        }
                        

                         //If is 01
                        // if(valueIs === "01" && textEle === "Theme: The purpose and vision of education"){
                        //     text.parentElement.classList.add('newnewnew');
                        // } else {
                        //     text.parentElement.classList.remove('show__me');
                        // }

                        // If is selected num - hide the rest 
                        //if back on 00 then show all

                        
                        
                        
                        
                        
                        //Add Class
                        //const addClass = text.parentElement.classList.add('not__showing');
                        //Remove Class
                        //const remove = text.parentElement.classList.remove('not__showing');
                        //text.parentElement.classList.remove('not__showing');

                        // //Theme one
                        // const themeOne = "Theme: The purpose and vision of education";
                        // //Theme two
                        // const themeTwo = "Theme: Connecting and expanding learning";
                        // //Theme three                        
                        // const themeThree = "Theme: Online and digital learning";
                        // //Theme four                        
                        // const themeFour = "Theme: Building learning independence";
                        // //Theme five                        
                        // const themeFive = "Theme: Professional learning for the 21st century";

                        // //Add Class
                        // const addClass = text.parentElement.classList.add('not__showing');
                                                                      
                        // //Checking 00 theme
                        // let firstTheme;
                        // firstTheme = valueIs === "00" ? addClass : text.parentElement.classList.remove('not__showing');
                        
                        // //Checking first theme
                        // let firstTheme;
                        // firstTheme = valueIs === "01" && textEle === themeOne ? addClass : text.parentElement.classList.remove('not__showing');

                        // //Checking second theme
                        // let secondTheme;
                        // secondTheme = valueIs === "02" && textEle === themeTwo ? addClass : text.parentElement.classList.remove('not__showing');

                        // //Checking third theme
                        // let thirdTheme;
                        // thirdTheme = valueIs === "03" && textEle === themeThree ? addClass : text.parentElement.classList.remove('not__showing');                        
                        
                        // //Checking fourth theme
                        // let fourthTheme;
                        // fourthTheme = valueIs === "04" && textEle === themeFour ? addClass : text.parentElement.classList.remove('not__showing');                          

                        // //Checking fifth theme
                        // let fifthTheme;
                        // fifthTheme = valueIs === "05" && textEle === themeFive ? addClass : text.parentElement.classList.remove('not__showing');                          


                        //If is 01
                        // if(valueIs === "01" && textEle === "Theme: The purpose and vision of education"){
                        //     text.parentElement.classList.add('newnewnew');
                        // } else {
                        //     text.parentElement.classList.remove('newnewnew');
                        // }
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