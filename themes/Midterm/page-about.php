
 <?php get_header(); ?>
 <div id = "wrapper" class = "clearfix">
	 <main>
		 <b>About Page Template</b><br>
		 <b>Start WordPress Loop</b><br>
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		 <?php get_template_part( 'template-parts/post/title' ); ?>
		 <?php get_template_part( 'template-parts/post/content' ); ?>
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