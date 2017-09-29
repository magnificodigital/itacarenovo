<?php get_header(); the_post(); $subtitulo = get_field('subtitulo'); ?>
<article id="single">
	<header>
		<div class="container">
			<?php get_template_part('inc/breadcrumbs'); ?>
			<h1><strong><?php the_title(); ?></strong></h1>
			<h2><?php echo $subtitulo; ?></h2>
		</div>
	</header>
	<section class="intercambio-imobiliario">
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<article>
							<h3>O <strong>Itacaré Paradise</strong> faz parte do exclusivo <strong>The Registry Collection®</strong></h3>
							<p>Um programa de intercâmbio imobiliário que oferece as melhores hospedagens em mais de 100 destinos ao redor do mundo.</p>
							<a href="#">Saiba Mais sobre Intercâmbio Imobiliário</a>
						</article>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 no-padding">
						<div class="videoWrapper">
							<a href="#" data-fancybox></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<header>
		<br />
		<h3><b>Viaje para diversos outros países com classe e sofisticação.</b></h3>
		<h4 class="subtitle">Veja opções de lugares paradisíaco para visitar</h4>
	</header>
	<?php get_template_part('inc/categoriaspaises'); ?>
</article>
<?php get_footer(); ?>