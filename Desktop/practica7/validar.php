<?php session_start();?>
<?php

	require("connect_db.php");

	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];



	$sql2=mysql_query("SELECT * FROM usuarios WHERE clave='$usuario'");
	if($f2=mysql_fetch_array($sql2)){
		if($clave==$f2['clave']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['usuario']=$f2['usuario'];
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
		
			echo "<script>location.href='admin.php'</script>";
		
		}
	}




	$sql=mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario'");
	if($f=mysql_fetch_array($sql)){
		if($clave==$f['clave']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['usuario']=$f2['usuario'];
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
			
			//header("Location: index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}



		


?>