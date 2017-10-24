<?php
//define('WP_HOME','http://inundaweb.com.br');
//define('WP_SITEURL','http://inundaweb.com.br'); 



// Chamando JS e CSS 
function theme_scripts() {	   
    wp_enqueue_style ( 'css-minify', get_template_directory_uri() . '/css/libs.css' ); 
    	 wp_enqueue_style ( 'css-padrao', get_template_directory_uri() . '/style.css' ); 	   
   // wp_enqueue_script( 'js-topo', get_template_directory_uri() . '/js/libs-topo.js'); 

	 wp_enqueue_script('js-rodape', get_template_directory_uri() . '/js/libs.js', array(), '1.0.0', true);

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );



// Registrando Sidebar

	register_sidebar(array(
	'name' => 'Blog',
	'before_widget' => '<div class="side-blog">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="tl-cat">',
	'after_title' => '</h4>',
	));	
		



// Habilitar Menus e Post Thumbnails
register_nav_menus(); 
 add_theme_support( 'post-thumbnails' );	
// add_image_size('foto-gd',760,380,true);
////add_image_size('Postos',600,450,true);
////add_image_size('servicos',600,450,true);
////add_image_size('capacitacao',600,350,true);
//add_image_size('circle',275,275,true);
//add_image_size('franqueado',200,200,true);
//add_image_size('parceiros',190,190,true);
//add_image_size('blog-home',600,450,true);
//add_image_size('blog-peq',350,250,true);
//add_image_size('blog-gd',900,400,true);
//add_image_size('galeria',200,90,true);
//add_image_size('circulo-landing',350,350,true);


/**************TITAN FRAMEWORKER*** Opções WordPress*********************/
// require_once( 'titan-framework-checker.php' ); 
require_once( 'plugins/titan-framework/titan-framework-embedder.php' );

 add_action( 'tf_create_options', 'mytheme_create_options' );


 

function mytheme_create_options() {


	$titan = TitanFramework::getInstance( 'inundaweb' );
	$adminPanel = $titan->createAdminPanel( array(
	'name' => 'Opções Gerais',
	'id' => 'opcoes_gerais',
	'position' => '2',
	'icon' => 'dashicons-admin-site',
	'capability' => 'edit_posts', 

	


	) );

/****************Cabeçalho*************************/
	$generalTab = $adminPanel->createTab( array(
	'name' => 'Cabeçalho',
	'id' => 'cabecalho',
	) );



	$generalTab->createOption( array(
	'name' => 'Logo Topo',
	'id' => 'logo_topo',
	'type' => 'upload',
	'placeholder' => 'clique aqui para adicionar uma imagem',
	'desc' => 'enviar arquivo'
	) );

	$generalTab->createOption( array(
	'name' => 'Telefone',
	'id' => 'telefone',
	'type' => 'text',
	'placeholder' => '(41) 3333-3333',
	'desc' => 'Adicione o numero de telefone'
	) );



	$generalTab->createOption( array(
	'name' => 'Facebook',
	'id' => 'facebook',
	'type' => 'text',
	'placeholder' => 'https://www.facebook.com/',
	'desc' => 'Adicione a URL do Facebook'
	) );


	$generalTab->createOption( array(
		'type' => 'save',
		'save' => 'SALVAR',
		'use_reset' => false
	) ); 

/**************Fim Cabeçalho*************************/





/****************Rodapé*************************/

	$generalTab2 = $adminPanel->createTab( array(
	'name' => 'Rodapé',
	'id' => 'rodape',
	) );

	$generalTab2->createOption( array(
	'name' => 'Logo Rodapé',
	'id' => 'logo_rodape',
	'size' => 'full',
	'type' => 'upload',
	'placeholder' => 'clique aqui para adicionar uma imagem',
	'desc' => 'enviar arquivo'
	) );


	$generalTab2->createOption( array(
	'name' => 'Horário de Funcionamento',
	'id' => 'hora',
	'type' => 'textarea',
	'placeholder' => 'Das 8H às 19H',
	) );



	$generalTab2->createOption( array(
	'name' => 'Endereço',
	'id' => 'endereco',
	'type' => 'textarea',
	'placeholder' => 'R. Pedrina Costa Visky, 571 - São José dos Pinhais - PR',
	) );


	$generalTab2->createOption( array(
	'name' => 'Telefone',
	'id' => 'telefone_rodape',
	'type' => 'text',
	'placeholder' => '(41) 3333-3333',
	) );


	$generalTab2->createOption( array(
	'name' => 'Copyright',
	'id' => 'copyright',
	'type' => 'text',
	'placeholder' => '© 2017 Aliança Transportes',
	) );

	$generalTab2->createOption( array(
		'type' => 'save',
		'save' => 'SALVAR',
		'use_reset' => false
	) ); 

/************Fim*Rodapé*************************/

} 




