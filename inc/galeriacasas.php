<?php 

	
	$idamarela = 1628;
	$idazul = 1627;


	$amarela = array(
		'fachada' => acf_photo_gallery('fachada',$idamarela),
		'quarto' => acf_photo_gallery('quarto',$idamarela),
		'cozinha' => acf_photo_gallery('cozinha',$idamarela),
		'salaestar' => acf_photo_gallery('salaestar',$idamarela),
		'toilet' => acf_photo_gallery('toilet',$idamarela),
		'areaexterna' => acf_photo_gallery('areaexterna',$idamarela),
	);

	$azul = array(
		'fachada' => acf_photo_gallery('fachada',$idazul),
		'quarto' => acf_photo_gallery('quarto',$idazul),
		'cozinha' => acf_photo_gallery('cozinha',$idazul),
		'salaestar' => acf_photo_gallery('salaestar',$idazul),
		'toilet' => acf_photo_gallery('toilet',$idazul),
		'areaexterna' => acf_photo_gallery('areaexterna',$idazul)
	);

	$am = array(
		'fachada' => 0, 
		'quarto' => count($amarela['fachada']),
		'cozinha' => count($amarela['fachada']) + count($amarela['quarto']),
		'salaestar' => count($amarela['fachada']) + count($amarela['quarto']) + count($amarela['cozinha']),
		'toilet' => count($amarela['fachada']) + count($amarela['quarto']) + count($amarela['cozinha']) + count($amarela['salaestar']),
		'areaexterna' => count($amarela['fachada']) + count($amarela['quarto']) + count($amarela['cozinha']) + count($amarela['salaestar']) + count($amarela['toilet'])
	);

	$az = array(
		'fachada' => 0, 
		'quarto' => count($azul['fachada']),
		'cozinha' => count($azul['fachada']) + count($azul['quarto']),
		'salaestar' => count($azul['fachada']) + count($azul['quarto']) + count($azul['cozinha']),
		'toilet' => count($azul['fachada']) + count($azul['quarto']) + count($azul['cozinha']) + count($azul['salaestar']),
		'areaexterna' => count($azul['fachada']) + count($azul['quarto']) + count($azul['cozinha']) + count($azul['salaestar']) + count($azul['toilet'])
	);

	$json = array(
		'amarela' => $am,
		'azul' => $az
	);

	//Necessário para haver a troca do data-to na navegação
	echo '<script>';
	echo 'var casas = '.json_encode($json).';';
	echo '</script>';
	
?>


<section id="galeriacasas">
	<nav>
		<div class="container no-padding-mobile">
			<div id="selectCasa">
				<ul>				
					<li data-galeria="fotoscasaazul" class="first"><span>Paradise Blue Sky <i class="fa fa-angle-down" aria-hidden="true"></i></span></li>
					<li data-galeria="fotoscasaamarela"><span>Paradise Yellow Send <i class="fa fa-angle-down" aria-hidden="true"></i></span></li>
				</ul>
			</div>
			<div class="swiper-container list-fotos">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><span id="fotosfachada" class="nav-galeriacasa" data-to="0">Fachada</span></div>
					<div class="swiper-slide"><span id="fotosquarto" class="nav-galeriacasa" data-to="<?php echo $az['quarto']; ?>">Quarto</span></div>
					<div class="swiper-slide"><span id="fotoscozinha" class="nav-galeriacasa" data-to="<?php echo $az['cozinha']; ?>">Cozinha</span></div>
					<div class="swiper-slide"><span id="fotossalaestar" class="nav-galeriacasa" data-to="<?php echo $az['salaestar']; ?>">Sala de Estar</span></div>
					<div class="swiper-slide"><span id="fotostoilet" class="nav-galeriacasa" data-to="<?php echo $az['toilet']; ?>">Toilet</span></div>
					<div class="swiper-slide"><span id="fotosareaexterna" class="nav-galeriacasa" data-to="<?php echo $az['areaexterna']; ?>">Área Externa</span></div>
				</div>
			</div>
		</div>
	</nav>
	<div id="fotoscasaazul" class="fotosWrapper active">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php
				foreach ($azul as $galerias) {
					foreach ($galerias as $fotos) { ?>

						<?php 

						$foto = '';
						if (wp_is_mobile()) {
							$foto = acf_photo_gallery_resize_image($fotos['full_image_url'], 500, 300);
						} else {
							$foto = $fotos['full_image_url'];
						} ?>

						<div class="swiper-slide" data-swiper-autoplay="5000">
							<img data-src="<?php echo $foto; ?>" class="swiper-lazy" />
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
					<?php }
				} ?>
			</div>
			<div class="navigation">
		    	<span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
		    	<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
		    </div>
		</div>
	</div>
	<div id="fotoscasaamarela" class="fotosWrapper">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php
				foreach ($amarela as $galerias) {
					foreach ($galerias as $fotos) { ?>
						<!--<div class="swiper-slide" data-swiper-autoplay="5000" style="background-image: url(<?php echo $fotos['full_image_url'] ?>);"></div>-->
						<div class="swiper-slide" data-swiper-autoplay="5000">
							<img data-src="<?php echo $fotos['full_image_url'] ?>" class="swiper-lazy" />
							<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
						</div>
					<?php }
				} ?>
			</div>
			<div class="navigation">
		    	<span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
		    	<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
		    </div>
		</div>
	</div>
</section>