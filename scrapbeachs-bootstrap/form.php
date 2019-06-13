		<div style="background-color: #3f51b5" >
		<h1 class="display-4"><b>Navegantes</b></h1>
		<h2 class="lead">Praia de Navegantes</h2>		
				<fieldset>
					<legend class="lead">Ponto de coleta:</legend>
					<select name="Ponto" id="PontoID">
  						<option value="Ponto 02">Ponto 02</option>
						<option value="Ponto 03">Ponto 03</option>
						<option value="Ponto 04">Ponto 04</option>
						<option value="Ponto 05">Ponto 05</option>
					</select>
					<button type="button" class="btn btn-large btn-primary" onclick="window.location.reload();">OK</button>
				</fieldset>
			</div>
			<div style="background-color: #fff" class="container">
				<div class="row">
					<div class="col">	
						<canvas id="GraficoA" width="400" height="400"></canvas>
					</div>
					<div class="col">
						<canvas id="GraficoB" width="400" height="400"></canvas>
					</div>
				</div>
			</div>
