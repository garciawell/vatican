<?php $titan = TitanFramework::getInstance( 'inundaweb' ); ?>
<footer id="footer" class="site-footer" role="contentinfo">	

	<div class="ct-footer container-full">
		<div class="container">

			<div class="row">
				<div class="col-lg-4  col-md-4 col-sm-4 col-xs-12">
					<a href="<?php bloginfo('home')?>"> 
						<?php
						$imageID = $titan->getOption( 'logo_rodape' );$imageSrc = $imageID;if ( is_numeric( $imageID ) ) {$imageAttachment = wp_get_attachment_image_src( $imageID );$imageSrc = $imageAttachment[0];} ?>
						<img src='<?php echo esc_url( $imageSrc ); ?>'> 
					</a>
				</div>				
				<div class="col-lg-4  col-md-4 col-sm-4 col-xs-12">
					<span class="horario">Horário de Funcionamento</span>
					<p class="text-rodape"><?php echo $mySavedValue3 = $titan->getOption( 'hora' ); ?></p>


					<address class="endereco-rodape"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $mySavedValue2 = $titan->getOption( 'endereco' ); ?></address>
				</div>					
				<div class="col-lg-4  col-md-4 col-sm-4 col-xs-12">
					<a href="#" data-toggle="modal" data-target="#modal-news" class="btn-news">Assine nossa newsletter</a>

					<a href="tel:<?php echo $mySavedValue2 = $titan->getOption( 'telefone_rodape' ); ?>" class="text-rodape tel-rodape"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $mySavedValue2 = $titan->getOption( 'telefone_rodape' ); ?></a>
				</div>
			</div>				

		</div>
	</div>		
	<div class="copyright">
		<p><?php echo $mySavedValue2 = $titan->getOption( 'copyright' ); ?></p>
	</div> 



<!-- Modal -->
<div id="modal-news" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">  
		<span class="title-news">Newsletter</span>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <?php echo do_shortcode('[contact-form-7 id="112" title="Newsletter"]');?>
      </div>

    </div>

  </div>
</div>












</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
