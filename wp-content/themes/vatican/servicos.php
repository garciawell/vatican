<?php get_header(); /* Template Name: Serviços */?>
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
	
	
	<div class="container-full ct-servicos-main">
		<div class="container">
			<div class="box-ct-main">
						<?php $n =1; 
					if( have_rows('servicos') ):
						while ( have_rows('servicos') ) : the_row(); ?>
						<div class="list-serv-main">
							<div class="row">
							<?php if($n == 1 ){ ?>
							
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 center">
										<figure>
											<?php 
											$image = get_sub_field('imagem');
											$size = 'servicos'; // (thumbnail, medium, large, full or custom size)

											if( $image ) {

												echo wp_get_attachment_image( $image, $size );

											}

											?>
										</figure>
								</div>						
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 center">
									<figure><img src="<?php the_sub_field('icone'); ?>" alt="<?php the_sub_field('titulo'); ?>"></figure>
									<h2 class="title-wt"><?php the_sub_field('titulo'); ?></h2>
								</div>							
							<?php } else { ?>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 center">
									<figure><img src="<?php the_sub_field('icone'); ?>" alt="<?php the_sub_field('titulo'); ?>"></figure>
									<h2 class="title-wt"><?php the_sub_field('titulo'); ?></h2>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 center">
										<figure>
											<?php 
											$image = get_sub_field('imagem');
											$size = 'servicos'; // (thumbnail, medium, large, full or custom size)

											if( $image ) {

												echo wp_get_attachment_image( $image, $size );

											}

											?>
										</figure>
								</div>														
								<?php } ?>	
							</div>
						</div>
						<?php  $n++; if($n == 3 ){ $n=1;}  endwhile; endif; ?>
			</div>				
			
			<div class="box-ct-terc">
				<h3 class="title-yt center">Serviços Terceirizados</h3>
				<div class="list-ct-terc">
					<div class="row">
							<?php
						if( have_rows('servicos_terc') ):
							while ( have_rows('servicos_terc') ) : the_row(); ?>
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 center">
								<figure><img src="<?php the_sub_field('icone'); ?>" alt="<?php the_sub_field('titulo'); ?>"></figure>
								<h4 class="title-wt"><?php the_sub_field('titulo'); ?></h4>						
							</div>						
							<?php endwhile; endif; ?>
					</div>	
				</div>	
			</div>	
		</div>
	</div>
	
	
	
		<?php endwhile; ?>

<?php get_footer (); ?>  	 