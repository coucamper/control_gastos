
<?php 
require("../models/header.php"); ?>

<section class="principal" id="principal"> <!-- contenedor -->

<!-- menu lateral -->
<?php require("../controllers/main_menu.php"); ?>

<!-- end menu lateral -->

<section class="viewer">

<article class="balance_tabs">
		<h4 class="t-center">Seguros del hogar</h4>
		<div class="t-center f-size-16">
			<div class="v-pad-s">
				<i class="fas fa-building i-size_4_rem"></i>
			</div>
			<div>
				<h3 class="inline-block">Ingresos</h3>
				<p class="inline-block"><b>1.080 €</b></p>
				<span>  &nbsp; / &nbsp; </span>
				<h3 class="inline-block">Gastos</h3>
				<p class="inline-block"><b>- 890 €</b></p>
			</div>
		</div>
</article>


<article class="balance_tabs">
		<h4 class="t-center">Seguros de salud</h4>
		<div class="t-center f-size-16">
			<div>
				<div class="v-pad-s">
				<i class="fas fa-clinic-medical i-size_4_rem"></i>
				</div>
				<h3 class="inline-block">Ahorro del mes</h3>
				<p class="inline-block"><b>190 €</b></p>
			</div>
		</div>
</article>


<article class="balance_tabs">
		<h4 class="t-center">Seguros de vehículos</h4>
		<div class="t-center f-size-16">
			<div class="v-pad-s">
				<i class="fas fa-car i-size_4_rem"></i>
			</div>
			<h3 class="inline-block">Incremento ahorro</h3>
			<p class="inline-block"> <b>1.220 €</b></p>
		</div>
</article>


<section id="data_input">
	<div class="blocked">
		<h4>Añadir poliza:</h4>
		<form action="/control_gastos/resources/templates/mvc/views/hello_kitty.php" id="hogar_form" class="g-pad-xxs">
			<div class="f_input p-r-xs"><a href="#"><i class="fas fa-plus-square icon_color i-size_1-2_rem" id="add_concept"></i></a></div>
			<div class="f_input p-r-xs">Concepto: </div>
			<div class="f_input p-r-xs"><input type="text" size="70" placeholder=" Introducir concepto"></div>
			<div class="f_input p-r-xs">Importe: </div>
			<div class="f_input p-r-xs"><input type="text" placeholder=" Introducir importe"> € </div>
			<div class="f_input p-r-xs">Tipo: </div>
				<select>
					<option value="Seleccionar" disabled selected>Seleccionar</option>
					<option value="Hogar">Hogar</option>
					<option value="Salud">Salud</option>
					<option value="Vehiculos">Vehiculo</option>
					<option value="tecnología">Tecnología</option>
					<option value="otros">Otros</option>
				</select>
		</form>
	</div>		
</section>

<section class="lista_contable">
	<article class="listado_movimientos">
		<table class="listado_mov_contables">
			<tr>
				<th>fecha</th>
				<th>Concepto</th>
				<th>Valor</th>
				<th>Saldo</th>
			</tr>
			<tr>
				<td>30/09/2019</td>
				<td>Compra carrefour express</td>
				<td>-15.43 €</td>
				<td>-985 €</td>
			</tr>
						<tr>
				<td>30/09/2019</td>
				<td>Compra La plaza de DIA</td>
				<td>-20.88 €</td>
				<td>-985 €</td>
			</tr>
						<tr>
				<td>30/09/2019</td>
				<td>Compra Optica Contrueces</td>
				<td>-90,00 €</td>
				<td>-890 €</td>
			</tr>
						<tr>
				<td>30/09/2019</td>
				<td>Compra carrefour express</td>
				<td>-15.43 €</td>
				<td>-985 €</td>
			</tr>
			<tr>
				<td>30/09/2019</td>
				<td>Compra carrefour express</td>
				<td>-15.43 €</td>
				<td>-985 €</td>
			</tr>
						<tr>
				<td>30/09/2019</td>
				<td>Compra carrefour express</td>
				<td>-15.43 €</td>
				<td>-985 €</td>
			</tr>
						<tr>
				<td>30/09/2019</td>
				<td>Compra carrefour express</td>
				<td>-15.43 €</td>
				<td>-985 €</td>
			</tr>
						<tr>
				<td>30/09/2019</td>
				<td>Compra carrefour express</td>
				<td>-15.43 €</td>
				<td>-985 €</td>
			</tr>
						<tr>
				<td>30/09/2019</td>
				<td>Compra carrefour express</td>
				<td>-15.43 €</td>
				<td>-985 €</td>
			</tr>
		</table>
		<ul class="buscar_movimientos">
			<li><i class="material-icons">search</i><a href="#">Filtar fechas</a></li>
			<li><i class="material-icons">search</i><a href="#">Buscar movimientos</a></li>
			<li><i class="material-icons">search</i><a href="#">Busqueda condicional</a></li>
		</ul>
	</article>
	<section class="edit_contable"></section>
</section>




</section>

<?php require("../models/footer.php"); ?>



<?
require("footer.php");
?>
