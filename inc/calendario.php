<section id="date-contato">
	<h2>Agende sua visita</h2>
	<div id="datepicker" data-date="<?php the_date('d/m/Y'); ?>" class="wrapper active"></div>
	<div id="formcontato" class="wrapper">
		<?php $token = get_option('token_rd'); ?>
		<form name="faleconosco" class="form">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<input type="text" name="nome" placeholder="Nome:" class="required" required>
				</div>
				<div class="col-sm-6 col-xs-12">
					<input type="email" name="email" placeholder="E-mail:" class="required" required>
				</div>
				<div class="col-sm-6 col-xs-6">
					<input type="text" name="telefone" placeholder="Telefone:" class="tel">
				</div>
				<div class="col-sm-6 col-xs-6">
					<input type="text" id="data" name="data" disabled>
				</div>
				<div class="col-sm-12 col-xs-12">
					<textarea name="mensagem" placeholder="Mensagem:" class="required" required></textarea>
				</div>
				<div class="col-sm-12 col-xs-12">
					<input type="hidden" id="token_rdstation" name="token_rdstation" value="<?php echo $token; ?>">
                    <input type="hidden" id="identificador" name="identificador" value="[<?php bloginfo('name'); ?>] - Fale Conosco">
					<button class="btn" type="button">Enviar</button>
					<span id="voltarcontato" class="">Voltar</span>
					<div class="resposta"></div>
				</div>
			</div>
		</form>
	</div>
	<span id="continuarcontato" class="active">Continuar</span>
	
	<div class="clearfix"></div>
</section>
