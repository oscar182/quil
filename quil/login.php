<?php


$user = $_POST["user"];
$pass = $_POST["pass"];

$conexion=mysqli_connect("localhost","root","","quilmovie") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario = '$user' AND pass = '$pass'") or
  die("Problemas en el select:".mysqli_error($conexion));


if($reg=mysqli_fetch_array($registros)){
	session_start();
	$_SESSION["user"]=$user;
	header('Location: index.php');

}else{
	echo "Tu contraseña o usuario esta mal <a href='logueate.php'>volver</a></br>"; 
	echo "Si no estas registrado puedes registrarte<a href='registrar_usuario.php'>Registrar</a>";
}
?>