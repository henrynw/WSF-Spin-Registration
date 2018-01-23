<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>WSF SPIN API Demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" href="bootstrap.css" media="screen">
</head>

<body>

	<div class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
		<div class="container">
			<a href="../" class="navbar-brand">FPS Squash</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="/index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/register.php">Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/validate.php">Validate</a>
					</li>
				</ul>
			</div>
		</div>
	</div>


	<div class="container">

		<br />
		<br />

		<div class="page-header" id="banner" style="margin-top: 50px !important;">
		
			<div class="row">
				<div class="col-lg-8 col-md-7 col-sm-6">
					<h1>WSF SPIN API Demo</h1>
					<p class="lead"></p>
				</div>
			</div>
		
		</div>


		<br />

		<p>
		This demo is designed to show you how an external platform can communicate with the SPIN API to perform the following actions:
		</p>

		<ul>
			<li>
				<a href="validate.php"><strong>Validate a SPIN Number</strong></a><br />
				This will confirm that a given SPIN number exists and that it matches the last name provided.
				<br />
				<br />
			</li>
			<li>
				<a href="register.php"><strong>Register a new SPIN Number</strong></a><br />
				This will let external systems initiate a SPIN number purchase from start to finish.
				<br />
			</li>
		</ul>

	</div>

</body>
</html>
