<!-- Who We Are Page - History-->

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
		<a href="WhoWeAre.php" class="btn btn-default">Who we are</a>
	</div>

	<!-- Body -->
	<body>
		<br>
		<ul class="pagination" align="center">
			<li class="active"><a href="WhoWeAre.php">HISTORY</a></li>
			<li><a href="WhoWeArePresentation.php">PRESENTATION</a></li>
			<li><a href="WhoWeAreAwards.php">AWARDS</a></li>
		</ul>

		<div class="panel panel-default">
			<div class="panel-body" align="center">
				<div class="container">
					<div class="initialText" align="center">A COMPANY WITH HUGE HISTORY </div>
					<br>
					<div class="row" align="center">
						<div class="col-md-7">
							<?php
							$array = array();
							$array = getWhoWeAre('1');
							?>
							<img src="../php/getImageWhoWeAre.php?id=1" id="whoWeAre" alt="whoWeAre" class="img-responsive" style="width:275px;height:200px">

						</div>
						<div class="col-md-3">
							<h2>LOGO 1995</h2>
							<div class="row-fluid">
								<?php echo $array[1]; ?>
							</div>
						</div>
					</div>
				</div>
				<br>
				<br>

				<div class="container">
					<div class="row" align="center">
						<div class="col-md-7">
							<?php
							$array = array();
							$array = getWhoWeAre('2');
							?>
							<img src="../php/getImageWhoWeAre.php?id=2" id="whoWeAre" alt="whoWeAre" class="img-responsive" style="width:275px;height:200px">

						</div>
						<div class="col-md-3">
							<h2>LOGO 1998</h2>
							<div class="row-fluid">
								<?php echo $array[1]; ?>
							</div>
						</div>
					</div>
				</div>
				<br>
				<br>

				<div class="container">
					<div class="row" align="center">
						<div class="col-md-7">
							<?php
							$array = array();
							$array = getWhoWeAre('3');
							?>
							<img src="../php/getImageWhoWeAre.php?id=3" id="whoWeAre" alt="whoWeAre" class="img-responsive" style="width:275px;height:200px">

						</div>
						<div class="col-md-3">
							<h2>LOGO 2014</h2>
							<div class="row-fluid">
								<?php echo $array[1]; ?>
							</div>
						</div>
					</div>
				</div>
				<br>
				<br>

				<div class="container">
					<div class="row" align="center">
						<div class="col-md-7">
							<?php
							$array = array();
							$array = getWhoWeAre('4');
							?>
							<img src="../php/getImageWhoWeAre.php?id=4" id="whoWeAre" alt="whoWeAre" class="img-responsive" style="width:275px;height:200px">

						</div>
						<div class="col-md-3">
							<h2>LOGO 2016</h2>
							<div class="row-fluid">
								<?php echo $array[1]; ?>
							</div>
						</div>
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