<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.6">
	<title><?= isset($title)?$title:'CI Shop'?> · E Commerce</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/navbar-fixed/">
	<!-- Fonr Awesome -->
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<!-- Bootstrap core CSS -->
     <link href="<?= base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom Style -->
	<link href="<?= base_url()?>/assets/css/app.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= base_url()?>/assets/libs/fontawesome/css/all.min.css" rel="stylesheet">
</head>
<body>
	<!-- Navbar -->
     <?php $this->load->view('layouts/_navbar');?>
     <!-- End Navbar -->

     <!-- Content -->
     <?php 
          $this->load->view($page);
     ?>
     <!-- End Content -->
     
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/assets/js/bootstrap.min.js"></script></body>
     <script src="<?= base_url()?>assets/js/app.js"></script>
</body>
</html>
