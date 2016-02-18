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
					<h1>Descrição do profissional</h1>
					
					<nav class="bread-crumbs">
						<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="especialidades.php">Especialidades</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="">Descrição do profissional</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content vc_responsive">
				<div class="grid-row">					
						<!-- philosophy -->
						<section>	
							<div class="widget-title">Dr. Roberto Carlos Henrique</div>
							
							<div class="wpb_text_column wpb_content_element">
								<div class="wpb_wrapper">			
									<img src="pic/doctor_descrition.jpg" width="260" height="246" alt="" class="alignleft">
									<p class="capitalized">É um médico oncologista, cientista e escritor brasileiro, formado pela Universidade de São Paulo, na qual foi aprovado em 2° lugar 5 , conhecido por popularizar a medicina em seu país, através de programas de rádio e TV. Foi também um dos fundadores da Universidade Paulista e da Rede Objetivo, onde lecionou física e química durante muitos anos.</p>
									<p>Descendente de galegos e portugueses, Drauzio estudou medicina na Faculdade de Medicina da Universidade de São Paulo. No início dos anos 70, já como médico, ele começou a trabalhar com o professor Vicente Amato Neto na área de moléstias infecciosas do Hospital do Servidor Público de São Paulo. Durante 20 anos, dirigiu também o serviço de imunologia do Hospital do Câncer (São Paulo) e, de 1990 a 1992, o serviço de câncer do Hospital do Ipiranga.</p>
									<p>Além do câncer, Drauzio Varella dedicou seu trabalho ao estudo da AIDS. Foi um dos pioneiros no estudo dessa doença no Brasil, especialmente do sarcoma de Kaposi. Em 1989, iniciou um trabalho no Carandiru (nome popular da "Casa de Detenção de São Paulo"), investigando a prevalência do vírus HIV nos detentos. Até 2002, ano em que o presídio foi desativado, trabalhou como médico voluntário no local. O dr. Varella chegou a idealizar uma revista em quadrinhos, O Vira-Lata, como parte do plano de prevenção da AIDS na cadeia.</p>
									<p>Em 1986, sob orientação do radialista Fernando Vieira de Mello, iniciou campanhas nas rádios com o intuito de esclarecer a população sobre a AIDS e métodos de prevenção. Com esse projeto, Varella trabalhou na Jovem Pan 2 FM e depois na 89 FM de São Paulo. Também apresenta há alguns anos, diariamente na Rádio Bandeirantes de São Paulo (AM 840khz, FM 90, 9 mhz) o "Espaço Saúde", em que descreve doenças, seus sintomas e, principalmente, formas de prevenção. O combate ao tabagismo ocupa grande parte de suas preocupações. Na televisão, seu trabalho mais conhecido é o na Rede Globo, onde apresenta diversos quadros na área de saúde no programa Fantástico, falando sobre o corpo humano, o tabagismo, primeiros socorros, gravidez, obesidade e transplante de órgãos. Além da Rede Globo, ele trabalha ainda em outras emissoras, como o Canal Universitário e a TV Senado, nos quais entrevista especialistas e discute assuntos de saúde em diversas áreas.</p>
								</div>
							</div>
						</section>
						<!--/ philosophy -->

						<!-- list -->
						<section class="widget">	
							<div class="widget-title">Especialidades</div>
							
							<div class="wpb_row vc_row-fluid">
								<div class="vc_span4 wpb_column column_container">
									<div class="wpb_wrapper">
										<div class="wpb_text_column wpb_content_element">
											<div class="wpb_wrapper">			
												<ul class="ul1">
													<li>Dermatologia estética</li>
													<li>Tricologia</li>
													<li>Onicologia</li>
													<li>Estomatologia</li>
													<li>Dermatologia laboratorial</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_span4 wpb_column column_container">
									<div class="wpb_wrapper">
										<div class="wpb_text_column wpb_content_element">
											<div class="wpb_wrapper">
												<ul class="ul1">
													<li>Dermatologia estética</li>
													<li>Tricologia</li>
													<li>Onicologia</li>
													<li>Estomatologia</li>
													<li>Dermatologia laboratorial</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_span4 wpb_column column_container">
									<div class="wpb_wrapper">
										<div class="wpb_text_column wpb_content_element">
											<div class="wpb_wrapper">
												<ul class="ul1">
													<li>Dermatologia estética</li>
													<li>Tricologia</li>
													<li>Onicologia</li>
													<li>Estomatologia</li>
													<li>Dermatologia laboratorial</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!--/ list -->	
						
						<!-- details -->
						<section class="widget widget-details">
							<div class="widget-title">Nosso Endereço</div>
							<div class="text">
								<ul>
									<li><i class="fa fa-angle-right"></i><strong>Endereço:</strong> Rua Padre Serafim, 502, sala 502, Edifício João XXIII</li>
									<li><i class="fa fa-angle-right"></i><strong>Bairro:</strong> Centro</li>
									<li><i class="fa fa-angle-right"></i><strong>Cidade: </strong> Viçosa <strong>Estado: </strong> MG</li>
									<li><i class="fa fa-angle-right"></i><strong>CEP:</strong> 36570-000</li>
									<li><i class="fa fa-angle-right"></i><strong>Telefone:</strong> (31) 0000-0000</li>
								</ul>
							</div>
						</section>
						<!--/ details -->

						<div class="grid-row">
							<!-- map -->
							<section class="map">
								<div id="map" class="google-map"></div>
							</section>
							<!--/ map -->
						</div>
						
						<!-- callout -->
						<div class="callout callout-background wpb_content_element">
							<div class="icon"><i class="fa fa-envelope"></i></div>
							<div class="callout-wrapper">
								<div class="callout-content">
									<div class="title">Entre em contato comigo!</div>
									<div class="subtitle">Terei o maior prazer em responder sua dúvida.</div>
								</div>
								<div class="callout-button">
									<a href="#" class="button">Entrar em contato</a>
								</div>
							</div>
						</div>
						<!--/ callout -->

				</div>
				<div class="grid-row">
					<!-- publicidade carousel -->
					<section class="widget publicidade-carousel publicidade">
						<div class="widget-title">Consultório</div>
						<div id="publicidade-carousel" class="owl-carousel">
							<div class="item">
								<div class="pic">
									<img src="pic/consultorio.jpg" width="360" height="200" alt="Sala de atendimento">
								</div>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/consult.jpg" width="360" height="200" alt="Sala de atendimento">
								</div>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/consult_two.jpg" width="360" height="200" alt="Sala de atendimento">
								</div>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/consultorio.jpg" width="360" height="200" alt="Sala de atendimento">
								</div>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/consult.jpg" width="360" height="200" alt="Sala de atendimento">
								</div>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/consult_two.jpg" width="360" height="200" alt="Sala de atendimento">
								</div>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/consultorio.jpg" width="360" height="200" alt="Sala de atendimento">
								</div>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/consult_two.jpg" width="360" height="200" alt="Sala de atendimento">
								</div>
							</div>
						</div>
					</section>
					<!--/ publicidade carousel -->
				</div>
				<div class="grid-row">
					<div class="wpb_row vc_row-fluid">
						<div class="vc_span4 wpb_column column_container">
							<section class="widget">	
								<div class="widget-title">Horário de funcionamento</div>
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element">
										<div class="wpb_wrapper">			
											<ul class="ul1">
												<li>Seg - 08:00 am a 18:00 pm</li>
												<li>Ter - 08:00 am a 12:00 pm</li>
												<li>Qua - 08:00 am a 12:00 pm</li>
												<li>Qui - 08:00 am a 14:00 pm</li>
												<li>Sex - 10:00 am a 18:00 pm</li>
												<li>Sab - 10:00 am a 18:00 pm</li>
												<li>Sab - 10:00 am a 18:00 pm</li>
												<li>Dom - Não atendemos!</li>
											</ul>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="vc_span4 wpb_column column_container">
							<section class="widget">	
								<div class="widget-title">Informações gerais</div>
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element">
										<div class="wpb_wrapper">			
											<ul class="ul1">
												<li>Conselho Regional: CRM25142-4</li>
												<li>Local de formação: UFV</li>
												<li>Ano de formação: 2012</li>
												<li>Acessibilidade do ambiente de trabalho: Sim</li>
												<li>Atendimento domiciliar: Não</li>
												<li>Atendimento 24h: Não</li>
												<li>Cartões: Visa, Elo, MasterCard</li>
											</ul>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="vc_span4 wpb_column column_container">
							<section class="widget">	
								<div class="widget-title">Convênios</div>
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element">
										<div class="wpb_wrapper">			
											<ul class="ul2">
												<li><a href="http://www.amil.com.br/portal/web/institucional">Amil</a></li>
												<li><a href="http://www.agros.org.br/institucional">Agros</a></li>
												<li><a href="http://www.bradesco.com.br/html/classic/index.shtm">Bradesco</a></li>
												<li><a href="http://www.plamhuv.com.br/">Plamuv</a></li>
												<li><a href="http://www.unimed.coop.br/pct/index.jsp?cd_canal=52516">Unimed</a></li>
												<li><a href="http://www.imasvicosa.com.br/">Unimed</a></li>
											</ul>
										</div>
									</div>
								</div>
							</section>
						</div>
							
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