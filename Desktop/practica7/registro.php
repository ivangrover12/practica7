<?php

	$usuario=$_POST['usuario'];
	$clave= $_POST['clave'];
	$rclave=$_POST['rclave'];
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];

	require("connect_db.php");
	$checkemail=mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario'");
	$check_mail=mysql_num_rows($checkemail);
		if($clave==$rclave){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el usuario, verifique sus datos");</script> ';			}
				else{
				
				//require("connect_db.php");
				mysql_query("INSERT INTO usuarios VALUES('','$usuario','$clave','$nombre','$correo')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				mysql_close($link);
			}}
			
		else{
			echo '<script language="javascript">alert("contraseña incorrecta");</script> ';
		}

	
?>