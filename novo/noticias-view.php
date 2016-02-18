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
					<h1>Notícia</h1>
					
					<nav class="bread-crumbs">
						<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="noticias.php">Notícias</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">Lesão cartilaginosa do joelho: saiba como é o tratamento e recuperação</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content vc_responsive">
				<div class="grid-row">					
						<!-- philosophy -->
						<section>	
							<div class="widget-title">Lesão cartilaginosa do joelho: saiba como é o tratamento e recuperação</div>
							
							<div class="wpb_text_column wpb_content_element">
								<div class="wpb_wrapper">			
									<img src="pic/photo-tour-1.jpg" width="340" height="180" alt="" class="alignleft">
									<p>A cartilagem é um tecido que reveste as articulações do corpo e tem a função básica de absorver e melhor distribuir as cargas aplicadas. Isso ocorre devido a seu alto potencial de deformação plástica e por propriedades que auxiliam na "lubrificação" articular, também conhecido como líquido sinovial. É rico em fibras de colágeno tipo II e é dividida em quatro camadas de células, denominadas condrócitos, que vão desde a superfície articular até o osso. Por isso, vamos falar sobre a lesão na cartilagem do joelho.</p>
								<p>Sabe-se que a cartilagem articular lesada é de potencial de cicatrização muito limitado. Isso se deve às propriedades do tecido cartilaginoso que, ao contrário da maioria dos tecidos do corpo, possui pouquíssimas células, não possui vasos sanguíneos (avascularidade), é aneural, ou seja, não possui terminações nervosas e é riquíssimo em água. Assim, uma vez lesada, a reação inflamatória é muito pequena e a possibilidade de reparo, quase nula.</p>
								</div>
							</div>
						</section>
						<!--/ philosophy -->
						
				</div>
				<div class="grid-row">	
					<!-- Disqus -->
					<div id="disqus_thread"></div>
					<script type="text/javascript">
					/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
					var disqus_shortname = 'guiasaudeevida'; // required: replace example with your forum shortname
					
					/* * * DON'T EDIT BELOW THIS LINE * * */
					(function() {
					    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
					    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
					    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
					})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	    				<!-- Disqus -->
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