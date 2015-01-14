<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Tiket Nonton - Now Playing</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="shortcut icon" type="image/x-icon" href="ticket.ico"/>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Tiket Nonton</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
				<li class="active"><a href="#coba">Now Playing</a></li>
                <li><a href="#about">Coming Soon</a></li>
                <li><a href="#contact">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

	<!-- Breadcrumbs
	================================================== -->
	
	<ol id="breadcrumbs" class="breadcrumb">
		<li><a href="index.php">Home</a></li>
		<li class="active">Now Playing</a></li>
	</ol>
	
    <!-- Movies
	================================================== -->
	<div id="detail-wrapper">
	<h1>Now Playing</h1>
	<div class="row">
		<div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="movies/0001.jpg" alt="">
            </a>
            <h3>
                <a href="details.php">The Imitation Game</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="movies/0002.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Annie</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="movies/0003.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Penguins of Madagaskar</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
      </div>
	  <hr>
	  <div class="row">
		<div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="movies/0004.jpg" alt="">
            </a>
            <h3>
                <a href="#">Two Nights Stand</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="movies/0005.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Inside Out</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="movies/0006.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Big Hero 6</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
	</div>
        <!-- /.row -->

        <hr>
      <!-- FOOTER -->
      <footer>
        <p>&copy; 2014 Tiket Nonton &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
