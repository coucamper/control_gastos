
<section id="hogar_wrap">

<article class="hogar_tabs">
		<h4 class="t-center">Gastos de vivienda (evolución anual)</h4>
		<div class="figure t-center">
			<img src="/control_gastos/public_html/img/grafica.png" alt="">
		</div>
		<div class="t-center f-size-14">
			<ul>
				<li><a href="#">Dif % mes anterior</a></li>
				<li><a href="#">Dif % trimestre anterior</a></li>
				<li><a href="#">Dif % año anterior</a></li>
			</ul>
		</div>
</article>

<article class="hogar_tabs">
		<h4 class="t-center">Gastos de suministros (evolución anual)</h4>
		<div class="figure t-center">
			<img src="/control_gastos/public_html/img/grafica2.png" alt="">
		</div>
		<div class="t-center f-size-14">
			<ul>
				<li><a href="#">Dif % mes anterior</a></li>
				<li><a href="#">Dif % trimestre anterior</a></li>
				<li><a href="#">Dif % año anterior</a></li>
			</ul>
		</div>
</article>

<article class="hogar_tabs">
		<h4 class="t-center">Gastos de mantenimiento (evolución anual)</h4>
		<div class="figure t-center">
			<img src="/control_gastos/public_html/img/grafica.png" alt="">
		</div>
		<div class="t-center f-size-14">
			<ul>
				<li><a href="#">Dif % mes anterior</a></li>
				<li><a href="#">Dif % trimestre anterior</a></li>
				<li><a href="#">Dif % año anterior</a></li>
			</ul>
		</div>
</article>

<section id="data_input">
	<div class="blocked">
		<h4>Añadir gasto:</h4>
		<form action="/control_gastos/resources/templates/mvc/views/hello_kitty.php" id="hogar_form" class="g-pad-xxs">
			<div class="f_input p-r-xs"><a href="#"><i class="fas fa-plus-square icon_color i-size_1-2_rem" id="add_concept"></i></a></div>
			<div class="f_input p-r-xs">Concepto: </div>
			<div class="f_input p-r-xs"><input type="text" size="70"></div>
			<div class="f_input p-r-xs">Importe: </div>
			<div class="f_input p-r-xs"><input type="text"> € </div>
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