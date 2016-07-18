<!-- DEVICES - MODEM -->
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
		<a href="../device.php" class="btn btn-default">DEVICE</a>
		<a href="modem.php" class="btn btn-default">MODEM & NETWORKING</a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>
		<ul class="pagination" >
			<li><a href="smartphone.php">SMARTPHONE
				</a></li>
			<li><a href="tablet.php">TABLET</a></li>
			<li class="active"><a href="modem.php">MODEM & NETWORKING</a></li>
			<li><a href="tv.php">TV & SMARTLIVING</a></li>
			<li><a href="outlet.php">OUTLET</a></li>

		</ul>

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="imagenWithButton" align="left">
					<?php
					$array = array();
					$array = getDevice('12');
					?>
					<img class="img-noborder" src="../../php/getImageDevice.php?id=12" style="width:300px;height:250px" alt="TimModem">
				</div>

				<div class="itemfont" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1]; ?> € </p>
				</div>
				
				<a href="showDevice.php?id=12">
					<div class="imagenDetails" align="right">
						<img class="img-noborder" src="../../img/seedetails.png" style="width:175px;height:28px" alt="Details">

					</div>
				</a>

			</div>
			<div class="panel-body">

				<div class="imagenWithButton" align="left">
					<?php
					$array = array();
					$array = getDevice('13');
					?>
					<img class="img-noborder" src="../../php/getImageDevice.php?id=13" style="width:300px;height:250px" alt="Fibra">
				</div>

				<div class="itemfont" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1]; ?> € </p>
				</div>
				<a href="showDevice.php?id=13">
					<div class="imagenDetails" align="right">
						<img class="img-noborder" src="../../img/seedetails.png" style="width:175px;height:28px" alt="Details">

					</div>
				</a>

			</div>
			<div class="panel-body">

				<div class="imagenWithButton" align="left">
					<?php
					$array = array();
					$array = getDevice('14');
					?>
					<img class="img-noborder" src="../../php/getImageDevice.php?id=14" style="width:300px;height:250px" alt="Repeater">
				</div>

				<div class="itemfont" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1]; ?> € </p>
				</div>
				<a href="showDevice.php?id=14">
					<div class="imagenDetails" align="right">
						<img class="img-noborder" src="../../img/seedetails.png" style="width:175px;height:28px" alt="Details">

					</div>
				</a>

			</div>
			<div class="panel-body">

				<div class="imagenWithButton" align="left">
					<?php
					$array = array();
					$array = getDevice('15');
					?>
					<img class="img-noborder" src="../../php/getImageDevice.php?id=15" style="width:300px;height:250px" alt="Powerline">
				</div>

				<div class="itemfont" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1]; ?> € </p>
				</div>
				<a href="showDevice.php?id=15">
					<div class="imagenDetails" align="right">
						<img class="img-noborder" src="../../img/seedetails.png" style="width:175px;height:28px" alt="Details">

					</div>
				</a>

			</div>
		</div>
	</body>



	<br>
	<br>
	<br>
	<br>

	<!-- Load footer -->
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

<script>
	function myFunction() {

	}
</script>