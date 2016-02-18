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
					<h1>Quem somos</h1>
					
					<nav class="bread-crumbs">
						<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="">Informa&ccedil;&otilde;es</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="">Quem somos</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content vc_responsive">
				<div class="grid-row">					
					<div class="grid-col grid-col-9">
						
						<!-- list -->
						<section>	
							<div class="widget-title">Sobre</div>
							
							<p class="capitalized">
							Vestibulum scelerisque leo sed sem sagittis. Nunc elit dolor, feugiat in faucibus luctus, vulputate at dui.  
							Donec lacinia suscipit magna, et pulvinar tortor facilisis quis. Donec tempor erat vel scelerisque posuere. Nam elementum elit eget tellus 
							faucibus euismod. Aliquam turpis nibh, dictum eu consequat ac, facilisis eu elit.
							Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, 
							ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus. Mauris congue nec nisi sit amet malesuada. Vivamus sodales nunc 
							et pulvinar bibendum. Morbi quis erat non odio suscipit imperdiet quis quis nisl. Pellentesque imperdiet lectus vel aliquet consequat. 
							Donec commodo, tellus vel consectetur commodo, arcu magna ornare felis, et malesuada leo erat id leo. In bibendum, ipsum eu imperdiet scelerisque.
							</p><br>
							
							<div class="widget-title">Missão</div>
							
							<p class="capitalized">
							Vestibulum scelerisque leo sed sem sagittis. Nunc elit dolor, feugiat in faucibus luctus, vulputate at dui.  
							Donec lacinia suscipit magna, et pulvinar tortor facilisis quis. Donec tempor erat vel scelerisque posuere. Nam elementum elit eget tellus 
							faucibus euismod. Aliquam turpis nibh, dictum eu consequat ac, facilisis eu elit.
							Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, 
							ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus. Mauris congue nec nisi sit amet malesuada. Vivamus sodales nunc 
							et pulvinar bibendum. Morbi quis erat non odio suscipit imperdiet quis quis nisl. Pellentesque imperdiet lectus vel aliquet consequat. 
							Donec commodo, tellus vel consectetur commodo, arcu magna ornare felis, et malesuada leo erat id leo. In bibendum, ipsum eu imperdiet scelerisque.
							</p><br>
							
							<div class="widget-title">Visão</div>
							
							<p class="capitalized">
							Vestibulum scelerisque leo sed sem sagittis. Nunc elit dolor, feugiat in faucibus luctus, vulputate at dui.  
							Donec lacinia suscipit magna, et pulvinar tortor facilisis quis. Donec tempor erat vel scelerisque posuere. Nam elementum elit eget tellus 
							faucibus euismod. Aliquam turpis nibh, dictum eu consequat ac, facilisis eu elit.
							Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, 
							ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus. Mauris congue nec nisi sit amet malesuada. Vivamus sodales nunc 
							et pulvinar bibendum. Morbi quis erat non odio suscipit imperdiet quis quis nisl. Pellentesque imperdiet lectus vel aliquet consequat. 
							Donec commodo, tellus vel consectetur commodo, arcu magna ornare felis, et malesuada leo erat id leo. In bibendum, ipsum eu imperdiet scelerisque.
							</p><br>
							
						</section>
						<!--/ list -->

					</div>
					
					<div class="grid-col grid-col-3">
						<?php
							include("modulos/box-right-tre.php");
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