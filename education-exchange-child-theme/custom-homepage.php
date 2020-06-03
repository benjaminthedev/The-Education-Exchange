<?php
/*
 * Template Name: Custom Home Page
 *
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>

<h1>Test</h1>

<p>Curabitur blandit risus a condimentum posuere. Nulla eleifend dolor at metus vulputate, vitae egestas magna consequat. Fusce tempor, est vitae suscipit posuere, eros sapien gravida lorem, et hendrerit nisi lorem at felis. Ut nibh lorem, euismod vitae scelerisque eu, porttitor et risus. Donec lacinia tellus arcu, nec consequat nulla volutpat vel. Vestibulum pharetra tortor nec consequat hendrerit. Nam dapibus mi sem, vel sagittis odio suscipit eget. Nulla maximus libero et luctus imperdiet. Vivamus commodo pretium nulla vel condimentum. Phasellus ut sem arcu. Proin tempus tellus non massa volutpat, eu sollicitudin nulla porta. Fusce sed dictum metus. In non dolor purus. Donec venenatis leo id lacus luctus, at maximus quam pretium.</p>

<p>Curabitur blandit risus a condimentum posuere. Nulla eleifend dolor at metus vulputate, vitae egestas magna consequat. Fusce tempor, est vitae suscipit posuere, eros sapien gravida lorem, et hendrerit nisi lorem at felis. Ut nibh lorem, euismod vitae scelerisque eu, porttitor et risus. Donec lacinia tellus arcu, nec consequat nulla volutpat vel. Vestibulum pharetra tortor nec consequat hendrerit. Nam dapibus mi sem, vel sagittis odio suscipit eget. Nulla maximus libero et luctus imperdiet. Vivamus commodo pretium nulla vel condimentum. Phasellus ut sem arcu. Proin tempus tellus non massa volutpat, eu sollicitudin nulla porta. Fusce sed dictum metus. In non dolor purus. Donec venenatis leo id lacus luctus, at maximus quam pretium.</p>
	
<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

	

<?php get_footer(); ?>