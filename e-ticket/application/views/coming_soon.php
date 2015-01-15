<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Tiket Nonton - Coming Soon</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/ticket.ico')?>"/>
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
                <li><a href="<?php echo site_url('home');?>">Home</a></li>
				<li><a href="<?php echo site_url('Playing');?>">Now Playing</a></li>
                <li class="active"><a href="<?php echo site_url('coming_soon');?>">Coming Soon</a></li>
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
		<li class="active">Coming Soon</a></li>
	</ol>
	
	<!-- Subhead
	================================================== -->
	<div class="jumbotron subhead" id="">
		<div class="container">
			<h1>Coming Soon</h1>
		</div>
	</div>
	
    <!-- Movies
	================================================== -->
	<div id="detail-wrapper">
	<div class="row">
	<?php
		$data=1;
		foreach ($soon as $show){
		if(($data % 3) == 0) echo '<div class="row">'; ?>
			<div class="col-md-4 portfolio-item">
				<a href="<?php echo site_url('details/movieDetails/'.$show->getId()) ?>">
					<img class="img-responsive" src="<?php echo base_url('assets/movies/'.$show->getImg());?>" alt="">
				</a>
				<h3>
					<a href="#"><?php echo '<center>'.$show->getTitle();?></a>
				</h3>
            </div>
		<?php
		if(($data % 3) == 0) echo '</div> <hr>';
		$data=$data+1;
		}
		if(($data % 3) != 0) echo '</div> <hr>';?>	  
	</div>
        <!-- /.row -->
		
      <!-- FOOTER -->
      <footer>
        <p>&copy; 2014 Tiket Nonton &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>></script>
  </body>
</html>
