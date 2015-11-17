<?php
session_start();
?>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if(isset($_SESSION['user'])){
?>
<form method="POST" action="recorrido_peli.php">
	<input type="text" name="pelicula" placeholder="Buscar Pelicula... ">
	<input type="submit" value="Buscar">
</form>
<?php
		
	}else{
		header("Location: index.php");
		echo "<a href='index.html'>loguearte</a>";
	}

?>
</body>
</html>
