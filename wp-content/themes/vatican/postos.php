<?php get_header(); /* Template Name: Postos */?>
	<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
	<div class="container-full">
		<div id="content-main" class="page-padrao">
			<div class="container">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
			<?php endwhile; ?>

	
	<div class="container-full ct-postos-main">
		<div class="container">
			<div class="row">
			<?php $my_query = new WP_Query( array( 'post_type' => 'postos', 'posts_per_page' => 10, 'paged' => get_query_var('paged') ) ); ?>
			<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>	 
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center">
						<div class="ct-postos-in">
							
							<figure class="relative">
							<h2 class="title-float"><?php the_title(); ?></h2>
							<?php $title=get_the_title(); the_post_thumbnail( 'postos' ,array( 'alt' =>'Posto '.$title) );?>
															<figure class="float-bandeira"> 	
								<ul>
								<?php foreach (get_the_terms(get_the_ID(), 'bandeira') as $cat) : ?>
								<li>
								<?php z_taxonomy_image($cat->term_id); ?>
								<a href="<?php echo get_term_link($cat->term_id, 'bandeira'); ?>" title="<?php echo $cat->name; ?>"></a>
								</li>
								<?php endforeach; ?>
								</ul>
							</figure>
							
							</figure>
							<ul class="list-postos">
								<?php
							if( have_rows('servicos') ):
								while ( have_rows('servicos') ) : the_row(); ?>	
								<li>							
									<figure><img src="<?php the_sub_field('icone');?>" title="<?php the_sub_field('titulo');?>" ></figure>
								</li>
							<?php endwhile; endif; ?>		
							</ul>						
							<div class="conteudo"><?php  the_content(); ?></div> 
						</div>
					</div>	
			<?php endwhile; ?>
			<?php // wp_pagenavi( array( 'query' => $my_query ) ); ?>
			<?php wp_reset_postdata(); ?>
			</div>
		
		</div>
	</div>
	
	
	
<?php get_footer (); ?>  	 