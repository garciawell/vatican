<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div id="content-main"> 
			<div class="container"> 

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( __( 'Você Buscou por: %s' ), '<span class="focus-search">' .get_search_query() ).'</span>' ?></h1> 
					</header><!-- .page-header -->

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post(); ?>

						<a href="<?php the_permalink(); ?>"><h2 class="title-search"><?php the_title();  ?></h2>
				

					<?php // End the loop.
					endwhile;

					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
						'next_text'          => __( 'Next page', 'twentyfifteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
					) );

				// If no content, include the "No posts found" template.
				else :
					echo "<h2>Nenhum resultado encontrado</h2>";

				endif;
				?>

				</div>
			</div>
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
