<html>
<head>
	<title></title>
	<?php
		session_start();
		//recibe el etodo y lo guarda en $pelicula.
		$pelicula=$_POST['pelicula'];


		$conexion=mysqli_connect("localhost","root","","quilmovie") or
	    die("Problemas con la conexión");

		$registros=mysqli_query($conexion,"SELECT * FROM peliculas WHERE nomP LIKE '%$pelicula%'") or
	  	
	  	die("Problemas en el select:".mysqli_error($conexion));
?>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="view/css/bootstrap.min.css">
		<link rel="stylesheet" href="view/css/style.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="view/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="view/js/bootstrap.min.js"></script>
		<meta charset="utf-8">
	</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">QuilMovies</a>
        </div>
        
        <div id="navbar" class="collapse navbar-collapse">
          <div class="navbar-form navbar-right">
            <ul class="nav navbar-nav navbar-right">
              <li>
                <h5 class="text-center" style="color:white;"><?php echo "Holis ".$_SESSION["user"]."!</br>";?>
                <span class="label label-danger"><?php echo " <a href='destroySession.php'  style='color:black'>cerrar session</a>";?></span></h5>
              </li>
            </ul>
            <form class="navbar-form navbar-right" role="search" method="POST" action="recorrido_peli.php">
              <div class="form-group">
                <input type="text" class="form-control" name="pelicula" placeholder="Busque peliculas!..">
              </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
          </div>
        </div><!--/.nav-collapse -->
    </nav>


<div class="container">
    <center>
    <?php
  	// hace un recorrido
  	if ($reg=mysqli_fetch_array($registros)) {
  		// guarda en una variable img la ID PELICULA	
  		$img=$reg['id_pelicula'];
  		//Imprime todo de la base de datos
		?>
			<div class="row">
				<div class="col-md-6">

		  		<?php
		  		echo "<strong class='lead'>Nombre:</strong>".$reg['nomP']."<br>";
		  		echo "<strong class='lead'>Descripcion:</strong>".$reg['descP']."<br>";
		  		echo "<strong class='lead'>Genero:</strong>".$reg['genereP']."<br>";
		  		echo "<strong class='lead'>Año:</strong>".$reg['anioP']."<br>";
		  		//trae la imagen de la idPelicula de la carpeta IMG
		  		?>
	  		</div>
 	 		<div class="col-sd-6">
		
		  		<?php

		  		if($reg['id_pelicula']==$img){
		  			echo "<img src='img/".$img.".jpg' height='320' width='240' /><br><br><br><br>";
		  		}
		  		?>
		  	
		  		</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					
				  	<div class="embed-responsive embed-responsive-16by9">
				  	<?php
			  		echo "VIDEO:".$reg['url']."";
			  		echo "</br>";
			  		echo " <a href='index.php'>VOLVER</a></br>";
			  		?>
			  		</div>
			  	</div>
			</div>
  			<?php
			  	}else{
					echo "Esa Pelicula no se encuentra disponible.";
				}
				//Cierra conecxion de la base.
				mysqli_close($conexion);

			?>
		</center>
	</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="view/js/bootstrap.min.js"></script>
</body>
</html>