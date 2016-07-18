<!-- Assistance Service - Line Management -->
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
		<link rel="stylesheet" type="text/css" href="../../css/StyleAssistance.css">


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
		<a href="../assistanceService.php" class="btn btn-default">ASSISTANCE SERVICE</a>
		<a href="LineManagement.php" class="btn btn-default">LINE MANAGEMENT</a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>
		<ul class="pagination">
			<li class="active"><a href="LineManagement.php">LINE MANAGEMENT</a></li>
			<li><a href="MonitoringCosts.php">MONITORING COSTS & PAYMENTS</a></li>
			<li><a href="TechnicalSupport.php">TECHNICAL SUPPORT</a></li>
			<li><a href="SmartLife.php">SMART LIFE</a></li>
		</ul>

		<br>

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="container">
					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:12%;color:red;font-size:28px">ACTIVATED HOUSE LINE</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<?php
								$array = array();
								$array = getAssistanceService('1');
								?>
								<li><a href="Questions/GenericQuestions.php?id=1"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('2');
								?>
								<li><a href="Questions/GenericQuestions.php?id=2"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('3');
								?>
								<li><a href="Questions/GenericQuestions.php?id=3"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('4');
								?>
								<li><a href="Questions/GenericQuestions.php?id=4"><?php echo $array[0] ?></a></li>
							</ul> 
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:15%;color:red;font-size:28px">MyTIM MOBILE</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<?php
	$array = getAssistanceService('5');
								?>
								<li><a href="Questions/GenericQuestions.php?id=5"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('6');
								?>
								<li><a href="Questions/GenericQuestions.php?id=6"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('7');
								?>
								<li><a href="Questions/GenericQuestions.php?id=7"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('8');
								?>
								<li><a href="Questions/GenericQuestions.php?id=8"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('9');
								?>
								<li><a href="Questions/GenericQuestions.php?id=9"><?php echo $array[0] ?></a></li>
							</ul> 
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:15%;color:red;font-size:28px">MyTIM FIXED</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<?php
	$array = getAssistanceService('10');
								?>
								<li><a href="Questions/GenericQuestions.php?id=10"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('11');
								?>
								<li><a href="Questions/GenericQuestions.php?id=11"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('12');
								?>
								<li><a href="Questions/GenericQuestions.php?id=12"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('13');
								?>
								<li><a href="Questions/GenericQuestions.php?id=13"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('14');
								?>
								<li><a href="Questions/GenericQuestions.php?id=14"><?php echo $array[0] ?></a></li>
							</ul> 
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:15%;color:red;font-size:28px">MyTIM FIXED</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<?php
	$array = getAssistanceService('15');
								?>
								<li><a href="Questions/GenericQuestions.php?id=15"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('16');
								?>
								<li><a href="Questions/GenericQuestions.php?id=16"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('17');
								?>
								<li><a href="Questions/GenericQuestions.php?id=17"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('18');
								?>
								<li><a href="Questions/GenericQuestions.php?id=18"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('19');
								?>
								<li><a href="Questions/GenericQuestions.php?id=19"><?php echo $array[0] ?></a></li>
							</ul> 
						</div>
					</div>

					<hr>

					<div class="row" align="center">
						<div class="col-sm-8" style="color:darkblue">
							<h3>YOUR QUESTIONS WAS NOT HERE?</h3>
						</div>
						<div class="col-sm-2 buttonAskIt">
							<a href="../infoRequest.php">ASK IT!</a>
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
