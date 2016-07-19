<!-- WebSite similar to TIM -->
<!-- Done by Pablo Blanco & Jorge Santos, students from Politecnico Di Milano -->

<!-- Index Page -->

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
		<script src="../javascript/script.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/styleHeader.css">
		<link rel="stylesheet" type="text/css" href="../css/styleFooter.css">
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


	<!-- BreadCrumbs -->
	<div class="btn-group btn-breadcrumb">
		<a href="index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> HOME</a> 
	</div>

	<!-- Body -->
	<body>
		<br>
		
		<div class="panel panel-danger">
			<div class="panel-heading">SEE OUR LAST PROMOTIONS</div>
			<div class="panel-body">
				<div class="col-sm-4" align="left">
					<?php
					$array = array();
					$array = getDevice('1');
					?>
					<a href="../pages/Devices/showDevice.php?id=1">
						<div class="imagenWithButton" align="center">
							<img class="img-noborder" src="../php/getImageDevice.php?id=1" style="width:300px;height:250px" alt="Promotion">
						</div> 
					</a>

					<div class="itemfont" ><p>
						<?php echo $array[0] ?></p>
					</div>
				</div>

				<div class="col-sm-4" align="left">
					<?php
					$array = array();
					$array = getDevice('7');
					?>
					<a href="../pages/Devices/showDevice.php?id=7">
						<div class="imagenWithButton" align="center">
							<img class="img-noborder" src="../php/getImageDevice.php?id=7" style="width:300px;height:250px" alt="Promotion">
						</div> 
					</a>

					<div class="itemfont" ><p>
						<?php echo $array[0] ?></p>
					</div>
				</div>
				<div class="col-sm-4" align="left">
					<?php
					$array = array();
					$array = getSmartLifeService('7');
					?>
					<a href="../pages/SmartLifeService/Device/GenericDevice.php?id=7">
						<div class="imagenWithButton" align="center">
							<img class="img-noborder" src="../php/getImageSmart.php?id=7" style="width:300px;height:250px" alt="Promotion">
						</div> 
					</a>

					<div class="itemfont" ><p>
						<?php echo $array[0] ?></p>
					</div>

		<br>
		<br>
		<br>
				</div>
			</div>
		</div>
		
		
			<div class="panel panel-default">
			<div class="panel-body" align="center">
				
				<div class="col-sm-6" style="margin-bottom:30px;"	>
					<a href="../pages/Devices/showDevice.php?id=2">
						<img src="../img/iphone6.JPG" class="img-responsive"
							  style="width:580px;height:250px" alt="Iphone6" align="left"/>
					</a>
				</div>
				

				<div class="col-sm-6" style="margin-bottom:30px;">
					<a href="../pages/Devices/showDevice.php?id=5">
						<img src="../img/640x480_MayS7.jpg"  class="img-responsive"
							  style="width:580px;height:250px" alt="Samsung"/>
					</a>
				</div>
			
			</div>
		</div>
		
		
		
	</body>

		
	

	

		<!-- Load footer -->
		
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

</html>