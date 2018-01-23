<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Register for WSF Spin</title>
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
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
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
					<h1>SPIN Number Registered!</h1>
					<p class="lead"></p>
				</div>
			</div>
		
		</div>


		<div class="alert alert-success">
			<strong>Congratulations!</strong>
			Your SPIN number is <?=$_REQUEST['spin_number']?>
		</div>

		<div class="alert alert-info">

			<p>
				<strong>Demo Notes:</strong>
			</p>

			<p>
				This is the end of the demo, but here is what just happened:
			</p>

			<ul>

				<li>After you submitted the form on the first page, the data was sent to the API.</li>
				<li>The API verified the data, added a record and then returned a unique payment URL to this system.</li>
				<li>This system then redirected you to a secure page to complete your payment.</li>
				<li>Once you completed payment and the API verified it, you were returned here with your brand new SPIN number.</li>
				<li>In the SPIN database (on SportyHQ), you're now registered and all of your details are available either via the SportyHQ interface, or via the API.</li>
			</ul>
		
		</div>

	</div>

</body>
</html>
