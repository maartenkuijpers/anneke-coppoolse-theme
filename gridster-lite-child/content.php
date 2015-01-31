<?php
/**
 * @package Gridster
 * [MK] This script shows the preview of a single post in the list.
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class("poste"); ?>> <a href="<?php the_permalink(); ?>">
<?php if ( has_post_thumbnail() ) {
the_post_thumbnail('post-thumb', array('class' => 'postimg'));
} else { ?>
<img src="<?php bloginfo('template_directory'); ?>/img/defaultthumb.png" class="postimg" alt="<?php the_title(); ?>" />
<?php } ?>
</a>
<div class="portfoliooverlay"><a href="<?php the_permalink(); ?>"><span>...</span></a></div>
<h2 class="posttitle"><a href="<?php the_permalink(); ?>" rel="bookmark">
<?php the_title(); ?>
</a></h2>
</div>
<!-- post -->
