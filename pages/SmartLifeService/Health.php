<!-- Smart Life - Health -->
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
		<a href="Health.php" class="btn btn-default">HEALTH</a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>
		<ul class="pagination">
			<li><a href="TV-Enterteiment.php">TV & ENTERTEIMENT</a></li>
			<li class="active"><a href="Health.php">HEALTH</a></li>
			<li><a href="Home.php">HOME</a></li>
			<li><a href="Person.php">PERSON</a></li>
		</ul>


		<table align="center" style="margin-top:50px">
			<td> 		
				<div class="textLeft"><p>Check out or last wearables. Find out how health and wellness can positively change your life. Free your desire to move. Share your results with friends. The future is smart.</p>
				</div>
			</td>	
			<td> 		
				<div class="imagenWithButton" align="center">
					<img class="img-responsive" src="../../img/corriendo.jpg" style="width:730px;height:330px" alt="TvEnterteiment" align="center">
				</div> 
			</td>
		</table>

		<div class="panel panel-default">
			<div class="panel-body" align="center">
				<div class="col-sm-3">
					<a href="Device/GenericDevice.php?id=5">
						<div class="imagenWithButton" align="center">
							<?php
							$array = array();
							$array = getSmartLifeService('5');
							?>
							<img class="img-responsive" src="../../php/getImageSmart.php?id=5" style="width:250px;height:200px" alt="SamsungGearS2" align="center">
							<figcaption class="textFigure">
								<?php echo $array[0]; ?>
							</figcaption>
						</div> 
					</a>
				</div>

				<div class="col-sm-3">
					<a href="Device/GenericDevice.php?id=6">
						<div class="imagenWithButton" align="center">
							<?php
							$array = array();
							$array = getSmartLifeService('6');
							?>
							<img class="img-responsive" src="../../php/getImageSmart.php?id=6" style="width:250px;height:200px" alt="Loop" align="center">
							<figcaption class="textFigure">
								<?php echo $array[0]; ?>
							</figcaption>
						</div> 
					</a>
				</div>

				<div class="col-sm-3">
					<a href="Device/GenericDevice.php?id=7">
						<div class="imagenWithButton" align="center">
							<?php
							$array = array();
							$array = getSmartLifeService('7');
							?>
							<img class="img-responsive" src="../../php/getImageSmart.php?id=7" style="width:250px;height:200px" alt="GalaxyGearFit" align="center">
							<figcaption class="textFigure">
								<?php echo $array[0]; ?>
							</figcaption>
						</div> 
					</a>
				</div>

				<div class="col-sm-3">
					<a href="Device/GenericDevice.php?id=8">
						<?php
						$array = array();
						$array = getSmartLifeService('8');
						?>
						<div class="imagenWithButton" align="center">
							<img class="img-responsive" src="../../php/getImageSmart.php?id=8" style="width:250px;height:200px" alt="Smartband" align="center">
							<figcaption class="textFigure">
								<?php echo $array[0]; ?>
							</figcaption>
						</div> 
					</a>
				</div>
			</div>
		</div>


		<!-- Load footer -->
		<br>
		<br>

		<div class="footer" align="center">
			<div class="col-sm-3">
				<p class="text-follow">FOLLOW US IN SOCIAL MEDIA</p>
				<img class="img-responsive" src="../../img/Followus.png" style="width:358px;height:50px" alt="FollowUs" />
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
