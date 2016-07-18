<!-- PROMOTIONS -->
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
		<script src="../javascript/script.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/styleAssistance.css">
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
		<a href="Promotions.php" class="btn btn-default">PROMOTIONS</a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>
		<ul>
			
			<div align="center" class="promotion">
			<img src="../img/promotionsdown.png"
				  style="width:400px;height:100px" alt="Promotions" class="img-responsive">
		</div>		
		</ul>
		
	

		<div class="panel panel-primary">
			  <div class="panel-heading">DEVICES</div>

			<div class="panel-body">
				
					<table align="center">
			<td> 
				<?php
					$array = array();
					$array = getDevice('1');
					?>
				<a href="../pages/Devices/showDevice.php?id=1">
					<div class="imagenWithButton" align="center">
						<img class="img-noborder" src="../php/getImageDevice.php?id=1" style="width:300px;height:250px" alt="Promotion">
					</div> 
				</a>
				
					<div class="itemfont" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1] + 100 ; ?> € </p>
				</div>
				<div class="fontprizereal" ><p>
					<?php echo $array[1] ; ?> € </p>
				</div>
			</td>
						<td> 
				<?php
					$array = array();
					$array = getDevice('5');
					?>
				<a href="../pages/Devices/showDevice.php?id=5">
					<div class="imagenWithButton" align="center">
						<img class="img-noborder" src="../php/getImageDevice.php?id=5" style="width:300px;height:250px" alt="Promotion">
					</div> 
				</a>
				
					<div class="itemfont" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1] + 100 ; ?> € </p>
				</div>
				<div class="fontprizereal" ><p>
					<?php echo $array[1] ; ?> € </p>
				</div>
			</td>
						<td> 
				<?php
					$array = array();
					$array = getDevice('13');
					?>
				<a href="../pages/Devices/showDevice.php?id=13">
					<div class="imagenWithButton" align="center">
						<img class="img-noborder" src="../php/getImageDevice.php?id=13" style="width:300px;height:250px" alt="Promotion">
					</div> 
				</a>
				
					<div class="itemfont" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1] + 100 ; ?> € </p>
				</div>
				<div class="fontprizereal" ><p>
					<?php echo $array[1] ; ?> € </p>
				</div>
			</td>
						<td> 
				<?php
					$array = array();
					$array = getDevice('19');
					?>
				<a href="../pages/Devices/showDevice.php?id=19">
					<div class="imagenWithButton" align="center">
						<img class="img-noborder" src="../php/getImageDevice.php?id=19" style="width:300px;height:250px" alt="Promotion">
					</div> 
				</a>
				
					<div class="itemfont" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1] + 100 ; ?> € </p>
				</div>
				<div class="fontprizereal" ><p>
					<?php echo $array[1] ; ?> € </p>
				</div>
			</td>
			
				</table>
				
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				
			</div>
		</div>
		
		
		
		<div class="panel panel-primary">
			  <div class="panel-heading">SMART LIFE SERVICES</div>

			<div class="panel-body">
				
					<table align="center">
			<td> 
				<?php
					$array = array();
					$array = getSmartLifeService('8');
					?>
				<a href="../pages/SmartLifeService/Device/GenericDevice.php?id=8">
					<div class="imagenWithButton" align="center">
						<img class="img-noborder" src="../php/getImageSmart.php?id=8" style="width:300px;height:250px" alt="Promotion">
					</div> 
				</a>
				
					<div class="itemfontSL" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1] + 100 ; ?> € </p>
				</div>
				<div class="fontprizereal" ><p>
					<?php echo $array[1] ; ?> € </p>
				</div>
			</td>
					<td> 
				<?php
					$array = array();
					$array = getSmartLifeService('7');
					?>
				<a href="../pages/SmartLifeService/Device/GenericDevice.php?id=7">
					<div class="imagenWithButton" align="center">
						<img class="img-noborder" src="../php/getImageSmart.php?id=7" style="width:300px;height:250px" alt="Promotion">
					</div> 
				</a>
				
					<div class="itemfontSL" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1] + 100 ; ?> € </p>
				</div>
				<div class="fontprizereal" ><p>
					<?php echo $array[1] ; ?> € </p>
				</div>
			</td>
					<td> 
				<?php
					$array = array();
					$array = getSmartLifeService('14');
					?>
				<a href="../pages/SmartLifeService/Device/GenericDevice.php?id=14">
					<div class="imagenWithButton" align="center">
						<img class="img-noborder" src="../php/getImageSmart.php?id=14" style="width:300px;height:250px" alt="Promotion">
					</div> 
				</a>
				
					<div class="itemfontSL" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1] + 100 ; ?> € </p>
				</div>
				<div class="fontprizereal" ><p>
					<?php echo $array[1] ; ?> € </p>
				</div>
			</td>
					<td> 
				<?php
					$array = array();
					$array = getSmartLifeService('1');
					?>
				<a href="../pages/SmartLifeService/Device/GenericDevice.php?id=1">
					<div class="imagenWithButton" align="center">
						<img class="img-noborder" src="../php/getImageSmart.php?id=1" style="width:300px;height:250px" alt="Promotion">
					</div> 
				</a>
				
					<div class="itemfontSL" ><p>
					<?php echo $array[0] ?></p>
				</div>
				<div class="fontprize" ><p>
					<?php echo $array[1] + 100 ; ?> € </p>
				</div>
				<div class="fontprizereal" ><p>
					<?php echo $array[1] ; ?> € </p>
				</div>
			</td>
						
			
				</table>
				
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				
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
				<img src="../img/Followus.png" style="width:358px;height:50px" alt="FollowUs" />
			</li>
			<li><p class="text-contact">Contact us:</p><p> Tel.: 02 93746739<br/> Email: info@tim.it<br/> Fax: 02 93746739<../p>							
			</li>
			<li><a href="infoRequest.php" class="text-request-info">Request Info</a></li>
			<li class="text-copyright"><p>© 2016 Politecnico di Milano</p></li>
		</ul>
	</footer>	
	</body>
</html>

<script>
	function myFunction() {

	}
</script>