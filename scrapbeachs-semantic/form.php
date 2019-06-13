		<div style="background-color: #3f51b5">
		<h1><b>Navegantes</b></h1>
		<h2>Praia de Navegantes</h2>		
				<fieldset>
					<legend>Ponto de coleta:</legend>
					<select name="Ponto" id="PontoID" class="ui input">
  						<option value="Ponto 02">Ponto 02</option>
						<option value="Ponto 03">Ponto 03</option>
						<option value="Ponto 04">Ponto 04</option>
						<option value="Ponto 05">Ponto 05</option>
					</select>
					<button type="button" class="ui primary button" onclick="window.location.reload();">OK</button>
				</fieldset>
			</div>
			<div class="ui equal width grid">
				<div class="two column row">
					<div class="column">	
						<canvas id="GraficoA" width="400" height="400"></canvas>
					</div>
					<div class="column">
						<canvas id="GraficoB" width="400" height="400"></canvas>
					</div>
				</div>
			</div>
