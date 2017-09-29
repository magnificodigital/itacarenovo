<?php
get_header();
the_post();
$titulo = get_the_title();
$subtitulo = get_field('subtitulo',get_the_ID());

?>
<article id="single">
	<?php if (!is_page('blog')) : ?>
	<header>
		<div class="container">
			<?php get_template_part('inc/breadcrumbs'); ?>
			<h1><strong><?php echo $titulo; ?></strong></h1>
			<h2 class="subtitle"><?php echo $subtitulo; ?></h2>
		</div>
	</header>
	<?php endif; ?>
	<?php if (is_page('o-empreendimento')) : ?>
	<?php get_template_part('inc/galeriacasas'); ?>
	<?php endif; ?>
	
	<section class="content">
		<?php if (is_page('conheca-itacare') || is_page('fale-conosco')) : ?>
			<div class="wrapper-img-itacare"></div>
		<?php endif; ?>
		<div class="container">
			<?php if (!is_page('conheca-itacare') && !is_page('fale-conosco')) : ?>
				<?php the_content(); ?>
			<?php else : ?>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<?php if (is_page('conheca-itacare')) : ?>
							<img src="<?php bloginfo('template_url'); ?>/images/conheca-itacare-paradise.jpg" alt="<?php echo $titulo; ?>" title="<?php echo $titulo; ?>" class="animated fadeInUp" />
						<?php elseif (is_page('fale-conosco')) : ?>
							<?php get_template_part('inc/calendario'); ?>
						<?php endif; ?>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endif;?>
		</div>
	</section>
	<?php if (is_page('o-empreendimento')) : ?>
		<div class="container">
			<div class="link">
				<a href="<?php bloginfo('url'); ?>/conheca-itacare/" class="btn btn-color-2"><strong>Conheça Itacaré</strong></a>
			</div>
		</div>
	<?php elseif (is_page('conheca-itacare') || is_page('fale-conosco')) : ?>
		<?php get_template_part('inc/categoriasblog'); ?>
	<?php elseif (is_page('duvidas-frequentes')) : ?>
		<?php get_template_part('inc/faq'); ?>
	<?php endif; ?>
</article>
<?php get_footer(); ?>