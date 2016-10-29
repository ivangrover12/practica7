<?php 
include("../menu.php");
require('conexcion.php');
$query="SELECT * FROM productos";
$comboproductos=$mysqli->query($query);
?>
<div class="container">
	<div class="col-md-4">
		<center><h1>REGISTRO DE VENTA</h1></center>
		<form role="form" action="grabar_usuario.php" method="post">
		<input	type="hidden" name="id" id="id" value="<?php echo $id;?>">
			<div class="form-group">  
				<label for="fecha"> FECHA:</label>
				<input type="date" name="fecha" id="fecha" class="form-control" value="">
			</div>
			<div class="form-group">
				<label for="fecha"> PRODUCTO:</label>
				<select name="id_producto" id="id_producto" class="form-control">
				<option value="">Seleccione el producto</option>
				<?php
					while($fila=$comboproductos->fetch_assoc())
					{
				?>
					
					<option value="<?php echo $fila['id_producto'];?>"><?php echo $fila['descripcion'];?></option>
				<?php }	?>
				</select>
			</div>
			<div class="form-group">
				<label for="fecha"> CANTIDAD:</label>
				<input type="text" class="form-control" placeholder="Introduce cantidad"  name="cantidad" id="cantidad" value="">
			</div>
			<!--<div class="form-group">
				<label for="fecha"> TOTAL:</label>
				<input type="text" class="form-control" placeholder="Introduce total" name="total" id="total" value="">
			</div>-->
			
				<input type="hidden" name="id_usuario" id="id_usuario" class="form-control" value="1"><br>
			
			<div class="form-group">
				<input type="submit" name="Enviar">
			</div>
		</form>

	</div>
</div>