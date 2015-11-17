<?php
session_start();
if(isset($_SESSION['user'])){
  }else{
    header("Location: index.php");
    echo "<a href='loguearte.php'>loguearte</a>";
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="view/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Optional theme -->
	<link rel="stylesheet" href="view/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="view/css/style.css">
	<!-- Latest compiled and minified JavaScript -->

	<meta charset="utf-8">
</head>
<body>
<nav class="navbar navbar-inverse">
      <div class="container-fluid">
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
      <div class="page-header" style="margin-top: 11px;">
        <center><h1>QUILMOVIES <br><small>Drama, acción, comedia, documentales, programas de TV: todo lo que te encanta.</small></h1></center>
      </div>
      <!-- <h1 class="lead">Bootstrap is open source. It's hosted, developed, and maintained on GitHub.</h1-->
      
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/banner/tranformers.jpg" alt="...">
            <div class="carousel-caption">

            </div>
          </div>
          <div class="item">
            <img src="img/banner/pacificrim.jpg" alt="...">
            <div class="carousel-caption">

            </div>
          </div>
          <div class="item">
            <img src="img/banner/avenger.jpg" alt="...">
            <div class="carousel-caption">
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>



  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <center>
          <h3>Puedes ver tus peliculas de donde quieras, es adaptable para cualquier dispositivo</h3>
          <img src="http://zurdesign.com/wp-content/uploads/2015/05/responsive-design-940.png" width="95%">
        </center>
      </div>
      <div class="col-md-6">
        <center>
          <h3>Todo el tiempo agregamos películas y programas nuevos. Además opciones de subtítulos y doblaje.</h3>
          <img src="http://www.netgear.com/images/Products/ConnectedEntertainment/StreamingMediaPlayers/FamilyImage/family-ntv-homescreen-photo-large.png" width="70%">
        </center>
      </div>
    </div> 
  </div>

  
</div>
<div class="row fondo">
    <div class="col-sm-4">
      <img src="img/3.jpg" alt="Sass and Less support" class="img-responsive">
      <center><h3>Amigos con derecho</h3></center>

    </div>
    <div class="col-sm-4" >
      <img src="img/1.jpg" alt="Responsive across devices" class="img-responsive">
      <center><h3>Titanic.</h3></center>
    </div>
    <div class="col-sm-4">
      <img src="img/5.jpg" alt="Components" class="img-responsive">
      <center><h3>Star Wars</h3></center>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="view/js/bootstrap.min.js"></script>


<footer class="navbar navbar-inverse" >
  <div class="container-fluid">
    <center>
      <div class="row">
        <div class="col-sm-12 margin">
          
          <!-- FACEBOOK -->
          <div id="fb-root"></div>
          <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
          fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
          <div class="fb-page" data-href="https://www.facebook.com/quilmovies" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
            <div class="fb-xfbml-parse-ignore">
              <blockquote cite="https://www.facebook.com/quilmovies">
                <a href="https://www.facebook.com/quilmovies">Quilmovies</a>
              </blockquote>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
      
      <p style="color:#D5D9F5;">Made by OscarD.F.</p>
    </center>

  </div>
</footer>



</body>
</html>