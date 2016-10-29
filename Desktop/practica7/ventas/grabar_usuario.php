<?php 
require('conexcion.php');//llama al archivo de la conexcion

$nombresssss=$_POST['fecha'];
$paternosss=$_POST['id_producto'];
$materno=$_POST['cantidad'];
$ci=0;//$_POST['total'];
$ext=$_POST['id_usuario'];





$query="insert into ventas(fecha,id_producto,cantidad,total,id_usuario)
 values('$nombresssss','$paternosss','$materno','$ci','$ext')";
echo "registrando...";

$resultado=$mysqli->query($query);


if ($resultado) {
	
	echo"<script>	
		window.alert('insertando exitosamente');
		location.href='index.php';
	</script>";
}else
{
echo"<script>	
		window.alert('errorrrrrrrrrrr');
		location.href='index.php';
	</script>";

}

 ?>