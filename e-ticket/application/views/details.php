<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" href="#">

    <title>Tiket Nonton - Details</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Add jQuery library -->
	<script type="text/javascript" src="<?php echo base_url('assets/fancyBox/lib/jquery-1.10.2.min.js')?>"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url('assets/fancyBox/lib/jquery.mousewheel.pack.js?v=3.1.3')?>"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url('assets/fancyBox/source/jquery.fancybox.pack.js?v=2.1.5')?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fancyBox/source/jquery.fancybox.css?v=2.1.5')?>" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5')?>" />
	<script type="text/javascript" src="<?php echo base_url('assets/fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5')?>"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fancyBox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7')?>" />
	<script type="text/javascript" src="<?php echo base_url('assets/fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7')?>"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url('assets/fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6')?>"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	    
    
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
                <li><a href="<?php echo site_url('home/');?>">Home</a></li>
				<li><a href="<?php echo site_url('Playing/');?>">Now Playing</a></li>
                <li><a href="<?php echo site_url('coming_soon/')?>">Coming Soon</a></li>
                <li><a href="#contact">Contact Us</a></li>
              </ul>
			  <ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo site_url('login/')?>">Register/Login</a></li>
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
		<!--<li><a href="nowplaying.php">Now Playing</a></li>-->
		<li class="active"><?php echo $detail->getTitle();?></li>
	</ol>
	
    <!-- Movie Details
	================================================== -->
	<div id="detail-wrapper">
		<div id="detail-container">
			<div class="media">
				<a class="media-left">
					<img src="<?php echo base_url('assets/movies/'.$detail->getImg());?>" alt="<?php echo $detail->getTitle();?>">
				</a>
				<div id="detail-body" class="media-body">
					<h1 class="media-heading"><?php echo $detail->getTitle();?></h1>
					<div class="detail-rating">
						<h4>Rating: 
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<?php echo $detail->getRating();?>
						</h4>
					</div>	
					<div class="detail-description">
						<?php echo $detail->getDesc();?>
					</div>
					<div class="detail-buttons">
						<a class="btn btn-primary btn-lg" href="<?php echo site_url('buy/ticket/'.$detail->getId().'/'.'ny');?>" role="button">Buy Ticket</a>
						<a class="btn btn-primary btn-lg fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo" role="button">Watch Trailer</a>
						<a class="btn btn-primary btn-lg" href="#" role="button">View Schedule</a>
					</div>
				</div>
			</div>
		</div>
	</div>
      <!-- FOOTER -->
      <footer>
        <p>&copy; 2014 Tiket Nonton &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
		<?php echo base_url('assets/fancyBox/lib/jquery-1.10.2.min.js') ?>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.1.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  </body>
</html>
