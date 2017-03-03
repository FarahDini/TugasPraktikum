<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>R. Farah Dini Q</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<nav class="navbar navbar-inverse" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"></a>
						</div>
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?php echo site_url()?>/home"><span class="glyphicon glyphicon-home" aria-hidden="true">Home</span></a></li>
								<li><a href="<?php echo site_url()?>/about"><span class="glyphicon glyphicon-user" aria-hidden="true">About</span></a></li>
								<li><a href="<?php echo site_url()?>/contact"><span class="glyphicon glyphicon-envelope" aria-hidden="true">Contact</span></a></li>
							</ul>
							
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">R. Farah Dini Q.<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
				<div class="page-header">
 					 <h1><center>About Us</center></h1>
				</div>
				
				<center><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-striped table-hover">
						<tbody>
							<tr>
								<td><center><span class="glyphicon glyphicon-user "></span><?php echo $nama ?></center></td>
							</tr>

							<tr>
								<td><center><span class="glyphicon glyphicon-list-alt "></span><?php echo $nim ?></center></td>
							</tr>
							<tr>
								<td><center><span class="glyphicon glyphicon-map-marker "></span><?php echo $alamat ?></center></td>
							</tr>
							<tr>
								<td><center><span class="glyphicon glyphicon-phone "></span><?php echo $no ?></center></td>
							</tr>

							<tr>
								<td><center><span class="glyphicon glyphicon-envelope "></span><?php echo $email ?></center></td>
							</tr>
							<tr>
								<td><center><span class="glyphicon glyphicon-education "></span><?php echo $university ?></center></td>
							</tr>
							<tr>
								<td><center><span class="glyphicon glyphicon-grain "></span><?php echo $hobby ?></center></td>
							</tr>
						</tbody>
					</table>
				</div></center>
				
			</div>

		</div>
		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>