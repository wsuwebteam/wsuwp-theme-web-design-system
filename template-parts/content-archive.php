<div class="wsu-wrapper-content">
	<div class="wsu-layout wsu-layout--sidebar">
		<main class="wsu-layout-panel">
		<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();

					WSUWP\Theme\WDS\Template::render( 'block-templates/article-list', get_post_type() );

				} // end while

				WSUWP\Theme\WDS\Template::render( 'block-templates/pagination', get_post_type() );
		} 
		;?>
		</main>
		<aside class="wsu-layout-panel">
			<?php WSUWP\Theme\WDS\Template::render( 'template-parts/sidebar', get_post_type() ); ?>
		</aside>
	</div>
</div>
