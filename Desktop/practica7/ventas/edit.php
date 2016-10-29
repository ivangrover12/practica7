<?php 
require('conexcion.php');

$id=$_POST['id'];
$nombresssss=$_POST['fecha'];
$paternosss=$_POST['id_producto'];
$materno=$_POST['cantidad'];
$ci=0;//$_POST['total'];
$ext=$_POST['id_usuario'];




$query=" UPDATE ventas set fecha='$nombresssss',id_producto='$paternosss',cantidad='$materno',total='$ci',id_usuario='$ext'  where id_ventas='$id'";


$resultado=$mysqli->query($query);


if ($resultado) {
	
	echo"<script>	
		window.alert('modificado exitosamente');
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