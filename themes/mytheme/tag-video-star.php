<?php /* Template Name: tag post video-star template */ ?>
 <?php get_header(); ?>
 <main>
 <p>tag video star<p><br>
 <b>Start WordPress Loop</b><br>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
	<b>Post thumbnail:</b><?php the_post_thumbnail(); ?><br>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<b>End WordPress Loop</b>
 </main>
<?php get_footer(); ?>
