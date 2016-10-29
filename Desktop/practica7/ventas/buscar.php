<?php 
require('conexcion.php');
$query="SELECT id_usuario,nombre,paterno, materno,ci,cel, correo FROM usuarios";
$resultado=$mysqli->query($query);



 ?>


 <form action="buscar.php" method="get"> 
 <input type="text" name="palabra" value="<?php echo ($_GET["palabra"]); ?>"/>
 <input type="sumit" name="buscador" value="buscar" />
 <form>
<?php if ($_GET['buscar'])
{
	
$buscar=$_GET['palabra'];
if (empty($buscar))
 {

echo "no se ha ingresado nunguna palabra";

}
else
{
	
$sql="SELECT*from usuarios where id_usuario like'%$buscar%'":
$result=mysql_query($sql,$connect);
$total=mysql_fech_array($re)

}
}




 ?>
	



 </form>