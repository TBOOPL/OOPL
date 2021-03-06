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
				<li class="active"><a href="<?php echo site_url('Playing/')?>">Now Playing</a></li>
                <li><a href="<?php echo site_url('coming_soon/')?>">Coming Soon</a></li>
                <li><a href="#contact">Contact Us</a></li>
              </ul>
			  <ul class="nav navbar-nav navbar-right">
			  
					<li>
						<?php
						//$this->session->userdata('logged_in');
						
						$logged_in=false;
							if($this->session->userdata('logged_in')!=null){
								$logged_in=$this->session->userdata('logged_in');
							}
							
							if($logged_in){?>
								<ul class="nav navbar-nav navbar-right">
								<li><a href="#"><?php echo $this->session->userdata('username');?></a></li>
								</ul>
							<?}else {?>
								<a href="<?php echo site_url("login/")?>">
									<?php echo 'Register/Login';
								echo '</a>';
							}
						?>
					</li>
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
	
	<!-- Subhead
	================================================== -->
	<div class="jumbotron subhead" id="">
		<div class="container">
			<h1>Now Playing</h1>
		</div>
	</div>
	
    <!-- Movies
	================================================== -->
	<div id="detail-wrapper">
	<?php
			foreach ($playing as $film){?>
			<div class="row">
				<div class="col-md-4">
					<a href="<?php echo site_url('details/movieDetails/'.$film->getId())?>">
						<img class="img-responsive" src="<?php echo base_url('assets/movies/'.$film->getImg());?>" alt="">
					</a>
				</div>
				<div class="col-md-8">
					<h3><?php echo $film->getTitle(); ?></h3>
					<h4>Rating: <?php echo $film->getRating()?>/5</h4>
					<p><?php echo substr("".$film->getDesc()."",0, 350); ?> . . .</p>
					<a class="btn btn-primary" href="<?php echo site_url('details/movieDetails/'.$film->getId())?>">View Movie <span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</div>
			<hr>
		<?php
		}?>
        <!-- /.row -->
		
      <!-- FOOTER -->
      <footer>
        <p>&copy; <?php echo date('Y');?> Tiket Nonton &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>></script>
  </body>
</html>
