<!-- WebSite similar to TIM -->
<!-- Done by Pablo Blanco & Jorge Santos, students from Politecnico Di Milano -->

<!-- Device Page -->
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
		<a href="device.php" class="btn btn-default">DEVICE</a>
	</div>

	<!-- Body -->
	<body>
		<table align="center">
			<td> 		
				<a href="../pages/Devices/smartphone.php">
					<div class="imagenWithButton" align="center">
						<img class="img-responsive" src="../img/smartphones.jpg" style="width:585px;height:300px" alt="Smartphones">
						<h3>SMARTPHONE</h3>
					</div>
				</a> 
			</td>
			<td>
				<a href="../pages/Devices/tablet.php">
					<div class="imagenWithButton" align="center">
						<img class="img-responsive" src="../img/tablets%20(1).jpg" style="width:585px;height:300px" alt="Smartphones">
						<h3>TABLET</h3>	
					</div> 
				</a>
			</td>
		</table>

		<table align="center">
			<td> 
				<a href="../pages/Devices/modem.php">
					<div class="imagenWithButton" align="center">
						<img class="img-responsive" src="../img/Networking%20(1).jpg" style="width:585px;height:300px" alt="Smartphones">
						<h3>MODEM & NETWORKING</h3>	
					</div> 
				</a>
			</td>
			<td>
				<a href="../pages/Devices/tv.php">
					<div class="imagenWithButton" align="center">
						<img class="img-responsive" src="../img/tvsmartliving.jpg" style="width:585px;height:300px" alt="Smartphones">
						<h3>TV & SMARTLIFE</h3>	
					</div> 
				</a>
			</td>
		</table>
		<table align="center">
			<td> 
				<a href="../pages/Devices/Outlet.php">
					<div class="outlet" align="center">
						<img src="../img/outlet.jpg"
							  style="width:1185px;height:300px" alt="Outlet" class="img-responsive"/>
						<h3>OUTLET</h3>
					</div>
				</a>
			</td>
		</table>

		<br>
		<br>
		<div align="center" class="promotion">
			<a href="Promotions.php">
			<img src="../img/promotions.jpg"
				  style="width:400px;height:100px" alt="Promotions" class="img-responsive">
				</a>
		</div>

		<!-- Load footer -->
		<br>
		<br>
		<footer class="footer">
			<ul class="list-unstyled">
				<li><p class="text-follow">FOLLOW US IN SOCIAL MEDIA</p>
					<img src="../img/Followus.png" style="width:358px;height:50px" alt="FollowUs" />
				</li>
				<li><p class="text-contact">Contact us:</p><p> Tel.: 02 93746739<br/> Email: info@tim.it<br/> Fax: 02 93746739<br/></p>							
				</li>
				<li><a href="infoRequest.php" class="text-request-info">Request Info</a></li>
				<li class="text-copyright"><p>© 2016 Politecnico di Milano</p></li>
			</ul>
		</footer>	
	</body>
</html>