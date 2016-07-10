<!-- Smart Life - Health -->
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
		<script src="script.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="styleSmartLifeService.css">
		<link rel="stylesheet" type="text/css" href="styleHeader.css">
		<link rel="stylesheet" type="text/css" href="styleFooter.css">

		<?php require_once '../../php/ConnectionsDB.php'; ?>
	</head>


	<!-- Load header -->
	<div class="header">	
		<figure><a href="../index.html"><img id="logo" src="../../img/Il-nuovo-Marchio-TIM_13-gennaio-2016.jpg" alt="TIM-Photo"></a></figure>

		<div align="center">		
			<ul class="nav nav-tabs" id="landmarks">
				<li><figure align="center"><a href="../device.html"><img src="../../img/Devices.jpg" id="device" alt="Device">
					<figcaption>DEVICE</figcaption></a></figure>
				</li>

				<li>
					<figure><a href="../smartLife.html"><img src="../../img/SL.jpg" id="smartlife" alt="Smart Life Service">
						<figcaption>SMART LIFE SERVICE</figcaption></a></figure>
				</li>

				<li>
					<figure><a href="../assistanceService.html"><img src="../../img/Assistance%20Service.PNG" id="assistance" alt="Assistance-Service">
						<figcaption>ASSISTANCE SERVICE</figcaption></a></figure>
				</li>

				<div class="container">
					<a href="../WhoWeAre.html"><div class="topright">WHO WE ARE</div></a>
					<a href="../MyTim.html"><div class="bottomright">MY TIM</div></a>
				</div>

			</ul>
		</div>
	</div>

	<!-- BreadCrumbs -->
	<div class="btn-group btn-breadcrumb">
		<a href="../index.html" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> HOME</a> 
		<a href="../smartLife.html" class="btn btn-default">SMART LIFE SERVICE</a>
		<a href="Health.html" class="btn btn-default">HEALTH</a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>
		<ul class="pagination">
			<li><a href="TV-Enterteiment.html">TV & ENTERTEIMENT</a></li>
			<li class="active"><a href="Health.html">HEALTH</a></li>
			<li><a href="Home.html">HOME</a></li>
			<li><a href="Person.html">PERSON</a></li>
		</ul>


		<table align="center" style="margin-top:50px">
			<td> 		
				<div class="textLeft"><p>Check out or last wearables. Find out how health and wellness can positively change your life. Free your desire to move. Share your results with friends. The future is smart.</p>
				</div>
			</td>	
			<td> 		
				<div class="imagenWithButton" align="center">
					<img class="img-responsive" src="../../img/corriendo.jpg" style="width:730px;height:330px" alt="TvEnterteiment" align="center">
				</div> 
			</td>
		</table>

		<table align="center">
			<td> 
				<a href="#">
					<div class="imagenWithButton" align="center">
						<?php
						$array = array();
						$array = getDevice('5');
						?>
						<img class="img-responsive" src="../../Db/getImage.php?id=5" style="width:250px;height:200px" alt="SamsungGearS2" align="center">
						<figcaption class="textFigure">
							<?php echo $array[0]; ?>
						</figcaption>
					</div> 
				</a>
			</td>
			<td> 
				<a href="#">
					<div class="imagenWithButton" align="center">
						<?php
						$array = array();
						$array = getDevice('6');
						?>
						<img class="img-responsive" src="../../Db/getImage.php?id=6" style="width:250px;height:200px" alt="Loop" align="center">
						<figcaption class="textFigure">
							<?php echo $array[0]; ?>
						</figcaption>
					</div> 
				</a>
			</td>
			<td> 
				<a href="#">
					<div class="imagenWithButton" align="center">
						<?php
						$array = array();
						$array = getDevice('7');
						?>
						<img class="img-responsive" src="../../Db/getImage.php?id=7" style="width:250px;height:200px" alt="GalaxyGearFit" align="center">
						<figcaption class="textFigure">
							<?php echo $array[0]; ?>
						</figcaption>
					</div> 
				</a>
			</td>
			<td> 
				<a href="#">
					<div class="imagenWithButton" align="center">
						<img class="img-responsive" src="../../img/Smartband%20FE.jpg" style="width:250px;height:200px" alt="Smartband" align="center">
						<figcaption class="textFigure">Smartband FE</figcaption>
					</div> 
				</a>
			</td>
		</table>

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
				<li><a href="../infoRequest.html" class="text-request-info">Request Info</a></li>
				<li class="text-copyright"><p>© 2016 Politecnico di Milano</p></li>
			</ul>
		</footer>	
	</body>
</html>
