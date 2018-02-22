<?php /* Template Name: archive template */ ?>
 <?php get_header(); ?>
 <div id = "wrapper" class = "clearfix">
	<main>
		 <b>archive template</b><br>
		 <b>Start WordPress Loop</b><br>
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php  the_thumbnail(); ?> <br>
			<?php the_title(sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>'); ?><br>
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		<b>End WordPress Loop</b>
	</main>
	<div id = "sidebar">
		<div id="sidebar-primary" class="sidebar">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
		
	</div> <!-- sidebar -->
</div><!-- wrapper -->
<?php get_footer(); ?>