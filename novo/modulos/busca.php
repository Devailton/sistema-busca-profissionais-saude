<!-- quick search -->
<form id="quick-search" class="quick-search">
	<fieldset>
		<legend>Buscar:</legend>
		
		<input type="text" placeholder="Buscar por nome" name="nome">
						
		<select name="ramo_atividade">
			<option value="0">Ramo de atividade</option>
			<option value="1">Profissionais da sa&uacute;de</option>
			<option value="2">Cl&iacute;nicas</option>
			<option value="3">Laborat&oacute;rios</option>
			<option value="4">Academias</option>
			<option value="5">&Oacute;ticas</option>
		</select>
	
		<select name="especialidade">
			<option value="0">Especialidade</option>
			<option value="1">Odontologia</option>
			<option value="2">Dermatologista</option>
			<option value="3">Neorologista</option>
			<option value="4">Cirurgi&atilde;o</option>
		</select>
		
		<select name="plano">
			<option value="0">Plano</option>
			<option value="1">Unimed</option>
			<option value="2">Plamuv</option>
			<option value="3">Agros</option>
			<option value="4">Amil</option>
			<option value="5">Coopevest</option>
		</select>
				
		<button type="submit">Buscar</button>
		<div class="switcher">
			<button id="quick-search-switcher" type="button">Buscar</button>
		</div>
	</fieldset>				
</form>
<!--/ quick search -->