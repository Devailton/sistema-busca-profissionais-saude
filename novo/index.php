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

			<!-- slider -->
			<div class="slider-wrapper">
				<section class="slider" id="slider">
					<div class="ls-slide" data-ls="transition2d:9;slidedelay:7000;">					
						<img src="pic/medical-slide-1.jpg" alt="" class="ls-bg">
						
						<div class="intro ls-l" data-ls="offsetyin:top;offsetxin:0;durationin:2000;offsetyout:bottom;offsetxout:0;durationout:1000;" style="left:80%;top:35%;">
							<span class="icon fa fa-heart"></span>
							<h2><span>Guia</span>Saúde e Vida</h2>
							<p>Saúde é coisa séria, encontre especialista em todas as áreas</p>
							<div class="buttons">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
								<a href="especialidades.php" class="button">Buscar</a>
								<a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="ls-slide" data-ls="transition2d:9;slidedelay:7000;">					
						<img src="pic/medical-slide-4.jpg" alt="" class="ls-bg">
						
						<div class="intro ls-l" data-ls="offsetyin:top;offsetxin:0;durationin:2000;offsetyout:bottom;offsetxout:0;durationout:1000;" style="left:80%;top:35%;">
							<span class="icon fa fa-bicycle"></span>
							<h2><span>Boa forma</h2>
							<p>As melhores academias para manter a boa forma, você encontra aqui!</p>
							<div class="buttons">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
								--><a href="instituicoes.php" class="button">Buscar</a><!--
								--><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="ls-slide" data-ls="transition2d:40;slidedelay:7000;">				
						<img src="pic/medical-slide-2.jpg" alt="" class="ls-bg">
						
						<div class="intro ls-l" data-ls="scalexin:0.3;scaleyin:0.3;rotatexin:180;offsetxin:0;durationin:2000;durationout:2000;scalexout:2;scaleyout:2;offsetxout:0;fadeout:true;showuntil:3000;" style="left:80%;top:35%;">
							<span class="icon fa fa-comments"></span>
							<h2><span>Fale conosco</span>Filia-se ao Super Guia Médico</h2>
							<p>Faça parte do maior portal de médico de Viçosa e região.</p>
							<div class="buttons">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
								--><a href="contato.php" class="button">Saiba mais</a><!--
								--><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="ls-slide" data-ls="transition2d:11;slidedelay:7000;">
						<img src="pic/medical-slide-3.jpg" alt="" class="ls-bg">
						
						<div class="intro ls-l" data-ls="skewxin:30;skewyin:0;offsetxin:right;fadein:false;durationin:2000;durationout:1000;offsetxout:right;offsetyout:0;fadeout:true;" style="left:80%;top:35%;">
							<span class="icon fa fa-flask"></span>
							<h2><span>Especialistas </span> em saúde bucal</h2>
							<p>Encontre os melhores dentistas da região.</p>
							<div class="buttons">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
								--><a href="#" class="button">Buscar</a><!--
								--><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!--/ slider -->
			
			<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<!-- benefits -->
					<section class="benefits">
						<ul>
							<li>
								<div class="pic"><i class="fa fa-child"></i></div>
								<div class="text">
									<h2>Academias</h2>
									<p>Melhore seu condicionamento físico e tenha mais qualidade de vida.</p>
									<a href="#" class="more"></a>
								</div>
							</li>
							<li>
								<div class="pic"><i class="fa fa-flask"></i></div>
								<div class="text">
									<h2>Laboratórios</h2>
									<p>Encontre os melhores laboratórios para realizar seus exames.</p>
									<a href="#" class="more"></a>
								</div>
							</li>
							<li>
								<div class="pic"><i class="fa fa-stethoscope"></i></div>
								<div class="text">
									<h2>Especialistas</h2>
									<p>Encontre os melhores especialistas de Viçosa e região.</p>
									<a href="#" class="more"></a>
								</div>
							</li>
							<li>
								<div class="pic"><i class="fa fa-comments-o"></i></div>
								<div class="text">
									<h2>Ajuda</h2>
									<p>Esclareça suas dúvidas, entre em contato conosco.</p>
									<a href="#" class="more"></a>
								</div>
							</li>
						</ul>
					</section>
					<!--/ benefits -->
				</div>
				
				<div class="grid-row">
					<!-- services -->
					<section class="services">
						<ul>
							<li>
								<a class="pic"><i class="fa fa-user-md"></i></a>
								<h2><a href="#">Especialidade</a></h2>
								<p>Aqui você encontra os melhores profissionais do mercado sem sair de casa.</p>
								<a href="#" class="more fa fa-long-arrow-right"></a>
							</li>
							<li>
								<a class="pic"><i class="fa fa-hospital-o"></i></a>
								<div class="text">
									<h2><a href="#">Clinícas e hospitais</a></h2>
									<p>Saiba onde encontrar os melhores e maiores hospitais e clínicas das região.</p>
									<a href="#" class="more fa fa-long-arrow-right"></a>
								</div>
							</li>
							<li>
								<a class="pic"><i class="fa fa-clock-o"></i></a>
								<h2><a href="#">Serviço 24 horas</a></h2>
								<p>Utilize nosso sistema de busca 24 horas sem custos.</p>
								<a href="#" class="more fa fa-long-arrow-right"></a>
							</li>
							<li>
								<a class="pic"><i class="fa fa-wheelchair"></i></a>
								<div class="text">
									<h2><a href="#">Guia Saúde e Vida</a></h2>
									<p>Conheça mais sobre o portal e como podemos ajudar a divulgar seu trabalho.</p>
									<a href="#" class="more fa fa-long-arrow-right"></a>
								</div>
							</li>
						</ul>
					</section>
					<!-- services -->	
				</div>
				
				<?php
					include("modulos/medicos-destaque.php");
				?>
				
				<div class="grid-row">
					<div class="grid-col grid-col-4">
						<!-- departments -->
						<section class="widget widget-departments">
							<div class="widget-title">Instituições</div>
							<dl>
								<dt><i class="fa fa-medkit"></i>Cliníca Santa Maria</dt>
								<dd>Rua Salvador Clemente, número 405, Bairro Santa Clara, Viçosa - MG.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-plus-square"></i> SAIBA MAIS</a></dd>
								<dt><i class="fa fa-medkit"></i>Cliníca Santa Maria</dt>
								<dd>Rua Salvador Clemente, número 405, Bairro Santa Clara, Viçosa - MG.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-plus-square"></i> SAIBA MAIS</a></dd>
								<dt><i class="fa fa-medkit"></i>Cliníca Santa Maria</dt>
								<dd>Rua Salvador Clemente, número 405, Bairro Santa Clara, Viçosa - MG.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-plus-square"></i> SAIBA MAIS</a></dd>
								<dt><i class="fa fa-medkit"></i>Cliníca Santa Maria</dt>
								<dd>Rua Salvador Clemente, número 405, Bairro Santa Clara, Viçosa - MG.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-plus-square"></i> SAIBA MAIS</a></dd>
								<dt><i class="fa fa-medkit"></i>Cliníca Santa Maria</dt>
								<dd>Rua Salvador Clemente, número 405, Bairro Santa Clara, Viçosa - MG.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-plus-square"></i> SAIBA MAIS</a></dd>
								<dt><i class="fa fa-medkit"></i>Cliníca Santa Maria</dt>
								<dd>Rua Salvador Clemente, número 405, Bairro Santa Clara, Viçosa - MG.<br/><a href="timetable-week.html"><i class="soc-icon fa fa-plus-square"></i> SAIBA MAIS</a></dd>
							</dl>
						</section>
						<!--/ departments -->
					</div>
					
					<div class="grid-col grid-col-4">
						<!-- sevices -->
						<section class="widget widget-sevices">
							<div class="widget-title">Outras especialidades</div>
							<ul>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Cardiologista</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Dermatologista</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Dentista</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Psicológo</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Personal Trainer</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Enfermeiro</a></li>
							</ul>
						</section>
						<!--/ sevices -->
					</div>
					
					<div class="grid-col grid-col-4">
						<!-- appointment -->
						<section class="widget widget-appointment">
							<div class="widget-title">Deixe seu depoimento</div>
							<form action="#">
								<div class="row">
									<input type="text" placeholder="Nome">
									<i class="fa fa-user"></i>
								</div>
								<div class="row">
									<input type="tel" placeholder="Telefone">
									<i class="fa fa-phone"></i>
								</div>
								<div class="row">
									<input type="email" placeholder="E-mail">
									<i class="fa fa-envelope"></i>
								</div>
								<div class="row">
									<input type="text" placeholder="Assunto">
									<i class="fa fa-comments"></i>
								</div>
								<div class="row">
									<textarea cols="30" rows="5" placeholder="Mensagem"></textarea>
									<i class="fa fa-align-left"></i>
								</div>
								<button class="button button-primary">Enviar Mensagem</button>
							</form>
						</section>
						<!--/ appointment -->	
					</div>	
				</div>
				<div class="grid-row">
					<!-- publicidade carousel -->
					<section class="widget publicidade-carousel publicidade">
						<div class="widget-title">Publicidade</div>
						<div id="publicidade-carousel" class="owl-carousel">
							<div class="item">
								<div class="pic">
									<img src="pic/publi4.jpg" width="360" height="200" alt="Publicidade">
								</div>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/publi1.jpg" width="360" height="200" alt="Publicidade">
								</div>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/publi2.jpg" width="360" height="200" alt="Publicidade">
								</div>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/publi3.jpg" width="360" height="200" alt="Publicidade">
								</div>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/publi4.jpg" width="360" height="200" alt="Publicidade">
								</div>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/publi5.jpg" width="360" height="200" alt="Publicidade">
								</div>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/publi6.jpg" width="360" height="200" alt="Publicidade">
								</div>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/publi1.jpg" width="360" height="200" alt="Publicidade">
								</div>
							</div>
						</div>
					</section>
					<!--/ publicidade carousel -->
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