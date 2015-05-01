<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CodeIgniter - Layout</title>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog Template for Bootstrap</title>
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	
	<body>		
		<div id="container" class="container">
			<div class="row">
    		    <div id="header" class="col-sm-12">
    		    	<?php include('header.php');?>
    		    </div>
			</div>

			<div class="row">
    		    <div id="menu" class="col-sm-4">hello world</div>
				<div id="content" class="col-sm-8">
					<div class="jumbotron">
						<?=$content_for_layout ?>
					</div>
				</div>
			</div>
			
			<div class="row">
    		    <div id="footer" class="col-sm-12">{elapsed_time}Sec/ {memory_usage}</div>
			</div>
	    </div>

		<script src="assets/jquery/jquery.min.js"></script>
    	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>