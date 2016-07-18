<!-- Smart Life -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Descrption -->
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
		<script src="../javascript/script.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/styleHeader.css">
		<link rel="stylesheet" type="text/css" href="../css/styleFooter.css">
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

	<!-- BreadCrumbs -->
	<div class="btn-group btn-breadcrumb">
		<a href="index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> HOME</a> 
		<a href="smartLife.php" class="btn btn-default">SMART LIFE SERVICE</a>
	</div>


	<!-- Body -->
	<body>
		<br>
		<div class="col-sm-6" align="center">
			<a href="SmartLifeService/TV-Enterteiment.php">
				<div class="imagenWithButton" align="center">
					<img class="img-responsive" src="../img/01-tv-entertainment.jpg" style="width:625px;height:300px" alt="Smartphones">
					<h3>TV & ENTERTEIMENT</h3>
				</div>
			</a>
		</div>

		<div class="col-sm-6" align="center">
			<a href="SmartLifeService/Health.php">
				<div class="imagenWithButton" align="center">
					<img class="img-responsive" src="../img/02-salute-benessere.jpg" style="width:625px;height:300px" alt="Smartphones">
					<h3>HEALTH</h3>	
				</div> 
			</a>
		</div>

		<div class="col-sm-6" align="right">
			<a href="SmartLifeService/Home.php">
				<div class="imagenWithButton" align="center">
					<img class="img-responsive" src="../img/03-casa-famiglia.jpg" style="width:625px;height:300px" alt="Smartphones">
					<h3>HOME AND FAMILY</h3>	
				</div> 
			</a>
		</div>

		<div class="col-sm-6" align="left">
			<a href="SmartLifeService/Person.php">
				<div class="imagenWithButton" align="center">
					<img class="img-responsive" src="../img/04-tim-personal.jpg" style="width:625px;height:300px" alt="Smartphones">
					<h3>PERSON</h3>	
				</div> 
			</a>
		</div>

		<br>
		<br>
		<div align="center" class="promotion">
			<a href="Promotions.php">
				<img src="../img/promotions.jpg"
					  style="width:400px;height:100px" alt="Promotions" class="img-responsive">
			</a>
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