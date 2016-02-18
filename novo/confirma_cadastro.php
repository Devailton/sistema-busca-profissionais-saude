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
					<h1>Confirmar dados</h1>
					
					<nav class="bread-crumbs">
						<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="cadastro.php">Cadastro</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">Confirmar dosdados</a>
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content">
									
				<div class="grid-row">
					<div class="grid-col grid-col-9">
						<article>	
							<div class="widget-title">Confirmação dos dados</div>
							
							<p class="capitalized">Parabéns, você esta a um passo para associar ao portal, seus dados estarão sujeitos a aprovação, nossa equipe irá analisar as informações passadas e entrará em contato por email ou telefone. Assim que o usuário for liberado, você poderá completar seu cadastro com as informações pendentes. Ficamos muito felizes por fazer parte do Guia Sáude e Vida.</p>
							
						</article>
					</div>
				</div>
				
				<div class="grid-row">
					<div class="grid-col grid-col-3">
						<!-- Grafico -->
						<section class="widget widget-departments">
							<label>Dados Pessoais</label>							
							<div class="chart-circle" data-percent="90" data-color="#008fd5"></div>
						</section>
						<!--/ Grafico -->
					</div>
					
					<div class="grid-col grid-col-3">
						<!-- Grafico -->
						<section class="widget widget-sevices">
							<label>Dados Comerciais</label>
							<div class="chart-circle" data-percent="85" data-color="#008fd5"></div>
						</section>
						<!--/ Grafico -->
					</div>
					
					<div class="grid-col grid-col-3">
						<!-- Grafico -->
						<section class="widget widget-appointment">
							<label>Dados Complementares</label>
							<div class="chart-circle" data-percent="100" data-color="#008fd5"></div>
						</section>
						<!--/ Grafico -->	
					</div>
				</div>
								
				<div class="grid-row">
					<div class="grid-col grid-col-9">
						<!-- feedback -->
						<article class="feedback">	

							<form action="http://html.creaws.com/clinico/php/contact-send.php" id="cadastroForm">
								<fieldset>
									<div class="widget-title">Plano contratado</div>
									
									<div class="clearfix">
										<div class="input">
											<label>Plano: </label>
											<input type="text" name="complemento" placeholder="Ex.: Plano Diamante " value="Plano Diamante" disabled>
										</div>
										<div class="input">
											<label>Valor: </label>
											<input type="text" name="complemento" placeholder="Ex.: R$ 80,00 " value="R$ 80,00" disabled>
										</div>
									</div>
									
									<div class="widget-title">Personalização de banner</div>
									
									<div class="clearfix">
										<div class="input">
											<label>Personalizar banner: </label>
											<select name="personalizacao" disabled>
												<option value="nao">Não</option>
												<option value="sim">Sim</option>
											</select>
										</div>
										<div class="input">
											<label>Valor: </label>
											<input type="text" name="valor" placeholder="Ex.: R$ 20,00 " value="R$ 0,00" disabled>
										</div>
									</div>
									
									<div class="widget-title">Dados Pessoais</div>
									
									<div class="clearfix">
										<div class="input">
											<label>Apresentação: *</label>
											<input type="text" name="nome" placeholder="Ex.: Dr., Dra., Ms., Sr. e etc " disabled>
										</div>
										<div class="input">
											<label>Nome: *</label>
											<input type="text" name="email" placeholder="Ex.: Luís Felipe da Silveira Fontes" disabled>
										</div>
									</div>
									<div class="clearfix">
										<div class="input">
											<label>CRM: </label>
											<input type="text" name="crm" placeholder="Ex.: 25230-2" disabled>
										</div>
										<div class="input">
											<label>Email: *</label>
											<input type="text" name="email" placeholder="Ex.: luisfelipe@gmail.com" disabled>
										</div>
									</div>
									<div class="clearfix">
										<div class="input">
											<label>Senha: *</label>
											<input type="password" name="senha" placeholder="Ex.: &#8226;&#8226;&#8226;&#8226;&#8226;&#8226;" disabled>
										</div>
										<div class="input">
											<label>Repetir senha: *</label>
											<input type="password" name="senha2" placeholder="Ex.: &#8226;&#8226;&#8226;&#8226;&#8226;&#8226;" disabled>
										</div>
									</div>
									<div class="clearfix">
										<div class="input">
											<label>Telefone 1: *</label>
											<input type="text" name="tel1" placeholder="Ex.: (31) 0000-0000" disabled>
										</div>
										<div class="input">
											<label>Telefone 2:</label>
											<input type="text" name="tel2" placeholder="Ex.: (31) 0000-0000" disabled>
										</div>
									</div>

									<div class="widget-title">Dados Comerciais</div>
									
									<div class="clearfix">
										<div class="input2">
											<label>Endereço: *</label>
											<input type="text" name="endereco" placeholder="Ex.: Rua Adalberto Ferreira Mercantil" disabled>
										</div>
									</div>
									<div class="clearfix">
										<div class="input">
											<label>Número: </label>
											<input type="text" name="complemento" placeholder="Ex.: 402 " disabled>
										</div>
										<div class="input">
											<label>Complemento: </label>
											<input type="text" name="complemento" placeholder="Ex.: Edifício Souza Cruz , Sala 301 " disabled>
										</div>
									</div>
									<div class="clearfix">
										<div class="input">
											<label>Bairro: *</label>
											<input type="text" name="bairro" placeholder="Ex.: Monte Castelo" disabled>
										</div>
										<div class="input">
											<label>Telefone Comercial: </label>
											<input type="text" name="tel3" placeholder="Ex.: (31) 0000-0000" disabled>
										</div>
									</div>
									<div class="clearfix">
										<div class="input">
											<label>Cidade: *</label>
											<input type="text" name="cidade" placeholder="Ex.: Viçosa" disabled>
										</div>
										<div class="input">
											<label>Estado: *</label>
											<select name="estado" disabled>
								                        	<option value=""> - Escolha um estado - </option>                  
								                        	<option value="AC">ACRE</option>
								                        	<option value="AL">ALAGOAS</option>
								                        	<option value="AM">AMAZONAS</option>
								                        	<option value="AP">AMAP&Aacute;</option>
								                        	<option value="BA">BAHIA</option>
								                        	<option value="CE">CEAR&Aacute;</option>
								                        	<option value="DF">DISTRITO FEDERAL</option>
								                        	<option value="ES">ESP&Iacute;RITO SANTO</option>
								                        	<option value="GO">GOI&Aacute;S</option>
								                        	<option value="MA">MARANH&Atilde;O</option>
								                        	<option value="MT">MATO GROSSO</option>
								                        	<option value="MS">MATO GROSSO DO SUL</option>
								                        	<option value="MG">MINAS GERAIS</option>
								                        	<option value="PA">PAR&Aacute;</option>
								                        	<option value="PB">PARA&Iacute;BA</option>
								                        	<option value="PR">PARAN&Aacute;</option>
								                        	<option value="PE">PERNAMBUCO</option>
								                        	<option value="PI">PIAU&Iacute;</option>
								                        	<option value="RJ">RIO DE JANEIRO</option>
								                        	<option value="RN">RIO GRANDE DO NORTE</option>
								                        	<option value="RO">ROND&Ocirc;NIA</option>
								                        	<option value="RS">RIO GRANDE DO SUL</option>
								                        	<option value="RR">RORAIMA</option>
								                        	<option value="SC">SANTA CATARINA</option>
								                        	<option value="SE">SERGIPE</option>
								                        	<option value="SP">S&Atilde;O PAULO</option>
									                        <option value="TO">TOCANTINS</option>
								                    	</select>
										</div>
									</div>
									
									<div class="widget-title">Dados Complementares</div>
									
									<div class="clearfix">
										<div class="input">
											<label>Ramo de atividade: *</label>
											<select name="ramo_atividade" disabled>
												<option value="0">- Escolha um ramo de atividade -</option>
												<option value="1">Profissionais da saúde</option>
												<option value="2">Clínicas</option>
												<option value="3">Laboratórios</option>
												<option value="4">Academias</option>
												<option value="5">Óticas</option>
												<option value="6">Hospitais</option>
												<option value="6">Comercial</option>
												<option value="6">Cosméticos</option>
											</select>
										</div>
										<div class="input">
											<label>Atendimento 24h: *</label>
											<select name="ramo_atividade" disabled>
												<option value="0">- Escolha uma opção -</option>
												<option value="sim">Sim</option>
												<option value="nao">Não</option>
											</select>
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input">
											<label>Atendimento domiciliar: *</label>
											<select name="ramo_atividade" disabled>
												<option value="0">- Escolha uma opção -</option>
												<option value="sim">Sim</option>
												<option value="nao">Não</option>
											</select>
										</div>
										<div class="input">
											<label>Acessibilidade do ambiente de trabalho: *</label>
											<select name="ramo_atividade" disabled>
												<option value="0">- Escolha uma opção -</option>
												<option value="sim">Sim</option>
												<option value="nao">Não</option>
											</select>
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input">
											<label>Local de formação: *</label>
											<input type="text" name="local_formacao" placeholder="Ex.: UFV" disabled>
										</div>
										<div class="input">
											<label>Ano de formação: *</label>
											<input type="text" name="ano_formacao" placeholder="Ex.: 2012" disabled>
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
											<label>Especialidades: *</label>
											
											<input type="checkbox" checked disabled>
											<label>Fisioterapia</label>
											
											<input type="checkbox" checked disabled>
											<label>Personal Trainer</label>
											
											<input type="checkbox" disabled>
											<label>Cardiologista</label>
											
											<input type="checkbox" checked disabled>
											<label>Ortopedista</label>
											
											<input type="checkbox" disabled>
											<label>Cirurgiã Dentista</label>
											
											<input type="checkbox" disabled>
											<label>Dentista</label>
											
											<input type="checkbox" disabled checked>
											<label>Pediatra</label>
											
											<input type="checkbox" disabled>
											<label>Enfermegem</label>
											
											<input type="checkbox" disabled>
											<label>Fraldas</label>
											
											<input type="checkbox" disabled>
											<label>Roupas e acessórios brancos</label>
											
											<input type="checkbox" disabled>
											<label>Aculputura</label>
											
											<input type="checkbox" disabled>
											<label>Perfumaria</label>
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
											<label>Convênios: *</label>
											
											<input type="checkbox" disabled>
											<label>Unimed</label>
											
											<input type="checkbox" disabled>
											<label>Plamuv</label>
											
											<input type="checkbox" disabled>
											<label>Imas</label>
											
											<input type="checkbox" disabled>
											<label>Agros</label>
											
											<input type="checkbox" disabled>
											<label>Amil</label>
											
											<input type="checkbox" disabled>
											<label>Bradesco</label>
											
											<input type="checkbox" disabled>
											<label>Plano Dente</label>
											
											<input type="checkbox" disabled>
											<label>Assimed</label>
											
											<input type="checkbox" disabled>
											<label>All Saúde</label>
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
											<label>Pagamentos: *</label>
											
											<input type="checkbox" disabled>
											<label>Master Card</label>
											
											<input type="checkbox" disabled>
											<label>Elo</label>
											
											<input type="checkbox" disabled>
											<label>Aura</label>
											
											<input type="checkbox" disabled>
											<label>Visa</label>
											
											<input type="checkbox" disabled>
											<label>Santelem</label>
											
											<input type="checkbox" disabled>
											<label>America Express</label>
											
											<input type="checkbox" disabled>
											<label>Disney Club</label>
											
											<input type="checkbox" disabled>
											<label>Maestro</label>
											
										</div>
									</div>
									
									<label>Descrição pessoal:</label>
									<textarea rows="6" name="message" disabled></textarea>
									
									<div class="clearfix captcha">
											<div class="captcha-wrapper">
												<label for="verify">Digite o c&oacute;digo:</label>
												<iframe src="php/capcha.html" class="capcha-frame" name="capcha_image_frame" marginwidth="0" marginheight="0" frameborder="0"></iframe>

												<input class="verify" type="text" id="verify" name="verify" />
											</div>
											
											<button type="submit" class="button" value="Submit">Confirmar</button>   
											<button type="button" class="wpb_button wpb_btn-alt buttonVoltar">Corrigir</button>
											
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