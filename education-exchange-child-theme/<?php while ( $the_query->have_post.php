     <?php while ( $the_query->have_posts() ) :
                            $the_query->the_post();?>

                            <div class="sharedContent">
                                
                            <h1>Record your professional learning </h1>
                            <p>Use this space to record your professional learning. You could choose to keep a record of your engagement with The Education Exchange: 1 hour spent reading, 15 minutes spent watching videos, 30 minutes in a discussion with colleagues for instance. You can also use the space to record any other professional learning you engage in such as courses, webinars and research.</p>
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