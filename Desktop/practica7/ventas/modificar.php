<?php 
include("../menu.php");
require('conexcion.php');
$id=$_GET['id'];

$query="SELECT * from ventas where id_ventas=$id";

$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();

$query="SELECT * FROM productos";
$comboproductos=$mysqli->query($query);

 ?>

<div class="container">
	<div class="col-md-4">
		<h3>Formulario de Modificacion</h3>
		<form role="form" action="edit.php" method="post">
		<input	type="hidden" name="id" id="id" value="<?php echo $id;?>">
			<div class="form-group">  
				<label for="fecha"> FECHA:</label>
				<input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo $row['fecha'];?>">
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
				<input type="text" class="form-control" placeholder="Introduce cantidad"  name="cantidad" id="cantidad" value="<?php echo $row['cantidad'];?>">
			</div>
			<!--<div class="form-group">
				<label for="fecha"> TOTAL:</label>
				<input type="text" class="form-control" placeholder="Introduce total" name="total" id="total" value="<?php echo $row['total'];?>" disabled>
			</div>-->
			
				<input type="hidden" name="id_usuario" id="id_usuario" class="form-control" value="<?php echo $row['id_usuario'];?>"><br>
			
			<div class="form-group">
				<input type="submit" name="Enviar">
			</div>
		</form>

	</div>
</div>
</body>
</html>




 