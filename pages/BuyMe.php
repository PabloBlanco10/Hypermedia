<!-- Buy ME Page -->
<!DOCTYPE html>

<html lang="en">
	<head>
		<!-- Description -->
		<title>TIM-Page</title>
		<meta name="author" content="Jorge Santos & Pablo Blanco">
		<meta charset="utf-8">
		<meta name="description" content="WebSite similar to TIM done for the subject Hypermedia Applications">
		<meta name="keywords" content="TIM, HYP, HTML, CSS">

		<!-- For Mobiles -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Scripts -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<!-- Load Header and Footer -->
		<script src="../../javascript/script.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/styleHeader.css">
		<link rel="stylesheet" type="text/css" href="../css/styleFooter.css">
		<link rel="stylesheet" type="text/css" href="../css/device.css">

		<?php require_once '../php/ConnectionsDB.php'; ?>
	</head>


	<!-- Load header -->
	<nav class="navbar navbar-inverse" style="background-color:darkblue;" style="position:fixed">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="../index.php"><img id="logo" src="../img/Il-nuovo-Marchio-TIM_13-gennaio-2016.jpg" alt="TIM-Photo"></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">

				<ul class="nav navbar-nav">
					<li class="textHeader">
						<a href="device.php" style="color:blue">
							<span class="glyphicon glyphicon-phone"></span>DEVICE
						</a>
					</li>
					<li class="textHeader"><a href="smartLife.php" style="color:blue"><span class="glyphicon glyphicon-globe"></span> SMART LIFE SERVICE</a></li>
					<li class="textHeader"><a href="assistanceService.php" style="color:blue"><span class="glyphicon glyphicon-question-sign"></span>ASSISTANCE SERVICE</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="textHeader"><a href="WhoWeAre.php" style="color:blue"><span class="glyphicon glyphicon-user"></span> WHO WE ARE</a></li>
					<li class="textHeader"><a href="#" style="color:blue"><span class="glyphicon glyphicon-text-size"></span>IM</a></li>
				</ul>
			</div>
		</div>
	</nav>



	<!-- Body -->
	<body>
		<div class="panel panel-default">
			<div class="panel-body" align="center">
				<h1 style="color:blue;">WE ARE GLAD THAT YOU DECIDE TO BUY IT</h1>

				<!-- Information about you -->
				<div class="col-sm-5">
					<div class="InformationAboutYou" style="margin-top:25px;">
						<h2>Information about you</h2>
						<div class="form-group">
							<label class="control-label col-sm-3" for="name">Name:</label>
							<div class="col-sm-10">
								<input type="name" class="form-control" id="name" placeholder="Insert your name...">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3" for="email">E-Mail:</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" placeholder="Insert your email...">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3" for="phone">Phone:</label>
							<div class="col-sm-10">
								<input type="phone" class="form-control" id="phone" placeholder="Insert your phone...">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3" for="phone">CardHolder:</label>
							<div class="col-sm-10">
								<input type="phone" class="form-control" id="phone" placeholder="Insert your CardHolder...">
							</div>
						</div>
					</div>
				</div>

				<!-- Address -->
				<div class="col-sm-5">
					<h2 style="margin-top:25px;">Where do we have to send it?</h2>
					<div class="form-group" >
						<label class="control-label col-sm-3" for="phone">Floor:</label>
						<div class="col-sm-10">
							<input type="phone" class="form-control" id="phone" placeholder="Insert your Floor...">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3" for="phone">Postal Code:</label>
						<div class="col-sm-10">
							<input type="phone" class="form-control" id="phone" placeholder="Insert your Postal Code...">
						</div>
					</div>
				</div>

				<!-- Address -->
				<div class="col-sm-6">
					<h2 style="margin-top:25px;">Information about your Credit Card</h2>
					<div class="form-group">
						<label class="control-label col-sm-3" for="phone">Credit Card:</label>
						<div class="col-sm-10">
							<input type="phone" class="form-control" id="phone" placeholder="Insert your Credit Card...">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3" for="phone">CVC:</label>
						<div class="col-sm-10">
							<input type="phone" class="form-control" id="phone" placeholder="Insert your CVC...">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3" for="phone">Expire Date:</label>
						<div class="col-sm-10">
							<input type="phone" class="form-control" id="phone" placeholder="Insert your Expire Date...">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3" for="phone">Address:</label>
						<div class="col-sm-10">
							<input type="phone" class="form-control" id="phone" placeholder="Insert your Address...">
						</div>
					</div>
				</div>

				<!-- Credit Card -->

				<div class="form-group">
					<div class="col-sm-10">
						<a href="../index.php" class="btn btn-default">BACK</a>
						<!-- El boton SEND te lleva a HOME -->
						<a href="../index.php" class="btn btn-default prizefont">BUY IT</a>
					</div>
				</div>
			</div>
		</div>
	</body>

	<!-- Load footer -->
	<br>
	<br>
	<div class="footer" align="center">
		<div class="col-sm-3">
			<p class="text-follow">FOLLOW US IN SOCIAL MEDIA</p>
			<img class="img-responsive" src="../img/Followus.png" style="width:358px;height:50px" alt="FollowUs" />
		</div>
		<div class="col-sm-3">
			<p class="text-contact">Contact us:</p><p> Tel.: 02 93746739<br/> Email: info@tim.it<br/> Fax: 02 93746739<br/></p>
		</div>
		<div class="col-sm-3">
			<a href="infoRequest.php" class="text-request-info">Request Info</a>
		</div>
		<div class="col-sm-3">
			<p class="text-copyright">© 2016 Politecnico di Milano</p>
		</div>
	</div>
</html>