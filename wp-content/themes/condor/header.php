<?php
/**
 * The theme header
 *
 * @package condor
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Condor Assessoria COntábil, Jurídica e Tributária.</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/accordion.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    		<!--wordpress head-->
		<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="row">

      <div class="large-6 columns"><img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png"></img></div>
<br>
      <div class="large-3 columns txt_contato_topo"> <i class="fa fa-phone"></i>
        <span class="">Central de atendimento<br>
        11 2901-3004 |  9.4032-7465</span>
      </div>

      <div class="large-3 columns txt_contato_topo"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
        <span class="">Email<br>
        contato@condorassessoria.com.br</span>
      </div>

    </div>

    <div class="fundo_menu">
      <br>
      <?php
      wp_nav_menu( array(
'menu' => 'meu_menu',

'theme_location' => 'meu_menu',

'container' => 'div',

'container_class' => 'classe_do_container',

'container_id' => 'menu_principal',

'menu_class' => 'classe_do_menu',

'echo' => true,

'menu_id' => 'menu_topo',

'before' => '',

'after' =>'',

'link_before' => '',

'link_after' => ' | ',

'depth' => 0,

'walker' => '',

) );


      ?>
     <!--  <span>HOME  | <a href="empresa.php"> A EMPRESA </a> |  <a href="servicos.php"> NOSSOS SERVIÇOS </a>  |  <a href="parceiros.php"> PARCEIROS </a>   |  BLOG  |  <a href="contato.php"> CONTATO </a> </span> -->
    </div>

    <div class="linha_black"></div>


		
