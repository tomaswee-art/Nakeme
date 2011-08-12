<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="content">		
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<header>
			
				<h1><?php the_title(); ?></h1>
				<?php echo get_the_date(); ?>, <?php comments_popup_link( 'Commment', '1 Comment', '% Comments' ); ?>
			
			</header>
 	
 			
 			<div id="text">
				<?php the_content(); ?>
			</div>
	
			
			<footer>
        <?php $tags_list = get_the_tag_list( '', ' ' ); if ( $tags_list ): echo __('Tags').': '. $tags_list ; endif; ?>
			</footer>
				
		</article>

		<?php comments_template( '', true ); ?>

	</div><!-- #content -->

<?php endwhile; ?>