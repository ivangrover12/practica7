<?php 
$mysqli=new mysqli("localhost","root","","bd_farmacia");
if (mysqli_connect_errno()) {
	echo'conexion fallida:',mysqli_connect_error();
	exit();

}

 ?>