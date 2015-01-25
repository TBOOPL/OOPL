<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Tiket Nonton - Details</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <script type="text/javascript">
	function getOtherValue(){
		//put the code here
		var e = document.getElementById("pilihTayang");
		var val = e.options[e.selectedIndex].value;
		$("#abcde").load("<?php echo site_url('buy/pickTicket/');?>"+"/"+val);
	}
	</script>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
<?php if(isset($succ)){ 
if($succ=="succ"){
?>  
<script type="text/javascript">
alert("Pemesanan Berhasil");
</script>
<?php }else if($succ=="fail"){
?>
<script type="text/javascript">
alert("Pemesanan Gagal");
</script>

<?php }} 
?>
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
				<form role="form">
				   <div class="form-group">
					  <label for="name">Schedule:</label>
					  <select class="form-control" id="pilihTayang" onchange="getOtherValue()">
						<option value="pilih" selected="true">--Select schedule--</option>
						  <?php foreach($tayang as $i){?>
							 <option value="<?php echo $i->getId();?>"><?php echo $i->getSchedule();?></option>
						  <?php } ?>
					  </select>
					  <br>
					  <label>Studio: </label> <?php echo $i->getNamaStudio();?>
				   </div>
				</form>
				<div id="abcde"></div>
					<?php //echo site_url('buy/ticket/1');?>
				</div>
			</div>
		</div>
	<br>
	<br>
      <!-- FOOTER -->
      <footer>
        <p>&copy; <?php echo date('Y');?> Tiket Nonton &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->	
	 <script src="<?php echo base_url('assets/js/jquery-1.11.1.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>