<aside id="sidebar">

	<?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
	<?php endif; ?>

	<div class="sidebar-newsletter box-widget">
		<div class="box greenWrapper">
			<h4>Newsletter</h4>
			<p>Cadastre-se para receber gratuitamente nossos informativos</p>
			<form id="newsletter-blog" class="form">
				<input type="text" name="nome" placeholder="Nome:">
				<input type="email" name="email" placeholder="E-mail:">
				<input type="submit" value="Enviar" />
			</form>
		</div>
		<div class="box blueWrapper">
			<h5>Indique para um amigo</h5>
			<div class="links-social">
				<a href="https://www.facebook.com/sistemafractional/" class="link-social facebook" target="_blank"></a>
				<a href="https://www.instagram.com/itacareparadise/" class="link-social instagram" target="_blank"></a>
				<a href="https://api.whatsapp.com/send?phone=5511940082635&text=" class="link-social whatsapp" target="_blank"></a>
				<a href="https://www.youtube.com/user/ekoarqconstrutora" class="link-social youtube" target="_blank"></a>
				<a href="https://twitter.com/itacareparadise" class="link-social twitter" target="_blank"></a>
			</div>
		</div>
		<div class="box brownWrapper">
			<h5>Agende uma visita</h5>
			<a href="<?php bloginfo('url'); ?>/fale-conosco/" class="link-agenda"></a>	
		</div>
	</div>

</aside>