<!-- Smart Life - Home -->
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

		<!-- CSS Pages -->
		<script src="../../javascript/script.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="../../css/style.css">
		<link rel="stylesheet" type="text/css" href="../../css/styleSmartLifeService.css">
		<link rel="stylesheet" type="text/css" href="../../css/styleHeader.css">
		<link rel="stylesheet" type="text/css" href="../../css/styleFooter.css">

		<?php require_once '../../php/ConnectionsDB.php'; ?>
	</head>


	<!-- Load header -->
	<div class="header">	
		<figure><a href="../index.php"><img id="logo" src="../../img/Il-nuovo-Marchio-TIM_13-gennaio-2016.jpg" alt="TIM-Photo"></a></figure>

		<div align="center">		
			<ul class="nav nav-tabs" id="landmarks">
				<li><figure align="center"><a href="../device.php"><img src="../../img/Devices.jpg" id="device" alt="Device">
					<figcaption>DEVICE</figcaption></a></figure>
				</li>

				<li>
					<figure><a href="../smartLife.php"><img src="../../img/SL.jpg" id="smartlife" alt="Smart Life Service">
						<figcaption>SMART LIFE SERVICE</figcaption></a></figure>
				</li>

				<li>
					<figure><a href="../assistanceService.php"><img src="../../img/Assistance%20Service.PNG" id="assistance" alt="Assistance-Service">
						<figcaption>ASSISTANCE SERVICE</figcaption></a></figure>
				</li>

				<div class="container">
					<a href="../WhoWeAre.php"><div class="topright">WHO WE ARE</div></a>
					<a href="../MyTim.php"><div class="bottomright">MY TIM</div></a>
				</div>

			</ul>
		</div>
	</div>

	<!-- BreadCrumbs -->
	<div class="btn-group btn-breadcrumb">
		<a href="../index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> HOME</a> 
		<a href="../smartLife.php" class="btn btn-default">SMART LIFE SERVICE</a>
		<a href="Home.php" class="btn btn-default">HOME</a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>
		<ul class="pagination">
			<li><a href="TV-Enterteiment.php">TV & ENTERTEIMENT</a></li>
			<li><a href="Health.php">HEALTH</a></li>
			<li class="active"><a href="Home.php">HOME</a></li>
			<li><a href="Person.php">PERSON</a></li>
		</ul>


		<table align="center" style="margin-top:50px">	
			<td> 		
				<div class="imagenWithButton" align="center">
					<img class="img-responsive" src="../../img/Glenn-Layton-Homes-Connected.jpg" style="width:1000px;height:330px" alt="TvEnterteiment" align="center">
					<h3 style="width:500px">Smart Life also means a simpler and safer life.</h3>
				</div> 
			</td>
		</table>

		<table align="center">
			<td> 
				<a href="#">
					<div class="imagenWithButton" align="center">
						<?php
						$array = array();
						$array = getSmartLifeService('9');
						?>
						<img class="img-responsive" src="../../php/getImageSmart.php?id=9" style="width:300px;height:200px" alt="TimTag" align="center"><figcaption class="textFigure"><?php echo $array[0]; ?></figcaption>
					</div> 
				</a>
			</td>
			<td> 
				<a href="#">
					<div class="imagenWithButton" align="center">
						<?php
						$array = array();
						$array = getSmartLifeService('10');
						?>
						<img class="img-responsive" src="../../php/getImageSmart.php?id=10" style="width:350px;height:200px" alt="House" align="center">
						<figcaption class="textFigure"><?php echo $array[0]; ?></figcaption>
					</div> 
				</a>
			</td>
			<td> 
				<a href="#">
					<div class="imagenWithButton" align="center">
						<?php
						$array = array();
						$array = getSmartLifeService('11');
						?>
						<img class="img-responsive" src="../../php/getImageSmart.php?id=11" style="width:300px;height:200px" alt="GalaxyGearFit" align="center">
						<figcaption class="textFigure"><?php echo $array[0]; ?></figcaption>
					</div> 
				</a>
			</td>
		</table>

		<!-- Load footer -->
		<br>
		<br>
		<footer class="footer">
			<ul class="list-unstyled">
				<li><p class="text-follow">FOLLOW US IN SOCIAL MEDIA</p>
					<img src="../../img/Followus.png" style="width:358px;height:50px" alt="FollowUs" />
				</li>
				<li><p class="text-contact">Contact us:</p><p> Tel.: 02 93746739<br/> Email: info@tim.it<br/> Fax: 02 93746739<br/></p>							
				</li>
				<li><a href="../infoRequest.php" class="text-request-info">Request Info</a></li>
				<li class="text-copyright"><p>© 2016 Politecnico di Milano</p></li>
			</ul>
		</footer>	
	</body>
</html>