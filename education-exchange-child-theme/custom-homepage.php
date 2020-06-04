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

		<div class="ms-section" id="left4">
			<?php the_field('box_4_left'); ?>
		</div>
		
		<div class="ms-section" id="left5">
			<?php the_field('box_5_left'); ?>
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

		<div class="ms-section" id="right4">
			<?php the_field('box_4_right'); ?>
		</div>

		<div class="ms-section" id="right5">
			<?php the_field('box_5_right'); ?>
		</div>
	</div>	
</div>




	
<?php //while ( have_posts() ) : the_post(); ?>
	<?php //the_content(); ?>
<?php //endwhile; ?>


<style>

/*-- Temp Styles --*/

#left1,
#left3,
#left5{
	background-color: #6EC1E3;
}

#left2,
#left4{
	background-color: #ED7FA0;
}

#right1,
#right3,
#right5{
	background-color: #7E8F7C;
}

#right2,
#right4{
	background-color: #7A7A7A;
}




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
				// sectionsColor: ['#6EC1E3', '#ED7FA0', '#7E8F7C', '#7A7A7A'],
				navigation: true,
        		navigationPosition: 'right',
        		navigationColor: '#000',
				scrollingSpeed: 1700,
				paddingBottom: 110,


				onLeave: function(index, nextIndex, direction){
				//after leaving section 5
				if(nextIndex == '5'){
					console.log("Going to section 5!");
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