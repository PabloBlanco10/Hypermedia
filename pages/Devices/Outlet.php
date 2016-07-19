<!-- DEVICES - OUTLET -->
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
		<link rel="stylesheet" type="text/css" href="../../css/styleDevice.css">
		<link rel="stylesheet" type="text/css" href="../../css/styleHeader.css">
		<link rel="stylesheet" type="text/css" href="../../css/styleFooter.css">
		<?php require_once '../../php/ConnectionsDB.php'; ?>

	</head>


	<!-- Load header -->
	<nav class="navbar navbar-inverse" style="background-color:darkblue;" style="position:fixed">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="../../index.php"><img id="logo" src="../../img/Il-nuovo-Marchio-TIM_13-gennaio-2016.jpg" alt="TIM-Photo"></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">

				<ul class="nav navbar-nav">
					<li class="textHeader">
						<a href="../device.php" style="color:blue">
							<span class="glyphicon glyphicon-phone"></span>DEVICE
						</a>
					</li>
					<li class="textHeader"><a href="../smartLife.php" style="color:blue"><span class="glyphicon glyphicon-globe"></span> SMART LIFE SERVICE</a></li>
					<li class="textHeader"><a href="../assistanceService.php" style="color:blue"><span class="glyphicon glyphicon-question-sign"></span>ASSISTANCE SERVICE</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="textHeader"><a href="../WhoWeAre.php" style="color:blue"><span class="glyphicon glyphicon-user"></span> WHO WE ARE</a></li>
					<li class="textHeader"><a href="#" style="color:blue"><span class="glyphicon glyphicon-text-size"></span>IM</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- BreadCrumbs -->
	<div class="btn-group btn-breadcrumb">
		<a href="../index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> HOME</a> 
		<a href="../device.php" class="btn btn-default">DEVICE</a>
		<a href="Outlet.php" class="btn btn-default">OUTLET</a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>
		<ul class="pagination" >
			<li><a href="smartphone.php">SMARTPHONE
				</a></li>
			<li><a href="tablet.php">TABLET</a></li>
			<li><a href="modem.php">MODEM & NETWORKING</a></li>
			<li><a href="tv.php">TV & SMARTLIVING</a></li>
			<li class="active"><a href="Outlet.php">OUTLET</a></li>

		</ul>

		<div class="panel panel-default">
			<div class="panel-body">

				<div class="imagenWithButton" align="left">
					<?php
					$array = array();
					$array = getDevice('20');
					?>
					<img class="img-noborder" src="../../php/getImageDevice.php?id=20" style="width:300px;height:250px" alt="Videocamera">
				</div>

				<div class="itemfont" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1]; ?> € </p>
				</div>
				<a href="showDevice.php?id=20">
					<div class="imagenDetails" align="right">
						<img class="img-noborder" src="../../img/seedetails.png" style="width:175px;height:28px" alt="Details">

					</div>
				</a>

			</div>
			<div class="panel-body">

				<div class="imagenWithButton" align="left">
					<?php
					$array = array();
					$array = getDevice('21');
					?>
					<img class="img-noborder" src="../../php/getImageDevice.php?id=21" style="width:300px;height:250px" alt="Band">
				</div>

				<div class="itemfont" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1]; ?> € </p>
				</div>
				<a href="showDevice.php?id=21">
					<div class="imagenDetails" align="right">
						<img class="img-noborder" src="../../img/seedetails.png" style="width:175px;height:28px" alt="Details">

					</div>
				</a>

			</div>
			<div class="panel-body">

				<div class="imagenWithButton" align="left">
					<?php
					$array = array();
					$array = getDevice('22');
					?>
					<img class="img-noborder" src="../../php/getImageDevice.php?id=22" style="width:300px;height:250px" alt="TimSirio">
				</div>

				<div class="itemfont" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1]; ?> € </p>
				</div>
				<a href="showDevice.php?id=22">
					<div class="imagenDetails" align="right">
						<img class="img-noborder" src="../../img/seedetails.png" style="width:175px;height:28px" alt="Details">

					</div>
				</a>

			</div>
			<div class="panel-body">

				<div class="imagenWithButton" align="left">
					<?php
					$array = array();
					$array = getDevice('23');
					?>
					<img class="img-noborder" src="../../php/getImageDevice.php?id=23" style="width:300px;height:250px" alt="Olivetti">
				</div>

				<div class="itemfont" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1]; ?> € </p>
				</div>
				<a href="showDevice.php?id=23">
					<div class="imagenDetails" align="right">
						<img class="img-noborder" src="../../img/seedetails.png" style="width:175px;height:28px" alt="Details">

					</div>
				</a>

			</div>
		</div>


		<br>
		<br>
		<br>
		<br>
	</body>
	<!-- Load footer -->
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
</html>

