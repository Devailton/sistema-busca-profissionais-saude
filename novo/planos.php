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
					<h1>Planos</h1>					
					<nav class="bread-crumbs">
						<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">Informações</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">Planos</a>
					</nav>
				</div>
			</section>
			<!--/ page title -->

			<main class="page-content">
				<div class="grid-row">
					<div class="grid-col grid-col-9">

						<!-- pricing table -->
						<div class="widget pricing-table wpb_content_element">
							<div class="widget-title">Planos Mensais</div>
							<div class="row">
								<!--
								--><div class="col col-4">
									<div class="head"><span>Bronze</span>Divulgação em 2 dias</div>
									<div class="price">
										<div><sup>R$</sup>20<span>mensais</span></div>
									</div>
									<ul class="listing">
										<li><i class="fa fa-search"></i>Busca simples</li>
										<li><i class="fa fa-lock"></i>Painel limitado</li>
										<li><i class="fa fa-calendar"></i>30 dias - 24h no ar</li>
									</ul>
									<div class="summary">Painel limitado á exibir apenas informações sobre a conta do anunciante.</div>
									<div class="join"><a href="cadastro.php" class="wpb_button wpb_btn-large">Contratar</a></div>
								</div><!--
								--><div class="col col-4">
									<div class="head"><span>Prata</span>Divulgação em 2 dias</div>
									<div class="price">
										<div><sup>R$</sup>30<span>mensais</span></div>
									</div>
									<ul class="listing">
										<li><i class="fa fa-search"></i>Busca Personalizada</li>
										<li><i class="fa fa-lock"></i>Painel limitado</li>
										<li><i class="fa fa-globe"></i>Mapa - Localização</li>
										<li><i class="fa fa-calendar"></i>30 dias - 24h no ar</li>
									</ul>
									<div class="summary">Painel limitado á exibir apenas informações sobre a conta do anunciante.</div>
									<div class="join"><a href="cadastro.php" class="wpb_button wpb_btn-large">Contratar</a></div>
								</div><!--
								--><div class="col col-4">
									<div class="head"><span>OURO</span>Divulgação imediata</div>
									<div class="price">
										<div><sup>R$</sup>50<span>mensais</span></div>
									</div>
									<ul class="listing">
										<li><i class="fa fa-bullhorn"></i>Banner</li>
										<li><i class="fa fa-search"></i>Busca personalizada</li>
										<li><i class="fa fa-bar-chart-o"></i>Relatório</li>
										<li><i class="fa fa-lock"></i>Painel</li>
										<li><i class="fa fa-globe"></i>Mapa - Localização</li>
										<li><i class="fa fa-calendar"></i>30 dias - 24h no ar</li>
									</ul>
									<div class="summary">Os banners serão enviados pelos anunciantes ou personalizados de acordo com sua preferência </br>(R$ 10,00)!</div>
									<div class="join"><a href="cadastro.php" class="wpb_button wpb_btn-large">Contratar</a></div>
								</div><!--
								--><div class="col col-4">
									<div class="head"><span>DIAMANTE</span>Divulgação imediata</div>
									<div class="price">
										<div><sup>R$</sup>80<span>mensais</span></div>
									</div>
									<ul class="listing">
										<li><i class="fa fa-bullhorn"></i>Banner</li>
										<li><i class="fa fa-users"></i>Redes sociais</li>
										<li><i class="fa fa-trophy"></i>Destaque</li>
										<li><i class="fa fa-search"></i>Busca personalizada</li>
										<li><i class="fa fa-bar-chart-o"></i>Relatório</li>
										<li><i class="fa fa-lock"></i>Painel</li>
										<li><i class="fa fa-globe"></i>Mapa - Localização</li>
										<li><i class="fa fa-calendar"></i>30 dias - 24h no ar</li>
									</ul>
									<div class="summary">Os banners serão enviados pelos anunciantes ou personalizados de acordo com sua preferência  </br>(R$ 10,00)!</div>
									<div class="join"><a href="cadastro.php" class="wpb_button wpb_btn-large">Contratar</a></div>
								</div>
							</div>
						</div>
						<!--/ pricing table -->
						<!-- pricing table -->
						<div class="widget pricing-table wpb_content_element">
							<div class="widget-title">Planos Anuais</div>
							<div class="row">
								<div class="col col-first col-4">
									<div class="head-first">Planos anuais com descontos</div>
									<ul class="listing-first">
										<li>Prata</li>
										<li>Ouro</li>
										<li>Diamante</li>
									</ul>
									<div class="summary-first">Os planos anuais possuem 10% de desconto.</div>
								</div><!--
								--><div class="col col-4">
									<div class="head"><span>PRATA</span>Divulgação em 2 dias</div>
									<div class="price">
										<div><sup>R$</sup>324<span>anuais</span></div>
									</div>
									<ul class="listing">
										<li><i class="fa fa-search"></i>Busca Personalizada</li>
										<li><i class="fa fa-lock"></i>Painel limitado</li>
										<li><i class="fa fa-globe"></i>Mapa - Localização</li>
										<li><i class="fa fa-calendar"></i>30 dias - 24h no ar</li>
									</ul>
									<div class="summary">Painel limitado á exibir apenas informações sobre a conta do anunciante.</div>
									<div class="join"><a href="cadastro.php" class="wpb_button wpb_btn-large">Contratar</a></div>
								</div><!--
								--><div class="col col-4">
									<div class="head"><span>OURO</span>Divulgação imediata</div>
									<div class="price">
										<div><sup>R$</sup>540<span>anuais</span></div>
									</div>
									<ul class="listing">
										<li><i class="fa fa-bullhorn"></i>Banner</li>
										<li><i class="fa fa-search"></i>Busca personalizada</li>
										<li><i class="fa fa-bar-chart-o"></i>Relatório</li>
										<li><i class="fa fa-lock"></i>Painel</li>
										<li><i class="fa fa-globe"></i>Mapa - Localização</li>
										<li><i class="fa fa-calendar"></i>30 dias - 24h no ar</li>
									</ul>
									<div class="summary">Os banners serão enviados pelos anunciantes ou personalizados de acordo com sua preferência </br>(R$ 10,00)!</div>
									<div class="join"><a href="cadastro.php" class="wpb_button wpb_btn-large">Contratar</a></div>
								</div><!--
								--><div class="col col-4">
									<div class="head"><span>PREMIUM</span>Divulgação imediata</div>
									<div class="price">
										<div><sup>R$</sup>864<span>anuais</span></div>
									</div>
									<ul class="listing">
										<li><i class="fa fa-bullhorn"></i>Banner</li>
										<li><i class="fa fa-users"></i>Redes sociais</li>
										<li><i class="fa fa-trophy"></i>Destaque</li>
										<li><i class="fa fa-search"></i>Busca personalizada</li>
										<li><i class="fa fa-bar-chart-o"></i>Relatório</li>
										<li><i class="fa fa-lock"></i>Painel</li>
										<li><i class="fa fa-globe"></i>Mapa - Localização</li>
										<li><i class="fa fa-calendar"></i>30 dias - 24h no ar</li>
									</ul>
									<div class="summary">Os banners serão enviados pelos anunciantes ou personalizados de acordo com sua preferência </br>(R$ 10,00)!</div>
									<div class="join"><a href="cadastro.php" class="wpb_button wpb_btn-large">Contratar</a></div>
								</div>
							</div>
						</div>
						<!--/ pricing table -->
												
						<div class="vc_text_separator"></div>
		
						<!-- services -->
						<section class="services services-wide wpb_content_element">
							<div class="widget-title">Informações adicionais</div>
								<ul id="services-carousel" class="owl-carousel">									
									<li>
										<ul>
											<li>
												<a class="pic"><i class="fa fa-globe"></i></a>
												<h2><a href="#">Mapa de localização</a></h2>
												<p>O anunciante disponibiliza o mapa da localização para facilitar a visualização de seus clientes .</p>
											</li>
											<li>
												<a class="pic"><i class="fa fa-bar-chart-o"></i></a>
												<h2><a href="#">Relatórios</a></h2>
												<p>O anunciante terá vários relatórios, como visitação, tempo em que o usuário navega em sua página, fluxo do site, categrias mais buscadas ... </p>
											</li>
										</ul>
									</li>
									<li>
										<ul>
											<li>
												<a class="pic"><i class="fa fa-users"></i></a>
												<h2><a href="#">Redes sociais</a></h2>
												<p>Exibição das redes sociais do anunciante.</p>
											</li>
											<li>
												<a class="pic"><i class="fa fa-trophy"></i></a>
												<h2><a href="#">Destaque</a></h2>
												<p>O anunciante aparecerá como destaque em todas as páginas do site.</p>
											</li>
										</ul>
									</li>
									<li>
										<ul>
											<li>
												<a class="pic"><i class="fa fa-search"></i></a>
												<h2><a href="#">Busca simples</a></h2>
												<p>O anunciante irá aparecer somente nos resultados de busca e na categoria de profissionais, sem exibição de detalhes e fotos.</p>
											</li>
											<li>
												<a class="pic"><i class="fa fa-search"></i></a>
												<h2><a href="#">Busca personalizada</a></h2>
												<p>O anunciante irá aparecer nos resultados de busca e na categoria de profissionais, com exibição de detalhes e fotos, bem como na nuvens de tags do site.</p>
											</li>
										</ul>
									</li>
									<li>
										<ul>
											<li>
												<a class="pic"><i class="fa fa-lock"></i></a>
												<h2><a href="#">Painel limitado</a></h2>
												<p>O anunciante terá acesso aos dados cadastrais e ao plano contratado</p>
											</li>
											<li>
												<a class="pic"><i class="fa fa-lock"></i></a>
												<h2><a href="#">Painel ilimitado</a></h2>
												<p>Além do anunciante ter acesso aos dados cadastrais e ao plano contratado, ele pode ter acesso a relatórios, troca de mensagens e estatística mensais do seu anúncio.</p>
											</li>
										</ul>
									</li>
								</ul>
						</section>
						<!--/ services -->

					</div>
					<div class="grid-col grid-col-3">

						<?php
							include("modulos/box-right-tre.php");
						?>

					</div>
				</div>
			</main>

			<?php
				include("modulos/rodape.php");
			?>

		</div>
		
		<?php
			include("modulos/plugins.php");
		?>
	</body>
</html>