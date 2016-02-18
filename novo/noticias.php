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
					<h1>Notícias</h1>
					
					<nav class="bread-crumbs">
						<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="noticias.php">Notícias</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content">
				<div class="grid-row">					
					<!-- news -->
					<section id="news" class="widget news news-1">						
						<div class="grid">

							<div class="item">
								<h3 class="widget-title"><a href="noticias-view.php">Lesão cartilaginosa do joelho: saiba como é o tratamento e recuperação</a></h3>
								<div class="date">20 MAR 2014<i class="fa fa-comment"><span>3</span></i></div>
								<div class="wrapper">
									<div class="pic">
										<img src="pic/photo-tour-1.jpg" alt="Lesão cartilaginosa do joelho: saiba como é o tratamento e recuperação">
										<div class="links">
											<ul>
												<li><a href="noticias-view.php" class="fa fa-plus"></a></li>										
											</ul>
										</div>
									</div>
								</div>
								<p>A cartilagem é um tecido que reveste as articulações do corpo e tem a função básica de absorver e melhor distribuir as cargas aplicadas. Isso ocorre devido a seu alto potencial de deformação plástica e por propriedades que auxiliam na "lubrificação" articular, também conhecido como líquido sinovial. É rico em fibras de colágeno tipo II e é dividida em quatro camadas de células, denominadas condrócitos, que vão desde a superfície articular até o osso. Por isso, vamos falar sobre a lesão na cartilagem do joelho.</p>
								<p>Sabe-se que a cartilagem articular lesada é de potencial de cicatrização muito limitado. Isso se deve às propriedades do tecido cartilaginoso que, ao contrário da maioria dos tecidos do corpo, possui pouquíssimas células, não possui vasos sanguíneos (avascularidade), é aneural, ou seja, não possui terminações nervosas e é riquíssimo em água. Assim, uma vez lesada, a reação inflamatória é muito pequena e a possibilidade de reparo, quase nula.</p>
								<div class="cats">Tags: <a href="#">Ortópedia</a>, <a href="#">Tendinite</a>, <a href="#">Fisioterapia</a><a href="noticias-view.php" class="more fa fa-long-arrow-right"></a></div>
							</div>


							<div class="item">
								<h3 class="widget-title"><a href="noticias-view.php">Colágeno: reforça ossos e músculos e auxilia contra o envelhecimento</a></h3>
								<div class="date">11 JAN 2014<i class="fa fa-comment"><span>3</span></i></div>
								<div class="wrapper">
									<div class="pic">
										<img src="pic/photo-tour-2.jpg" alt="Colágeno: reforça ossos e músculos e auxilia contra o envelhecimento">
										<div class="links">
											<ul>
												<li><a href="noticias-view.php" class="fa fa-plus"></a></li>										
											</ul>
										</div>
									</div>
								</div>
								<p>O colágeno é a proteína mais abundante no nosso organismo, representando cerca de 25% de toda proteína corporal, constituída principalmente pelos aminoácidos, sendo o principal elemento fibroso da pele, ossos, tendões e dentes. Está presente em quantidades variáveis em quase todos os órgãos e sua principal função é dar sustentação e elasticidade à pele, ossos, cartilagens, tendões e ligamentos.</p>

								<p>O colágeno é reposto em nosso organismo por meio da alimentação equilibrada. Os alimentos de origem animal, tais como as carnes (principalmente as vermelhas), ovos, frango e peixes, são excelentes fontes de proteínas e de colágeno.</p>
								<div class="cats">Tags: <a href="#">Dentista</a>, <a href="#">Médicos</a>, <a href="#">Notícias</a><a href="noticias-view.php" class="more fa fa-long-arrow-right"></a></div>
							</div>

							
						</div>
						
						<a href="#" data-template="news-one" data-page="2" class="button more"><i class="fa fa-refresh"></i>Ver atualizações</a>
					</section>
					<!--/ photo tour -->
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