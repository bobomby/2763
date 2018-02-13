<?php /* Template Name: catagory famous animals */ ?>
 <?php get_header(); ?>
 <main>
 <b>catagory famous animals template</b><br>
 <b>Start WordPress Loop</b><br>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
<b>Post Content:</b><?php  the_content(); ?><br>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<b>End WordPress Loop</b>
 </main>
<?php get_footer(); ?>