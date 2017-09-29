<?php if (!is_page('blog') && !is_archive() && !is_single() && !is_search()) : ?>
<section id="blogFooter">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						
						<?php
						$args = array(
							'orderby' => 'date',
							'order' => 'DESC',
							'showposts' => 3,
						);
						global $loop;
						$loop = new WP_query( $args ); ?>
						<?php if($loop->have_posts()): ?>
						<?php while($loop->have_posts()):$loop->the_post(); ?>
						<div class="swiper-slide" data-swiper-autoplay="5000">
							<figure class="post">
								<header>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p>Postado em: <?php the_time('d/m/Y'); ?> • Por: <?php the_author(); ?></p>
								</header>
								<?php the_post_thumbnail(); ?>
								<div class="excerpt">
									<p><?php the_excerpt(); ?></p>
								</div>
								<div class="link">
									<a href="<?php the_permalink(); ?>" class="btn">Continue lendo</a>
								</div>
							</figure>
						</div>
						<?php endwhile; endif; ?>
					
					</div>
			    	<div class="swiper-pagination"></div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<aside class="sidebar-newsletter">
					<div class="box greenWrapper">
						<h4>Newsletter</h4>
						<p>Cadastre-se para receber gratuitamente nossos informativos</p>
						<?php $token = get_option('token_rd'); ?>
						<form id="newsletter-blog" class="form">
							<input type="text" name="nome" placeholder="Nome:" class="required" required>
							<input type="email" name="email" placeholder="E-mail:" class="required" required>
							<input type="hidden" id="token_rdstation" name="token_rdstation" value="<?php echo $token; ?>">
							<input type="hidden" id="identificador" name="identificador" value="[<?php bloginfo('name'); ?>] - Newsletter">
							<button type="button" class="btn">Enviar</button>
							<div class="resposta"></div>
							<!--<input type="submit" name="" value="Enviar">-->
						</form>
					</div>
					<div class="box blueWrapper">
						<h5>Indique para um amigo</h5>
						<div class="links-social">
							<a href="https://www.facebook.com/sistemafractional/" class="link-social facebook" target="_blank"></a>
							<a href="https://www.instagram.com/itacareparadise/" class="link-social instagram" target="_blank"></a>
							<a href="https://api.whatsapp.com/send?phone=5511940082635&text=" class="link-social whatsapp" target="_blank"></a>
							<a href="https://www.youtube.com/channel/UCa3eqCeG3fmyCnFtQqTkLaA" class="link-social youtube" target="_blank"></a>
							<a href="https://twitter.com/itacareparadise" class="link-social twitter" target="_blank"></a>
						</div>
					</div>
					<div class="box brownWrapper">
						<h5>Agende uma visita</h5>
						<a href="<?php bloginfo('url'); ?>/fale-conosco/" class="link-agenda"></a>	
					</div>
				</aside>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
</main>
<footer id="footer">
	<div class="logo-social">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<a href="<?php bloginfo('url');?>" class="logo" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<p class="follow">SIGA O ITACARÉ NAS REDES SOCIAIS</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="links-social blue">
						<a href="https://www.facebook.com/sistemafractional/" target="_blank" class="link-social facebook"></a>
						<a href="https://www.instagram.com/itacareparadise/" target="_blank" class="link-social instagram"></a>
						<a href="https://api.whatsapp.com/send?phone=5511940082635&text=" target="_blank" class="link-social whatsapp"></a>
						<a href="https://www.youtube.com/channel/UCa3eqCeG3fmyCnFtQqTkLaA" target="_blank" class="link-social youtube"></a>
						<a href="https://twitter.com/itacareparadise" target="_blank" class="link-social twitter"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="menu">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12">
					<h5>Conheça</h5>
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/o-empreendimento/">As Casas</a></li>
						<li><a href="<?php bloginfo('url'); ?>/conheca-itacare/">Itacaré</a></li>
						<li><a href="<?php bloginfo('url'); ?>/blog/">Blog</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<h5>Categorias do Blog</h5>
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/categoria/itacare-paradise/">Itacaré Paradise</a></li>
						<li><a href="<?php bloginfo('url'); ?>/categoria/sistema-fractional/">Sistema Fractional</a></li>
						<li><a href="<?php bloginfo('url'); ?>/categoria/eventos/">Eventos</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<h5>Dividir é igual multiplicar</h5>
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/intercambio-imobiliario/">Intercâmbio imobiliário</a></li>
						<li><a href="<?php bloginfo('url'); ?>/sistema-fractional/">Sistema Fractional</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<h5>Fale Conosco</h5>
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/fale-conosco/">Agende uma visita</a></li>
						<li><a href="<?php bloginfo('url'); ?>/duvidas-frequentes/">Dúvidas Frequentes</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="by">
		Desenvolvido por <a href="http://magnificodigital.com" class="magnifico" target="_blank">Magnifico Digital</a>
	</div>
</footer>

<!--Código de monitoramento-->
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/6b34644d-a958-4f58-ba9d-d5a8ec1be149-loader.js" ></script>

<!--RD-->
<script type ='text/javascript' src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>

<?php if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) : ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scrollreveal.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/swiper.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/swiper.jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap-datepicker.pt-BR.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<?php else : ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/scripts.min.js"></script>
<?php endif; ?>
<?php if (is_page('intercambio-imobiliario')) : ?>
<script type="text/javascript">
	$(window).scroll(function(){
		var e = $('.intercambio-imobiliario');
		var offset = e.offset().top;    
		if ($(this).scrollTop() > offset) {
			e.addClass('background-fixed');
		} else {
			e.removeClass('background-fixed');
		}
	});
</script>
<?php elseif (is_page('o-empreendimento') || is_home() || is_front_page()) : ?>
<script type="text/javascript">
$('.nav-galeriacasa').click(function(){
    var slider = $('#fotoscasaazul .swiper-container')[0].swiper;
    var to = $(this).data('to') + 1;
    slider.slideTo(to, 1000);
});
$('.nav-galeriacasa').click(function(){
    var slider = $('#fotoscasaamarela .swiper-container')[0].swiper;
    var to = $(this).data('to') + 1;
    slider.slideTo(to, 1000);
});
</script>

<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
<?php $html = ob_get_clean ();
echo preg_replace('/\s+/', ' ', $html); ?>
