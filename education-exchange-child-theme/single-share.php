 <?php
/**
 * The template for displaying all pages, single posts and attachments
 *
 * This is a new template file that WordPress introduced in
 * version 4.3.
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>

<main id="main" class="site-main clr" role="main">
	<div id="content-wrap" class="container clr">
		<div id="primary" class="content-area clr">			
			<div id="content" class="site-content clr">
				
                        <div class="elementor-container elementor-column-gap-narrow">
							<div class="elementor-row">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-df3467f"
                            	<?php 
                                if ( have_posts() ) {
                                    while ( have_posts() ) {
                                        the_post(); ?>

                                        <img src="<?php ?>" />

                                        <?php the_title(); ?>

                                        <?php the_content(); ?>


                                        //
                                        // Post Content here
                                        //
                                <?php   } // end while
                                } // end if
                                ?>
                                </div>
                            </div>
                        </div>

			
            </div>
        </div>
    </div>


</main>
				

<?php get_footer(); ?>
