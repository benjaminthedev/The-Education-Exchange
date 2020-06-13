<?php
/*
 * Template Name: Custom Home Page
 *
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>


 <div class="headerSectionNew">

    <h1>Connecting Educators Gloablly </h1>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

    <a href="#" class="homeBtn">Create Account</a>  
    
    </div>

	<style>
.headerSectionNew{
    background: #001035;
    height: 100vh;
    color:#fff;
}


</style>


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