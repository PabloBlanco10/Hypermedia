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
	<div class="header">	
		<figure><a href="index.php"><img id="logo" src="../img/Il-nuovo-Marchio-TIM_13-gennaio-2016.jpg" alt="TIM-Photo"></a></figure>

		<div align="center">		
			<ul class="nav nav-tabs" id="landmarks">
				<li><figure align="center"><a href="device.php"><img src="../img/Devices.jpg" id="device" alt="Device">
					<figcaption>DEVICE</figcaption></a></figure>
				</li>

				<li>
					<figure><a href="smartLife.php"><img src="../img/SL.jpg" id="smartlife" alt="Smart Life Service">
						<figcaption>SMART LIFE SERVICE</figcaption></a></figure>
				</li>

				<li>
					<figure><a href="assistanceService.php"><img src="../img/Assistance%20Service.PNG" id="assistance" alt="Assistance-Service">
						<figcaption>ASSISTANCE SERVICE</figcaption></a></figure>
				</li>

				<div class="container">
					<a href="WhoWeAre.php"><div class="topright">WHO WE ARE</div></a>
					<a href="MyTim.php"><div class="bottomright">MY TIM</div></a>
				</div>

			</ul>
		</div>
	</div>



	<!-- Body -->
	<body>
		<div class="panel panel-default">
			<div class="panel-body" align="center">
				<h1 style="color:blue;">WE ARE GLAD THAT YOU DECIDE TO BUY IT</h1>

				<div class="col-sm-5">
					<div class="InformationAboutYou">
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



				<div class="InformationCC">
					<h2>Information about your Credit Card</h2>
					<div class="form-group" style="margin-left:175px">
						<label class="control-label col-sm-2" for="phone">Credit Card:</label>
						<div class="col-sm-8">
							<input type="phone" class="form-control" id="phone" placeholder="Insert your Credit Card...">
						</div>
					</div>

					<div class="form-group" style="margin-left:175px">
						<label class="control-label col-sm-2" for="phone">CVC:</label>
						<div class="col-sm-8">
							<input type="phone" class="form-control" id="phone" placeholder="Insert your CVC...">
						</div>
					</div>

					<div class="form-group" style="margin-left:175px">
						<label class="control-label col-sm-2" for="phone">Expire Date:</label>
						<div class="col-sm-8">
							<input type="phone" class="form-control" id="phone" placeholder="Insert your Expire Date...">
						</div>
					</div>

					<div class="form-group" style="margin-left:175px">
						<label class="control-label col-sm-2" for="phone">Address:</label>
						<div class="col-sm-8">
							<input type="phone" class="form-control" id="phone" placeholder="Insert your Address...">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="../../index.php" class="btn btn-default">BACK</a>
						<!-- El boton SEND te lleva a HOME -->
						<a href="index.php" class="btn btn-default prizefont">BUY IT</a>
					</div>
				</div>
			</div>
		</div>

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
				<a href="../infoRequest.php" class="text-request-info">Request Info</a>
			</div>
			<div class="col-sm-3">
				<p class="text-copyright">© 2016 Politecnico di Milano</p>
			</div>
		</div>
	</body>
</html>