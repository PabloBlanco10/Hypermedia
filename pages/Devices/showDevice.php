<!-- Description Device -->
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
		<link rel="stylesheet" type="text/css" href="../../css/device.css">
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
					<a href="../../WhoWeAre.php"><div class="topright">WHO WE ARE</div></a>
					<a href="../../MyTim.php"><div class="bottomright">MY TIM</div></a>
				</div>

			</ul>
		</div>
	</div>


	<?php
	$id = $_GET['id'];
	$array = array();
	$array = getDevice($id);
	?>

	<!-- BreadCrumbs -->
	<div class="btn-group btn-breadcrumb">
		<a href="../../index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> HOME</a> 
		<a href="../device.php" class="btn btn-default">DEVICE</a>
		<?php if($array[5] == 'MODEM & NETWORKING') : ?>
		<a href="modem.php" class="btn btn-default"><?php echo $array[5]; ?></a>
		<?php elseif($array[5] == 'TV & SMARTLIVING') : ?>
		<a href="TV.php" class="btn btn-default"><?php echo $array[5]; ?></a>
		<?php else : ?>
		<a href="../<?php echo $array[5]; ?>.php" class="btn btn-default"><?php echo $array[5]; ?></a>	
		<?php endif; ?>
		<a href="#" class="btn btn-default"><?php echo $array[0]; ?></a>


	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>
		<ul class="pagination">
			<?php if($array[5] == 'SMARTPHONE') : ?>
			<li class="active"><a href="smartphone.php">SMARTPHONE</a></li>
			<li><a href="tablet.php">TABLET</a></li>
			<li><a href="modem.php">MODEM & NETWORKING</a></li>
			<li><a href="tv.php">TV & SMARTLIVING</a></li>
			<li><a href="Outlet.php">OUTLET</a></li>

			<?php elseif($array[5] == 'TABLET') : ?>
			<li><a href="smartphone.php">SMARTPHONE</a></li>
			<li class="active"><a href="tablet.php">TABLET</a></li>
			<li><a href="modem.php">MODEM & NETWORKING</a></li>
			<li><a href="tv.php">TV & SMARTLIVING</a></li>
			<li><a href="Outlet.php">OUTLET</a></li>

			<?php elseif($array[5] == 'MODEM & NETWORKING') : ?>
			<li><a href="smartphone.php">SMARTPHONE</a></li>
			<li><a href="tablet.php">TABLET</a></li>
			<li class="active"><a href="modem.php">MODEM & NETWORKING</a></li>
			<li><a href="tv.php">TV & SMARTLIVING</a></li>
			<li><a href="Outlet.php">OUTLET</a></li>

			<?php elseif($array[5] == 'TV & SMARTLIVING') : ?>
			<li><a href="smartphone.php">SMARTPHONE</a></li>
			<li><a href="tablet.php">TABLET</a></li>
			<li><a href="modem.php">MODEM & NETWORKING</a></li>
			<li class="active"><a href="tv.php">TV & SMARTLIVING</a></li>
			<li><a href="Outlet.php">OUTLET</a></li>

			<?php else : ?>
			<li><a href="smartphone.php">SMARTPHONE</a></li>
			<li><a href="tablet.php">TABLET</a></li>
			<li><a href="modem.php">MODEM & NETWORKING</a></li>
			<li><a href="tv.php">TV & SMARTLIVING</a></li>
			<li class="active"><a href="Outlet.php">OUTLET</a></li>

			<?php endif; ?>
		</ul>

		<div class="panel panel-default">
			<div class="panel-body" align="center">
				<div class="textDevice"><p><?php echo $array[0]; ?></p></div>

				<?php
				$array = array();
				$array = getSmartLifeService('6');
				?>
				<div class="recommended" align="left">
					<a href="../SmartLifeService/Device/GenericDevice.php?id=6">
						<p><?php echo $array[0]; ?>
						</p>
					</a>	
					
					<?php
				$array = array();
				$array = getSmartLifeService('11');
				?>
					<a href="../SmartLifeService/Device/GenericDevice.php?id=11">
						<p><?php echo $array[0]; ?>
						</p>
					</a>	
					
					<?php
				$array = array();
				$array = getSmartLifeService('15');
				?>
					<a href="../SmartLifeService/Device/GenericDevice.php?id=15">
						<p><?php echo $array[0]; ?>
						</p>
					</a>	
							
					<?php
				$array = array();
				$array = getSmartLifeService('2');
				?>
					<a href="../SmartLifeService/Device/GenericDevice.php?id=2">
						<p><?php echo $array[0]; ?>
						</p>
					</a>	
					
				</div>

				<table align="center">
					<td> 
						<div class="Device" align="center">
							<img class="img-dev" src="../../php/getImageDevice.php?id=<?php echo $id ?>" style="width:330px;height:300px" alt="Device" align="center">
						</div> 
					</td>
					<?php if($array[3] != null) : ?>
					<td> 
						<h1 class="textCharacteristics">Characteristics</h1>
						<div class="Characteristics" align="left">
							<ul>
								<?php echo $array[3]; ?>
							</ul> 
						</div> 
					</td>
					<?php endif; ?>
				</table>

				<?php if($array[1] != null) : ?>
				<table align="center">
					<td>
						<div class="textBuy"><p>BUY ME</p></div>
					</td>
					<td>
						<a href="../BuyMe.php">
							<div class="prizefont"><p><?php echo $array[1]; ?> €</p></div>
						</a>
					</td>
				</table>
				<?php endif; ?>

				<?php if($array[4] != null) : ?>
				<table align="left">
					<hr>
					<td>
						<h1 class="textDetails" align="left">Details</h1>
						<div class="Details" align="left">
							<ul>
								<?php echo $array[4]; ?>
							</ul> 
						</div> 	
					</td>
				</table>
				<?php endif; ?>

				<?php if($array[1] != null) : ?>
				<table align="right">
					<td>
						<div class="textBuy"><p>BUY ME</p></div>
					</td>
					<td>
						<a href="../BuyMe.php">
							<div class="prizefont"><p><?php echo $array[1]; ?> €</p></div>
						</a>
					</td>
				</table>
				<?php endif; ?>
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
				<li><a href="../../infoRequest.php" class="text-request-info">Request Info</a></li>
				<li class="text-copyright"><p>© 2016 Politecnico di Milano</p></li>
			</ul>
		</footer>	
	</body>
</html>