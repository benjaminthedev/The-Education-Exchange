<?php
/*
 * Template Name: Custom Home Page
 *
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>



<div id="myContainer">

	<div class="ms-left">
		<div class="ms-section" id="left1">
			<?php the_field('box_1_left'); ?>
		</div>

		<div class="ms-section" id="left2">
			<?php the_field('box_2_left'); ?>
		</div>

		<div class="ms-section" id="left3">
			<?php the_field('box_3_left'); ?>
		</div>

		<div class="ms-section" id="left3">
			<?php the_field('box_4_left'); ?>
		</div>
	</div>
	
	<div class="ms-right">
		<div class="ms-section" id="right1">
			<?php the_field('box_1_right'); ?>
		</div>

		<div class="ms-section" id="right2">
			<?php the_field('box_2_right'); ?>
		</div>

		<div class="ms-section" id="right3">
			<?php the_field('box_3_right'); ?>
		</div>

		<div class="ms-section" id="right3">
			<?php the_field('box_4_right'); ?>
		</div>
	</div>	
</div>




	
<?php //while ( have_posts() ) : the_post(); ?>
	<?php //the_content(); ?>
<?php //endwhile; ?>


<style>



.elementor.elementor-1032.elementor-location-footer {
	top: 100%;
	transition: 2s !important;
	transition-delay: 0.4s !important;
	width: 100% !important;
	position: fixed !important;
}

.goingUp {
	display: block !important;
    top: 90% !important;
}

.showMoreFooter {
    top: 60% !important;
}

.ms-section *{
	color: #fff;
	padding: 0 40px;
}

</style>

<div class="clearfix"></div>

<?php get_footer(); ?>

	<script type="text/javascript">
	jQuery(document).ready(function(){
		console.log('Working scroller');

		jQuery('#myContainer').multiscroll({
				sectionsColor: ['#6EC1E3', '#ED7FA0', '#7E8F7C', '#7A7A7A'],
				navigation: true,
        		navigationPosition: 'right',
        		navigationColor: '#000',
				scrollingSpeed: 1700,
				paddingBottom: 110,


				onLeave: function(index, nextIndex, direction){
				//after leaving section 4
				if(nextIndex == '4'){
					console.log("Going to section 3!");
					jQuery('.elementor-location-footer').addClass('goingUp');
				} else {
					jQuery('.elementor-location-footer').removeClass('goingUp');
				}

			},
			});

		
			
		//On hover footer

		jQuery( ".elementor-location-footer" ).hover(
			function(e) {
				jQuery('.goingUp').addClass('showMoreFooter');
			}, function(e) {
				jQuery('.goingUp').removeClass('showMoreFooter');
			}
		);
        
        
		});
    </script>