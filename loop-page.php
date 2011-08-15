<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="content" class="page">	

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<header>
				<h1><?php the_title(); ?></h1>
				<p class="info"><?php echo get_the_date(); ?></p>
			</header>				


			<div id="text">
				<?php the_content(); ?>			
			</div>
			
												
			<footer>			
				<?php edit_post_link( __( 'Edit', 'nakeme' ), '<p class="edit">', '</p>' ); ?>
			</footer>
			
		</article>

		<?php comments_template( '', true ); ?>

	</div><!-- #content -->

<?php endwhile; ?>