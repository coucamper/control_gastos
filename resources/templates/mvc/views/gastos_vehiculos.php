
<?php 
require("../models/header.php"); ?>

<section class="principal" id="principal"> <!-- contenedor -->

<!-- menu lateral -->
<?php require("../controllers/main_menu.php"); ?>

<!-- end menu lateral -->

<section class="viewer">


<article class="vehiculos_tabs">
		<h4 class="t-center">Combustible</h4>
		<div class="t-center f-size-16">
			<div class="v-pad-s">
				<i class="fas fa-gas-pump i-size_4_rem"></i>
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

<article class="vehiculos_tabs">
		<h4 class="t-center">Reparaciones</h4>
		<div class="t-center f-size-16">
			<div class="v-pad-s">
				<i class="fas fa-tools i-size_4_rem"></i>
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


<article class="vehiculos_tabs">
		<h4 class="t-center">Mejoras</h4>
		<div class="t-center f-size-16">
			<div class="v-pad-s">
				<i class="fas fa-magic i-size_4_rem"></i>
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

<article class="vehiculos_tabs">
		<h4 class="t-center">Mantenimiento</h4>
		<div class="t-center f-size-16">
			<div class="v-pad-s">
				<i class="fas fa-shower i-size_4_rem"></i>
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


	<h1 class="viewer">Aún no hay información para mostrar, añade gastos relacionados con tus vehículos.</h1>



<section id="data_input">
	<div class="blocked">
		<h4>Añadir vehículo:</h4>
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
					<option value="Salud">Trabajo</option>
					<option value="Vehiculos">Datos</option>
				</select>
		</form>
	</div>		
</section>



</section>

<?php require("../models/footer.php"); ?>



<?
require("footer.php");
?>
