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
		<a href="LineManagement.php" class="btn btn-default">TECHNICAL SUPPORT</a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>
		<ul class="pagination">
			<li><a href="LineManagement.php">LINE MANAGEMENT</a></li>
			<li><a href="MonitoringCosts.php">MONITORING COSTS & PAYMENTS</a></li>
			<li class="active"><a href="TechnicalSupport.php">TECHNICAL SUPPORT</a></li>
			<li><a href="SmartLife.php">SMART LIFE</a></li>
		</ul>

		<br>

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="container">
					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:12%;color:red;font-size:28px">SMARTPHONE & TABLET</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<li><a href="#">Specialized technical assistance with SOSsmartphone</a></li>
								<li><a href="#">Discount voucher for return phone</a></li>
								<li><a href="#">Specialized technical assistance with SOS PC</a></li>
								<li><a href="#">Maps on your mobile phone service</a></li>
								<li><a href="#">TIM application store</a></li>
							</ul> 
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:15%;color:red;font-size:28px">PHONE LINE</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<li><a href="#">Memotel</a></li>
								<li><a href="#">Waiting for Call</a></li>
								<li><a href="#">Call transfer</a></li>
								<li><a href="#">Disable Call</a></li>
								<li><a href="#">Guides home products not traded</a></li>
							</ul> 
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:15%;color:red;font-size:28px">ADSL AND FIBER</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<li><a href="#">How to call</a></li>
								<li><a href="#">How to navigate</a></li>
								<li><a href="#">Most frequent problems</a></li>
								<li><a href="#">Fiber modem manual</a></li>
								<li><a href="#">The fiber service features</a></li>
							</ul> 
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-sm-5">
							<h3 style="margin-top:15%;color:red;font-size:28px">NAVIGATION</h3>
						</div>
						<div class="col-sm-6 questionsBox">
							<ul>
								<li><a href="#">I do not connect to the Internet</a></li>
								<li><a href="#">Get disconnected</a></li>
								<li><a href="#">Slowly navigation</a></li>
								<li><a href="#">Cannot Navigate</a></li>
								<li><a href="#">Dial-up connection problems</a></li>
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
