<!-- RECOMMENDED DEVICES -->
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
		<script src="../javascript/script.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/styleAssistance.css">
		<link rel="stylesheet" type="text/css" href="../css/styleHeader.css">
		<link rel="stylesheet" type="text/css" href="../css/styleFooter.css">
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

	<!-- BreadCrumbs -->
	<div class="btn-group btn-breadcrumb">
		<a href="../index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> HOME</a> 
		<a href="Recommended.php" class="btn btn-default">RECOMMENDED DEVICES</a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>


		<div class="panel panel-primary">
			<div class="panel-heading">RECOMMENDED DEVICES</div>
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
					<div class="fontprizereal" ><p>
						<?php echo $array[1] ; ?> € </p>
					</div>
				</div>

				<div class="col-sm-4" align="left">
					<?php
					$array = array();
					$array = getDevice('5');
					?>
					<a href="../pages/Devices/showDevice.php?id=5">
						<div class="imagenWithButton" align="center">
							<img class="img-noborder" src="../php/getImageDevice.php?id=5" style="width:300px;height:250px" alt="Promotion">
						</div> 
					</a>

					<div class="itemfont" ><p>
						<?php echo $array[0] ?></p>
					</div>
					<div class="fontprizereal" ><p>
						<?php echo $array[1] ; ?> € </p>
					</div>
				</div>

				<div class="col-sm-4" align="left">
					<?php
					$array = array();
					$array = getDevice('13');
					?>
					<a href="../pages/Devices/showDevice.php?id=13">
						<div class="imagenWithButton" align="center">
							<img class="img-noborder" src="../php/getImageDevice.php?id=13" style="width:300px;height:250px" alt="Promotion">
						</div> 
					</a>

					<div class="itemfont" ><p>
						<?php echo $array[0] ?></p>
					</div>
					<div class="fontprizereal" ><p>
						<?php echo $array[1] ; ?> € </p>
					</div>
				</div>

				<div class="col-sm-6" align="left">
					<?php
					$array = array();
					$array = getSmartLifeService('8');
					?>
					<a href="../pages/SmartLifeService/Device/GenericDevice.php?id=8">
						<div class="imagenWithButton" align="center">
							<img class="img-noborder" src="../php/getImageSmart.php?id=8" style="width:300px;height:250px" alt="Promotion">
						</div> 
					</a>

					<div class="itemfont" ><p>
						<?php echo $array[0] ?></p>
					</div>
					<div class="fontprizereal" ><p>
						<?php echo $array[1] ; ?> € </p>
					</div>
				</div>

				<div class="col-sm-6" align="left">
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
					<div class="fontprizereal" ><p>
						<?php echo $array[1] ; ?> € </p>
					</div>
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
			<a href="infoRequest.php" class="text-request-info">Request Info</a>
		</div>
		<div class="col-sm-3">
			<p class="text-copyright">© 2016 Politecnico di Milano</p>
		</div>
	</div>
</html>

