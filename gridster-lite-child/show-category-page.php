<?php
/*
 * Template Name: Show Category template
 *
 * This page lists all "Maandbrief" pages in chronological order (newest first).
 *
 * @package Gridster
 */

get_header(); ?>
<?php get_sidebar(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'page' ); ?>
<?php endwhile; // end of the loop.
?>

<?php $category_to_show = get_post_meta($post->ID, 'category', true); ?>
<?php
$args = array('category_name' => $category_to_show, 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC' );
$query = new WP_Query($args);
if ($query->have_posts()) :
	// The Loop
	while ( $query->have_posts() ) : $query->the_post(); ?>

<?php
	// Show post based on category
	$categories = get_the_category();
	$found = false;
	foreach($categories as $category) {
		$found |= ($category -> name == $category_to_show);
	}
	if (!$found)
		continue; // category name not valid to show.
?>
<?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php gridster_content_nav( 'nav-below' ); ?>
<?php else : ?>
<?php get_template_part( 'no-results', 'index' ); ?>
<?php endif; ?>


<?php get_footer(); ?>
