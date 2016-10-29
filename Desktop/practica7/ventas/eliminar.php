<?php 
require('conexcion.php');
$id=$_GET['id'];
$query="DELETE FROM ventas WHERE id_ventas='$id'";
$resultado=$mysqli->query($query);


if ($resultado) {
	
	echo"<script>	
		window.alert('elimino exitosamente');
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
