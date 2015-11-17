<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$email=$_POST['Email'];


$localhost="localhost";
$user="root";
$pass="";
$dataBase="quilmovie";
$table="usuario";

// Creando Conexion
$conn = new mysqli($localhost, $user, $pass, $dataBase);
// Checkea Conexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<!DOCTYPE <html>
<head>
	<title></title>
		<title>Login a QUILMOVIES</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="view/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="view/css/bootstrap-theme.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="view/js/bootstrap.min.js"></script>
	<meta charset="utf-8">

</head>
<body>
	 	<div class="container">
		<div class="row" style="">
		<div class="col-xs-12 col-md-4 col-lg-4 " ></div>
		<div class="col-xs-12 col-md-4 ">
			<center>
				<?php
				$insert = "INSERT INTO usuario (usuario, pass, mail)
				VALUES ('$usuario', '$password', '$email')";

				if ($conn->query($insert) === TRUE) {
				    echo "<h1>Se a creado tu cuenta ".$usuario."</h1>";
				    echo "<h1>Ahora debes <a href='logueate.php'>loguearte</a><br></h1>";
				} else {
				    echo "Error al guardar: " . $insert . "<br>" . $conn->error;
				}

				//Cierra conexion
				$conn->close();

				?>
			</center>
		</div>
		</div>
		<div class="col-xs-6 col-md-4"><div id="fb-root"></div>
				</div>
</body>
</html>

