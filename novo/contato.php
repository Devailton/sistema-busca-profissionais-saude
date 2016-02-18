<!DOCTYPE html>
<html>
	<head>
		<?php 
			include("modulos/init.php"); 
		?>
	</head>
	
	<body>
		<div class="page">

			<?php
				include("modulos/topo.php");
			?>
			
			<?php
				include("modulos/busca.php");
			?>

			<!-- page title -->
			<section class="page-title">
				<div class="grid-row clearfix">
					<h1>Contato</h1>
					
					<nav class="bread-crumbs">
						<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">Contato</a>
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<!-- map -->
					<section class="map">
						<div class="widget-title">Nosso endereço</div>
						<div id="map" class="google-map"></div>
					</section>
					<!--/ map -->
				</div>
				
				<div class="grid-row">
					<div class="grid-col grid-col-9">
						<!-- feedback -->
						<article class="feedback">
							<div class="widget-title">Ficamos felizes em lhe atender.</div>
										
							<p>Qualquer mensagem recebida terá um prazo de 48H para resposta se necessário.</p>
							
							<form action="http://html.creaws.com/clinico/php/contact-send.php" id="contactform">
								<fieldset>
									<div class="clearfix">
										<div class="input">
											<label>Nome:</label>
											<input type="text" name="name">
										</div>
										<div class="input">
											<label>Email:</label>
											<input type="text" name="email">
										</div>
									</div>
									<div class="clearfix">
										<div class="input">
											<label>Telefone:</label>
											<input type="text" name="category">
										</div>
										<div class="input">
											<label>Assunto:</label>
											<input type="text" name="assunto">
										</div>
									</div>
									<label>Mensagem:</label>
									<textarea rows="6" name="message"></textarea>
									<div class="clearfix captcha">
											<div class="captcha-wrapper">
												<label for="verify">Digite o c&oacute;digo:</label>
												<iframe src="php/capcha.html" class="capcha-frame" name="capcha_image_frame" marginwidth="0" marginheight="0" frameborder="0"></iframe>

												<input class="verify" type="text" id="verify" name="verify" />
											</div>
											<button type="submit" class="button" value="Submit">Enviar</button>
											
									</div>
								</fieldset>
							</form>							
						</article>
						<!--/ feedback -->
					</div>
					
					<div class="grid-col grid-col-3">						
						<?php
							include("modulos/box-right-one.php");
						?>
					</div>
				</div>
			</main>
			<!--/ page content -->

			<?php
				include("modulos/rodape.php");
			?>
			
		</div>
		
		<?php
			include("modulos/plugins.php");
		?>
	</body>
</html>