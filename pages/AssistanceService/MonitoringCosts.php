<!-- Assistance Service - Monitoring Costs -->
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
		<a href="../assistanceService.php" class="btn btn-default">ASSISTANCE SERVICE</a>
		<a href="LineManagement.php" class="btn btn-default">MONITORING COSTS & PAYMENTS</a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>
		<ul class="pagination">
			<li><a href="LineManagement.php">LINE MANAGEMENT</a></li>
			<li class="active"><a href="MonitoringCosts.php">MONITORING COSTS & PAYMENTS</a></li>
			<li><a href="TechnicalSupport.php">TECHNICAL SUPPORT</a></li>
			<li><a href="SmartLife.php">SMART LIFE</a></li>
		</ul>

		<br>

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="container">
					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:12%;color:red;font-size:28px">RECHARGEABLE</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<?php
								$array = array();
								$array = getAssistanceService('21');
								?>
								<li><a href="Questions/GenericQuestions.php?id=21"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('22');
								?>
								<li><a href="Questions/GenericQuestions.php?id=22"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('23');
								?>
								<li><a href="Questions/GenericQuestions.php?id=23"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('24');
								?>
								<li><a href="Questions/GenericQuestions.php?id=24"><?php echo $array[0] ?></a></li>
							</ul> 
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:15%;color:red;font-size:28px">SUBSCRIPTION</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<?php
	$array = getAssistanceService('25');
								?>
								<li><a href="Questions/GenericQuestions.php?id=25"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('26');
								?>
								<li><a href="Questions/GenericQuestions.php?id=26"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('27');
								?>
								<li><a href="Questions/GenericQuestions.php?id=27"><?php echo $array[0] ?></a></li><?php
	$array = getAssistanceService('28');
								?>
								<li><a href="Questions/GenericQuestions.php?id=28"><?php echo $array[0] ?></a></li><?php
	$array = getAssistanceService('29');
								?>
								<li><a href="Questions/GenericQuestions.php?id=29"><?php echo $array[0] ?></a></li>
							</ul> 
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:15%;color:red;font-size:28px">TO SURF ON INTERNET</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<?php
	$array = getAssistanceService('30');
								?>
								<li><a href="Questions/GenericQuestions.php?id=30"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('31');
								?>
								<li><a href="Questions/GenericQuestions.php?id=31"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('32');
								?>
								<li><a href="Questions/GenericQuestions.php?id=32"><?php echo $array[0] ?></a></li><?php
	$array = getAssistanceService('33');
								?>
								<li><a href="Questions/GenericQuestions.php?id=33"><?php echo $array[0] ?></a></li><?php
	$array = getAssistanceService('34');
								?>
								<li><a href="Questions/GenericQuestions.php?id=34"><?php echo $array[0] ?></a></li>
							</ul> 
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:15%;color:red;font-size:28px">INSTALLMENTS OFFERS</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<?php
	$array = getAssistanceService('35');
								?>
								<li><a href="Questions/GenericQuestions.php?id=35"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('36');
								?>
								<li><a href="Questions/GenericQuestions.php?id=36"><?php echo $array[0] ?></a></li>
								<?php
	$array = getAssistanceService('37');
								?>
								<li><a href="Questions/GenericQuestions.php?id=37"><?php echo $array[0] ?></a></li><?php
	$array = getAssistanceService('38');
								?>
								<li><a href="Questions/GenericQuestions.php?id=38"><?php echo $array[0] ?></a></li>
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
	</body>


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
</html>
