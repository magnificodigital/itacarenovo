<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/favicon.jpg">
<title><?php wp_title(); ?></title>	
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<?php if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) : ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/jquery.fancybox.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/bootstrap-datepicker.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/main.css">
<?php else: ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/style.min.css">
<?php endif; ?>
<?php wp_head(); ?>
<?php if (is_page('conheca-itacare') || is_page('fale-conosco')) : ?>
<style type="text/css">
	.culinaria {background-image: url('<?php bloginfo('template_url'); ?>/images/blog/culinaria.jpg');}
	.praias {background-image: url('<?php bloginfo('template_url'); ?>/images/blog/praias.jpg');}
	.esportes {background-image: url('<?php bloginfo('template_url'); ?>/images/blog/esportes.jpg');}
	.cachoeiras {background-image: url('<?php bloginfo('template_url'); ?>/images/blog/cachoeiras.jpg');}
	.trilhas {background-image: url('<?php bloginfo('template_url'); ?>/images/blog/trilhas.jpg');}
</style>
<?php elseif (is_page('intercambio-imobiliario')) : ?>
<style type="text/css">
	.eua {background-image: url('<?php bloginfo('template_url'); ?>/images/paises/eua.jpg');}
	.caribe {background-image: url('<?php bloginfo('template_url'); ?>/images/paises/caribe.jpg');}
	.mexico {background-image: url('<?php bloginfo('template_url'); ?>/images/paises/mexico.jpg');}
	.americacentral {background-image: url('<?php bloginfo('template_url'); ?>/images/paises/americacentral.jpg');}
	.americasul {background-image: url('<?php bloginfo('template_url'); ?>/images/paises/americasul.jpg');}
	.europa {background-image: url('<?php bloginfo('template_url'); ?>/images/paises/europa.jpg');}
	.africa {background-image: url('<?php bloginfo('template_url'); ?>/images/paises/africa.jpg');}
	.asia {background-image: url('<?php bloginfo('template_url'); ?>/images/paises/asia.jpg');}
	.australia {background-image: url('<?php bloginfo('template_url'); ?>/images/paises/australia.jpg');}
	.india {background-image: url('<?php bloginfo('template_url'); ?>/images/paises/india.jpg');}
</style>
<?php endif;?>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42963571-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-42963571-1');
</script>

<!-- Início do script Omnize --> 
<script>document.addEventListener('DOMContentLoaded',function(){var JSLink=location.protocol+'//widget.omnize.com',JSElement=document.createElement('script');JSElement.async=!0;JSElement.charset='UTF-8';JSElement.src=JSLink;JSElement.onload=OnceLoaded;document.getElementsByTagName('body')[0].appendChild(JSElement);function OnceLoaded(){wOmz.init({id:3666});}},false);</script> 
<!-- Fim do script Omnize -->

<style type="text/css">
	body:before {display: none !important; content: "";}
</style>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=624845964385137";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header id="header">
	<div class="container">
		<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" class="logo"><?php bloginfo('name'); ?></a>
		<span class="fa fa-bars fa-2x" aria-hidden="true" id="menumobile"></span>
		<nav class="menu">
			<ul>
				<li><a href="<?php bloginfo('url'); ?>/o-empreendimento/">O Empreendimento</a></li>
				<li><a href="<?php bloginfo('url'); ?>/sistema-fractional/">O que é sistema fractional</a></li>
				<li><a href="<?php bloginfo('url'); ?>/conheca-itacare/">Conheça Itacaré</a></li>
				<li><a href="<?php bloginfo('url'); ?>/duvidas-frequentes/">Dúvidas Frequentes</a></li>
				<li><a href="<?php bloginfo('url'); ?>/blog/">Blog</a></li>
				<li><a href="http://gestao.itacareparadise.com.br" target="_blank"><span>Área do Proprietário</span></a></li>
				<li><a href="<?php bloginfo('url'); ?>/fale-conosco/">Fale Conosco</a></li>
			</ul>
		</nav>
	</div>
</header>
<main id="content">