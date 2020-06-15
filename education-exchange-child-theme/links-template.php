<?php
/*
 * Template Name: Links Custom Page
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

                    <h1>User Submitted Links</h1>
                    <hr />
<style>
.linkBoxWrapper {
    display: flex;
    flex-wrap: wrap;
}

.linkBox {
    width: 48%;
    min-width: 48%;
    
    min-height: 160px;
    border: 1px solid #0c183a;
    margin: 10px 5px;
    padding: 40px;
    text-align: center;
    /*shadow*/
-webkit-box-shadow: 3px 3px 5px 0px rgba(12,24,58,1);
-moz-box-shadow: 3px 3px 5px 0px rgba(12,24,58,1);
box-shadow: 3px 3px 5px 0px rgba(12,24,58,1);
}



/* Responsive */

@media only screen and (max-width: 554px) {
    .linkBox {
        min-width: 98%;
    }
}
</style>


<div class="linkBoxWrapper">

                    <?php
                        $the_query = new WP_Query( array(
                            'post_type' => 'links'
                        ) );

                        while ( $the_query->have_posts() ) :
                            $the_query->the_post();?>

                            <div class="linkBox">
    
                            <h3><?php the_title(); ?></h3>

                            <a href="<?php the_field('url_of_link'); ?>" target="_blank" alt="User Submitted Link"><?php the_field('url_of_link'); ?></a>

                        </div><!-- end linkBox -->


                            


                        <? endwhile;

                        /* Restore original Post Data 
                        * NB: Because we are using new WP_Query we aren't stomping on the 
                        * original $wp_query and it does not need to be reset.
                        */
                        wp_reset_postdata();
                    ?>


</div><!-- end linkBox -->

				<?php do_action( 'ocean_after_content_inner' ); ?>

			</div><!-- #content -->

			<?php do_action( 'ocean_after_content' ); ?>

		</div><!-- #primary -->

		<?php do_action( 'ocean_after_primary' ); ?>

	</div><!-- #content-wrap -->

	<?php do_action( 'ocean_after_content_wrap' ); ?>

<?php get_footer(); ?>