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
		<a href="LineManagement.php" class="btn btn-default">SMART LIFE</a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>
		<ul class="pagination">
			<li><a href="LineManagement.php">LINE MANAGEMENT</a></li>
			<li><a href="MonitoringCosts.php">MONITORING COSTS & PAYMENTS</a></li>
			<li><a href="TechnicalSupport.php">TECHNICAL SUPPORT</a></li>
			<li class="active"><a href="SmartLife.php">SMART LIFE</a></li>
		</ul>

		<br>

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="container">
					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:12%;color:red;font-size:28px">TIM GAMES</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<?php
								$array = array();
								$array = getAssistanceService('60');
								?>
								<li><a href="Questions/GenericQuestions.php?id=60"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('61');
								?>
								<li><a href="Questions/GenericQuestions.php?id=61"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('62');
								?>
								<li><a href="Questions/GenericQuestions.php?id=62"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('63');
								?>
								<li><a href="Questions/GenericQuestions.php?id=63"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('64');
								?>
								<li><a href="Questions/GenericQuestions.php?id=64"><?php echo $array[0] ?></a></li>
							</ul> 
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:15%;color:red;font-size:28px">TIM READING</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<?php
								$array = getAssistanceService('65');
								?>
								<li><a href="Questions/GenericQuestions.php?id=65"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('66');
								?>
								<li><a href="Questions/GenericQuestions.php?id=66"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('67');
								?>
								<li><a href="Questions/GenericQuestions.php?id=67"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('68');
								?>
								<li><a href="Questions/GenericQuestions.php?id=68"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('69');
								?>
								<li><a href="Questions/GenericQuestions.php?id=69"><?php echo $array[0] ?></a></li>
							</ul> 
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:15%;color:red;font-size:28px">TIM MUSIC</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<?php
								$array = getAssistanceService('70');
								?>
								<li><a href="Questions/GenericQuestions.php?id=70"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('71');
								?>
								<li><a href="Questions/GenericQuestions.php?id=71"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('72');
								?>
								<li><a href="Questions/GenericQuestions.php?id=72"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('73');
								?>
								<li><a href="Questions/GenericQuestions.php?id=73"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('74');
								?>
								<li><a href="Questions/GenericQuestions.php?id=74"><?php echo $array[0] ?></a></li>
							</ul> 
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:15%;color:red;font-size:28px">TIM VISION</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<?php
								$array = getAssistanceService('75');
								?>
								<li><a href="Questions/GenericQuestions.php?id=75"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('76');
								?>
								<li><a href="Questions/GenericQuestions.php?id=76"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('77');
								?>
								<li><a href="Questions/GenericQuestions.php?id=77"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('78');
								?>
								<li><a href="Questions/GenericQuestions.php?id=78"><?php echo $array[0] ?></a></li>
								<?php
								$array = getAssistanceService('79');
								?>
								<li><a href="Questions/GenericQuestions.php?id=79"><?php echo $array[0] ?></a></li>
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