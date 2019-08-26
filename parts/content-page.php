<?php
/**
 * The main template file for page content of the jointswp-child theme
 **/
 
 ?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2 id="main-heading" class="entry-title"><?php the_title(); ?></h2>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php edit_post_link( __( '(Edit)', 'jointswp-child' ), '<span class="edit-link">', '</span>' ); ?>
	</div>
	<footer>
		<?php
			wp_link_pages(
				array(
					'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'jointswp-child' ),
					'after'  => '</p></nav>',
				)
			);
		?>
		<?php /*$tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php }*/ ?>
	</footer>
</article>