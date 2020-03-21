
<?php 
require("../models/header.php"); ?>

<section class="principal" id="principal"> <!-- contenedor -->

<!-- menu lateral -->
<?php require("../controllers/main_menu.php"); ?>

<!-- end menu lateral -->

<section class="viewer">

<article class="food_tabs">
		<h4 class="t-center">Frutas y verduras</h4>
		<div class="t-center f-size-16">
			<div class="v-pad-s">
				<i class="fas fa-carrot i-size_4_rem"></i>
			</div>
			<div>
				<h3 class="inline-block">Total </h3>
				<p class="inline-block"><b>60,58 €</b></p>
				<span>  &nbsp; / &nbsp; </span>
				<h3 class="inline-block">% Alimentación </h3>
				<p class="inline-block"><b>15 </b></p>
			</div>
		</div>
</article>


<article class="food_tabs">
		<h4 class="t-center">Frescos</h4>
		<div class="t-center f-size-16">
			<div>
				<div class="v-pad-s">
				<i class="fas fa-fish i-size_4_rem"></i>
				</div>
			<div>
				<h3 class="inline-block">Total</h3>
				<p class="inline-block"><b>89,90 €</b></p>
				<span>  &nbsp; / &nbsp; </span>
				<h3 class="inline-block">% Alimentación</h3>
				<p class="inline-block"><b>25</b></p>
			</div>
			</div>
		</div>
</article>


<article class="food_tabs">
		<h4 class="t-center">Procesados </h4>
		<div class="t-center f-size-16">
			<div class="v-pad-s">
				<i class="fas fa-pizza-slice i-size_4_rem"></i>
			</div>
			<div>
				<h3 class="inline-block">Total</h3>
				<p class="inline-block"><b>36,90 €</b></p>
				<span>  &nbsp; / &nbsp; </span>
				<h3 class="inline-block">% Alimentación</h3>
				<p class="inline-block"><b> 12.5</b></p>
			</div>
		</div>
</article>


<article class="food_tabs">
		<h4 class="t-center">Bebidas </h4>
		<div class="t-center f-size-16">
			<div class="v-pad-s">
				<i class="fas fa-wine-bottle i-size_4_rem"></i>
			</div>
			<div>
				<h3 class="inline-block">Total </h3>
				<p class="inline-block"><b>55 €</b></p>
				<span>  &nbsp; / &nbsp; </span>
				<h3 class="inline-block">% Alimentación </h3>
				<p class="inline-block"><b>22 </b></p>
			</div>
		</div>
</article>


<article class="food_tabs">
		<h4 class="t-center">Postres </h4>
		<div class="t-center f-size-16">
			<div>
				<div class="v-pad-s">
				<i class="fas fa-cheese i-size_4_rem"></i>
				</div>
			<div>
				<h3 class="inline-block">Total</h3>
				<p class="inline-block"><b>5,49 €</b></p>
				<span>  &nbsp; / &nbsp; </span>
				<h3 class="inline-block">% Alimentación</h3>
				<p class="inline-block"><b>2,5</b></p>
			</div>
			</div>
		</div>
</article>


<article class="food_tabs">
		<h4 class="t-center">Desayuno </h4>
		<div class="t-center f-size-16">
			<div class="v-pad-s">
				<i class="fas fa-coffee i-size_4_rem"></i>
			</div>
			<div>
				<h3 class="inline-block">Total</h3>
				<p class="inline-block"><b>12,95 €</b></p>
				<span>  &nbsp; / &nbsp; </span>
				<h3 class="inline-block">% Alimentación</h3>
				<p class="inline-block"><b>8 </b></p>
			</div>
		</div>
</article>


<section id="data_input">
	<div class="blocked">
		<h4>Añadir compra: </h4>
		<form action="/control_gastos/resources/templates/mvc/views/hello_kitty.php" id="hogar_form" class="g-pad-xxs">
			<div class="f_input p-r-xs"><a href="#"><i class="fas fa-plus-square icon_color i-size_1-2_rem" id="add_concept"></i></a></div>
			<div class="f_input p-r-xs">Concepto: </div>
			<div class="f_input p-r-xs"><input type="text" size="70" placeholder=" Introducir concepto"></div>
			<div class="f_input p-r-xs">Importe: </div>
			<div class="f_input p-r-xs"><input type="text" placeholder=" Introducir importe"> € </div>
			<div class="f_input p-r-xs">Tipo: </div>
				<select>
					<option value="Seleccionar" disabled selected>Seleccionar</option>
					<option value="Hogar">Frutas y verduras </option>
					<option value="Salud">Frescos </option>
					<option value="Vehiculos">Procesados </option>
					<option value="tecnología">Bebídas </option>
					<option value="otros">Postres </option>
					<option value="otros">Desayuno </option>

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
