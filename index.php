<?php get_header(); ?>
<section id="bannershome">
	<div class="swiper-container">
	    <div class="swiper-wrapper">
	        <?php 
			$args = array(
			    'orderby' => 'date',
			    'order' => 'ASC',
			    'post_type' => 'banners',
			    'showposts' => 5000
			); 
			$posts = get_posts($args);
			$c = 1;
			foreach ($posts as $post) {
				$id = $post->ID;
				$text = get_field('texto',$id);
				$photo = get_field('foto',$id);
				$link = get_field('link',$id);
				$color = get_field('cor',$id); ?>

				<div class="swiper-slide" data-swiper-autoplay="7000">
		        	<div class="banner-wrapper banner-<?php echo $c; ?>" style="background-image: url('<?php echo $photo; ?>');">
		        		<div class="container">
			        		<figure>
			        			<h2><?php echo $text; ?></h2>
			        			<a href="<?php echo $link; ?>">Saiba Mais</a>
			        		</figure>
			        		<div class="sistemafractional">
			        			<img src="<?php bloginfo('template_url'); ?>/images/sistemafractional.png" alt="Sistema Fractional">
			        		</div>
			        		<div class="clearfix"></div>
		        		</div>
		        	</div>
		        </div>

		        <style type="text/css">
		        	.banner-<?php echo $c; ?> h1:before,
		        	.banner-<?php echo $c; ?> h1:after,
		        	.banner-<?php echo $c; ?> h2:before,
		        	.banner-<?php echo $c; ?> h2:after,
		        	.banner-<?php echo $c; ?> a {
		        		background-color: <?php echo $color; ?> !important;
		        	}
		        </style>

		        <?php $c++; ?>
			<?php } ?>	
	    </div>
	    <div class="navigation">
	    	<span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
	    	<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
	    </div>
	   
	</div>
</section>
<section class="block-text">
	<div class="container">
		<div class="reveal">
			<h3>Desfrute de um dos <strong>lugares mais paradisíacos do mundo</strong>, em casas de 4 ou 3 suítes, com todos os privilégios que você merece <strong>tudo isso em um condomínio exclusivo e cinematográﬁco.</strong></h3>
		</div>
	</div>
</section>
<?php get_template_part('inc/galeriacasas'); ?>
<section id="depoimentoHome">
		<div class="row no-margin">
			<div class="col-md-6 no-padding">
				<div class="videoWrapper">
					<a href="https://www.youtube.com/watch?v=5fEEtvrFxIQ" data-fancybox></a>
				</div>
				<!--<img src="<?php bloginfo('template_url'); ?>/images/depoimento.jpg">-->
			</div>
			<div class="col-md-6 no-padding">
				<blockquote>
					“O ponto forte do Itacaré Paradise é poder programar as férias com bastante conforto e contar com praias belíssimas por perto. O que eu acho muito legal também é que não preciso me preocupar com a mobília e a manutenção, porque a administração cuida de tudo.”<br /><br />
					<strong>Roberto Costa</strong>
				</blockquote>
			</div>
		</div>
</section>
<section id="vantagensHome">
	<section class="block-text">
		<div class="container">
			<div class="reveal">
				<h3>Fazer parte do <strong>Sistema Fractional</strong> é sinônimo de economizar. Sucesso nos Estados Unidos, Canadá, México, Caribe e Europa, o <strong>novo negócio imobiliário</strong> é mais do que inteligente, é uma nova cultura, é um novo estilo de viver. <strong>Compre o seu imóvel e só pague pelo tempo que pretende utilizá-lo.</strong></h3>
			</div>
		</div>
	</section>
	<section class="lista-icones">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<ul>
						<li>
							<div class="row no-margin">
								<div class="col-md-8 no-padding">
									<div class="textWrapper">
										<p>Casa mobiliada</p>
									</div>
								</div>
								<div class="col-md-4 no-padding">
									<div class="iconWrapper">
										<img src="<?php bloginfo('template_url'); ?>/images/vantagens/casa-mobiliada.svg" alt="Casa Mobiliada">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="row no-margin">
								<div class="col-md-8 no-padding">
									<div class="textWrapper">
										<p>Serviços de Limpeza e Manutenção</p>
									</div>
								</div>
								<div class="col-md-4 no-padding">
									<div class="iconWrapper">
										<img src="<?php bloginfo('template_url'); ?>/images/vantagens/limpeza-manutencao.svg" alt="Casa Mobiliada">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="row no-margin">
								<div class="col-md-8 no-padding">
									<div class="textWrapper">
										<p>Roupas de cama, mesa e banho exclusivas</p>
									</div>
								</div>
								<div class="col-md-4 no-padding">
									<div class="iconWrapper">
										<img src="<?php bloginfo('template_url'); ?>/images/vantagens/mesa-banho.svg" alt="Casa Mobiliada">
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-6 col-sm-6">
					<ul class="right">
						<li>
							<div class="row no-margin">
								<div class="col-md-8 no-padding floatright">
									<div class="textWrapper">
										<p>Intercâmbio imobiliário</p>
									</div>
								</div>
								<div class="col-md-4 no-padding floatright">
									<div class="iconWrapper">
										<img src="<?php bloginfo('template_url'); ?>/images/vantagens/intercambio-mobiliario.svg" alt="Casa Mobiliada">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="row no-margin">
								<div class="col-md-8 no-padding floatright">
									<div class="textWrapper">
										<p>Valorização Imobiliária</p>
									</div>
								</div>
								<div class="col-md-4 no-padding floatright">
									<div class="iconWrapper">
										<img src="<?php bloginfo('template_url'); ?>/images/vantagens/valorizacao-imobiliaria.svg" alt="Casa Mobiliada">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="row no-margin">
								<div class="col-md-8 no-padding floatright">
									<div class="textWrapper">
										<p>Livre de contas de água, luz e condomínio</p>
									</div>
								</div>
								<div class="col-md-4 no-padding floatright">
									<div class="iconWrapper">
										<img src="<?php bloginfo('template_url'); ?>/images/vantagens/contas.svg" alt="Casa Mobiliada">
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="link reveal">
				<a href="<?php bloginfo('url'); ?>/sistema-fractional/" class="btn">Conheça o sistema</a>
			</div>
		</div>
	</section>
</section>
<?php get_footer(); ?>