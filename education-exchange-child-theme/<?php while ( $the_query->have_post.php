     <?php while ( $the_query->have_posts() ) :
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
                                    <p class="hours">Hours: <?php the_field('time_spent_hours'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( get_field('time_spent_minutes') ): ?>
                                    <p class="minutes">Minutes: <?php the_field('time_spent_minutes'); ?></p>
                                <?php endif; ?>   

                                <?php if( get_field('notes') ): ?>
                                    <p>notes: <?php the_field('notes'); ?></p>
                                <?php endif; ?>  

                                <?php if( get_field('useful_links') ): ?>
                                    <p>Useful Links: <?php the_field('useful_links'); ?></p>
                                <?php endif; ?>                                  
                                
                        </div>

                        <? endwhile;

                        /* Restore original Post Data 
                        * NB: Because we are using new WP_Query we aren't stomping on the 
                        * original $wp_query and it does not need to be reset.
                        */
                        wp_reset_postdata();
                    ?>