  
<?php 
include("../admin.php"); 
require('conexcion.php');
$query="SELECT
productos.descripcion,
productos.costo_unitario,
productos.cantidad,
categoria.descripcion as nombre_categoria,
ventas.id_ventas,
ventas.fecha,
ventas.id_producto,
ventas.cantidad as cantidad_venta,
ventas.total,
ventas.id_usuario
FROM
ventas
INNER JOIN productos ON productos.id_producto = ventas.id_producto
INNER JOIN categoria ON categoria.id_categoria = productos.id_categoria";
$resultado=$mysqli->query($query);

 ?>  
<div class="container">
	<div class="col-md-8">
		<CENTER><h4><I><B>REGISTRO DE VENTAS</B> </I> </h4></CENTER>
		<a class="btn btn-danger" href="nuevo.php" role="button">NUEVA VENTA</a>
		 <table class="table table-bordered">
			<thead>
				<tr>
					<td><b>NUMERO</b> </td>
					<td><b>FECHA VENDIDA</b> </td>
					<td><b>PRODUCTO</b> </td>
					<td><b>CATEGORIA</b> </td>
					<td><b>CANTIDAD VENTA</b> </td>
					<td><b>PRECIO UNITARIO</b> </td>
					<td><b>TOTAL</b> </td>
					
					<TH COLSPAN="2"><B><center>ACCION</center></B></TH>
												
				</tr>
			</thead>
			<tbody>
			
				<?php
				$suma=0;
				while($row=$resultado->fetch_assoc()){ 
				$total=$row['cantidad_venta']*$row['costo_unitario'];
				$suma=$suma+$total;
				?>
				
				<tr>

				<td><?php echo $row['id_ventas']; ?> 	</td>
				<td><?php echo $row['fecha']; ?></td>
				<td><?php echo $row['descripcion']; ?></td>
				<td><?php echo $row['nombre_categoria']; ?></td>
				<td><?php echo $row['cantidad_venta']; ?></td>
				<td><?php echo $row['costo_unitario']; ?></td>				
				<td><?php echo $total; ?></td>
				
				<td><a class="btn btn-success" href="modificar.php?id=<?php echo $row['id_ventas'];?>" role="button">Modificar</a> </td>
				<td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $row['id_ventas'];?>" role="button">Eliminar</a> </td>
				</tr>
				<?php } ?>
			
				<tr>
				<td colspan="6"><center>TOTAL VENTA</center></td>
				<td><?php echo $suma; ?> 	</td>	
				</tr>	
</tbody>			
		</table>
	</div>
</div>
 