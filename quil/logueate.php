<!DOCTYPE html>
<html>
<head>
	<title>Login a QUILMOVIES</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="view/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="view/css/bootstrap-theme.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="view/css/style.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="view/js/bootstrap.min.js"></script>
	<meta charset="utf-8">

</head>
<body >



 	<div class="container">
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
		<div class="row" style="">
		<div class="col-xs-12 col-md-4 col-lg-4 " ></div>
		<div class="col-xs-12 col-md-4 margin2">
			<h1 class="text-center" >QUILMOVIES <span class="glyphicon glyphicon-film" aria-hidden="true"></span></h1>
			<form method="POST" action="login.php" name="formulario">
				<div class="form-group">
					<p ><input placeholder="Usuario" type="text" name="user" class="form-control" id="exampleInputEmail1" /></p>
					<p><input placeholder="Contraseña" type="password" name="pass" class="form-control" id="exampleInputEmail1"/></p>
					<input type="submit" class="btn btn-primary" value="Entrar">&nbsp;&nbsp;&nbsp;&nbsp;<a href="registrar_usuario.php">Registrarte</a>
				</div>
			</form>
			</div>
		</div>
		<div class="col-xs-6 col-md-4"><div id="fb-root"></div>
				</div>
	</div>
	</div>


<footer>

<center>
	<div class="col-sm-12 margin2">
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
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
</center>



</footer>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="view/js/bootstrap.min.js"></script>
</body>
</html>
