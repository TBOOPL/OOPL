<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tiket Nonton - Login</title>
     
	 <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/ticket.ico');?>"/>

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
                <li><a href="<?php echo site_url('home/')?>">Home</a></li>
				<li><a href="<?php echo site_url('Playing/')?>">Now Playing</a></li>
                <li><a href="<?php echo site_url('coming_soon/')?>">Coming Soon</a></li>
                <li><a href="#contact">Contact Us</a></li>
              </ul>
			  <ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="<?php echo site_url('login/')?>">Register/Login</a></li>
			  </ul>
			</div>
            </div>
          </div>
        </nav>

      </div>
    </div>
<!-- Breadcrumbs
	================================================== -->
	
	<ol id="breadcrumbs" class="breadcrumb">
		<li><a href="index.php">Home</a></li>
		<li class="active">Register/Login</a></li>
	</ol>
	
<!-- Login Form 
===================================================== -->
<div class="container">
    <div class="row" >
	 <div id="menuLogin">
          <div class="col-lg-4 col-sm-4 well">
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("login/verifikasi_login", $attributes);?>
          <fieldset>
               <legend>Login</legend>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="txt_username" class="control-label">Username</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_username" name="username" placeholder="Username" type="text" value="<?php echo set_value('username'); ?>" />
                    <span class="text-danger"><?php echo form_error('username'); ?></span>
               </div>
               </div>
               </div>
               
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
               <label for="txt_password" class="control-label">Password</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_password" name="password" placeholder="Password" type="password" value="<?php echo set_value('password'); ?>" />
                    <span class="text-danger"><?php echo form_error('password'); ?></span>
               </div>
               </div>
               </div>  
			   <div class="form-group">
				<div class="text-center">
					<p style="color:red;"><?php echo $this->session->flashdata('notification')?></p>
				</div>
			   </div>
			   <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
               </div>
          </fieldset>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
		</div>
		
		
		<div class="col-lg-1"></div>
		<?php 
          echo form_open("register/index");?>
		<div class="col-lg-6 col-sm-6 well">
          <fieldset>
               <legend>Register</legend>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
                    <label for="txt_username" class="control-label">Username</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_username" name="register_username" placeholder="Username" type="text" value="<?php echo set_value('register_username'); ?>" onchange="cekUsername(this.value)" />
                    <span class="text-danger"></span>
					<span class="notif" id="txtUsername"></span>
               </div>
               </div>
               </div>
               
			   <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
                    <label for="txt_nama" class="control-label">Nama</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_nama" name="register_nama" placeholder="Nama" type="text" value="<?php echo set_value('register_nama'); ?>" />
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>
			   
			   <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
                    <label for="txt_email" class="control-label">Email</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_email" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>
			   
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
               <label for="txt_password" class="control-label">Password</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_password" name="password" placeholder="Password" type="password" value="<?php echo set_value('password1'); ?>" />
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>  
			   
			   <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-3 col-sm-3">
               <label for="txt_password" class="control-label">Confirm Password</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_password" name="confpassword" placeholder="Confirm Password" type="password" value="<?php echo set_value('password2'); ?>" />
                    <span class="text-danger"></span>
               </div>
               </div>
               </div>
			   
			   <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_register" name="btn_register" type="submit" class="btn btn-default" value="Register" />
               </div>
               </div>
          </fieldset>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
<!-- FOOTER -->
      <footer>
        <p>&copy; 2014 Tiket Nonton &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->

	<script src="<?php echo base_url('assets/js/jquery-1.10.2.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>