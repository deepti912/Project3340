<?php 
	session_start();
	if(!isset($_SESSION['userlogin'])) {
		header("Location: employer_login.php");
	}
	
	if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION);
		header("Location: employer_login.php");
	}
 ?>
 
 
 
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Career Right</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky top">
<div class ="container fluid">
	<h1>Career Right</h1>
	
	
	<button class= "navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="employer1.php?logout=true">Logout</a>
			</li>
		</ul>
	</div>
</div>
</nav>

<div class="container-fluid padding">
<div class="row padding">
	<div class="col-lg-6">
	<h2>Find the right people for your organization...</h2>
	<button class="btn btn-primary" onclick="window.location.href='postjob.php';">Post a Job</button>  
	<hr class="mb-3">
	<h2>View your job postings</h2>
	<button class="btn btn-primary" onclick="window.location.href='employer2.php';">My account</button> 
	
	</div>
	<div class="col-lg-6">
	<img id="laptop" src="images/laptop2.jpg" class="img-thumbnail">
	</div>
</div>
</div>


<!--- Footer -->

<footer> 
<div class="container-fluid padding">
<div class="row text-center">
	<div class="col-md-4">
		<he class="light">
		<h5>For Job Seekers</h5>
		<p>Search Jobs</p>
		<p>Resume Helper</p>
	</div>
	<div class="col-md-4">
		<he class="light">
		<h5>For Employers</h5>
		<p>Products</p>
		<p>Pricing</p>
	</div>
	<div class="col-md-4">
		<he class="light">
		<h5>About Us</h5>
		<p>Contact Us</p>
		<p>Careers</p>
	</div>
	
</div>
</div>
</footer>



</body>
</html>