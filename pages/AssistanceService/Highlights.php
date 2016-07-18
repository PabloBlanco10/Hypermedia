<!-- Assistance Service - Highlights -->
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
		<a href="#" class="btn btn-default">HIGHLIGHTS</a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="container">
					<div class="row">
						<div class="col-sm-12" align="center">
							<h3 style="color:blue;font-size:34px;font-weight: bold">MOST COMMON QUESTIONS</h3>
						</div>

						<div class="row">
							<div class="col-sm-5">
								<h3 style="margin-top:15%;color:red;font-size:28px">LINE MANAGEMENT</h3>
							</div>
							<div class="col-sm-6 questionsBox">
								<ul>
									<?php
									$array = getAssistanceService('1');
									?>
									<li><a href="Questions/GenericQuestions.php?id=1"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('5');
									?>
									<li><a href="Questions/GenericQuestions.php?id=5"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('11');
									?>
									<li><a href="Questions/GenericQuestions.php?id=11"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('16');
									?>
									<li><a href="Questions/GenericQuestions.php?id=16"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('8');
									?>
									<li><a href="Questions/GenericQuestions.php?id=8"><?php echo $array[0] ?></a></li>
								</ul> 
							</div>

							<div class="col-sm-12">
								<a href="LineManagement.php">
									<div class="questionsBox" align="center" style="background-color:lightgoldenrodyellow;text-decoration:none;color:black;">
										<h3>SEE ALL QUESTIONS OF LINE MANAGEMENT</h3>
									</div>
								</a>	
							</div>
						</div>

						<hr>

						<div class="row">
							<div class="col-sm-5">
								<h3 style="margin-top:15%;color:red;font-size:28px">MONITORING COSTS & PAYMENTS</h3>
							</div>
							<div class="col-sm-6 questionsBox">
								<ul>
									<?php
	$array = getAssistanceService('24');
									?>
									<li><a href="Questions/GenericQuestions.php?id=24"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('27');
									?>
									<li><a href="Questions/GenericQuestions.php?id=27"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('30');
									?>
									<li><a href="Questions/GenericQuestions.php?id=30"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('31');
									?>
									<li><a href="Questions/GenericQuestions.php?id=31"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('37');
									?>
									<li><a href="Questions/GenericQuestions.php?id=37"><?php echo $array[0] ?></a></li>
								</ul> 
							</div>

							<div class="col-sm-12">
								<a href="MonitoringCosts.php">
									<div class="questionsBox" align="center" style="background-color:lightgoldenrodyellow;text-decoration:none;color:black;">
										<h3>SEE ALL QUESTIONS OF MONITORING COSTS & PAYMENTS</h3>
									</div>
								</a>	
							</div>
						</div>

						<hr>

						<div class="row">
							<div class="col-sm-5">
								<h3 style="margin-top:15%;color:red;font-size:28px">TECHNICAL SUPPORT</h3>
							</div>
							<div class="col-sm-6 questionsBox">
								<ul>
									<?php
	$array = getAssistanceService('42');
									?>
									<li><a href="Questions/GenericQuestions.php?id=42"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('51');
									?>
									<li><a href="Questions/GenericQuestions.php?id=51"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('57');
									?>
									<li><a href="Questions/GenericQuestions.php?id=57"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('61');
									?>
									<li><a href="Questions/GenericQuestions.php?id=61"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('68');
									?>
									<li><a href="Questions/GenericQuestions.php?id=68"><?php echo $array[0] ?></a></li>
								</ul> 
							</div>

							<div class="col-sm-12">
								<a href="TechnicalSupport.php">
									<div class="questionsBox" align="center" style="background-color:lightgoldenrodyellow;text-decoration:none;color:black;">
										<h3>SEE ALL QUESTIONS OF TECHNICAL SUPPORT</h3>
									</div>
								</a>	
							</div>
						</div> 

						<hr>

						<div class="row">
							<div class="col-sm-5">
								<h3 style="margin-top:15%;color:red;font-size:28px">SMART LIFE</h3>
							</div>
							<div class="col-sm-6 questionsBox">
								<ul>
									<?php
	$array = getAssistanceService('61');
									?>
									<li><a href="Questions/GenericQuestions.php?id=61"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('67');
									?>
									<li><a href="Questions/GenericQuestions.php?id=67"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('71');
									?>
									<li><a href="Questions/GenericQuestions.php?id=71"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('73');
									?>
									<li><a href="Questions/GenericQuestions.php?id=73"><?php echo $array[0] ?></a></li>
									<?php
	$array = getAssistanceService('79');
									?>
									<li><a href="Questions/GenericQuestions.php?id=79"><?php echo $array[0] ?></a></li>
								</ul> 
							</div>

							<div class="col-sm-12">
								<a href="SmartLife.php">
									<div class="questionsBox" align="center" style="background-color:lightgoldenrodyellow;text-decoration:none;color:black;">
										<h3>SEE ALL QUESTIONS OF SMART LIFE</h3>
									</div>
								</a>	
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