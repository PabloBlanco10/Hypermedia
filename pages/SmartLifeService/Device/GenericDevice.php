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
		<link rel="stylesheet" type="text/css" href="../../../css/style.css">
		<link rel="stylesheet" type="text/css" href="../../../css/styleSmartLifeService.css">
		<link rel="stylesheet" type="text/css" href="../../../css/device.css">
		<link rel="stylesheet" type="text/css" href="../../../css/styleHeader.css">
		<link rel="stylesheet" type="text/css" href="../../../css/styleFooter.css">

		<?php require_once '../../../php/ConnectionsDB.php'; ?>
	</head>


	<!-- Load header -->
	<nav class="navbar navbar-inverse" style="background-color:darkblue;" style="position:fixed">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="../../../index.php"><img id="logo" src="../../../img/Il-nuovo-Marchio-TIM_13-gennaio-2016.jpg" alt="TIM-Photo"></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">

				<ul class="nav navbar-nav">
					<li class="textHeader">
						<a href="../../device.php" style="color:blue">
							<span class="glyphicon glyphicon-phone"></span>DEVICE
						</a>
					</li>
					<li class="textHeader"><a href="../../smartLife.php" style="color:blue"><span class="glyphicon glyphicon-globe"></span> SMART LIFE SERVICE</a></li>
					<li class="textHeader"><a href="../../assistanceService.php" style="color:blue"><span class="glyphicon glyphicon-question-sign"></span>ASSISTANCE SERVICE</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="textHeader"><a href="../../WhoWeAre.php" style="color:blue"><span class="glyphicon glyphicon-user"></span> WHO WE ARE</a></li>
					<li class="textHeader"><a href="#" style="color:blue"><span class="glyphicon glyphicon-text-size"></span>IM</a></li>
				</ul>
			</div>
		</div>
	</nav>


	<?php
	$id = $_GET['id'];
	$array = array();
	$array = getSmartLifeService($id);
	?>

	<!-- BreadCrumbs -->
	<div class="btn-group btn-breadcrumb">
		<a href="../../index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> HOME</a> 
		<a href="../../smartLife.php" class="btn btn-default">SMART LIFE SERVICE</a>
		<a href="../<?php echo $array[6]; ?>.php" class="btn btn-default"><?php echo $array[6]; ?></a>
		<a href="#" class="btn btn-default"><?php echo $array[0]; ?></a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>
		<ul class="pagination">
			<?php if($array[6] == 'TV-ENTERTEIMENT') : ?>
			<li class="active"><a href="../TV-Enterteiment.php">TV & ENTERTEIMENT</a></li>
			<li><a href="../Health.php">HEALTH</a></li>
			<li><a href="../Home.php">HOME</a></li>
			<li><a href="../Person.php">PERSON</a></li>
			<?php elseif($array[6] == 'HEALTH') : ?>
			<li><a href="../TV-Enterteiment.php">TV & ENTERTEIMENT</a></li>
			<li class="active"><a href="../Health.php">HEALTH</a></li>
			<li><a href="../Home.php">HOME</a></li>
			<li><a href="../Person.php">PERSON</a></li>
			<?php elseif($array[6] == 'HOME') : ?>
			<li><a href="../TV-Enterteiment.php">TV & ENTERTEIMENT</a></li>
			<li><a href="../Health.php">HEALTH</a></li>
			<li class="active"><a href="../Home.php">HOME</a></li>
			<li><a href="../Person.php">PERSON</a></li>
			<?php else : ?>
			<li><a href="../TV-Enterteiment.php">TV & ENTERTEIMENT</a></li>
			<li><a href="../Health.php">HEALTH</a></li>
			<li><a href="../Home.php">HOME</a></li>
			<li class="active"><a href="../Person.php">PERSON</a></li>
			<?php endif; ?>
		</ul>

		<div class="panel panel-default">
			<div class="panel-body" align="center">

				<div class="col-sm-12">
					<div class="textDevice"><p><?php echo $array[0]; ?></p></div>
				</div>

				<div class="col-sm-6">
					<div class="Device">
						<img class="img-noborder img-responsive" src="../../../php/getImageSmart.php?id=<?php echo $id ?>" style="width:330px;height:300px" alt="SamsungGearS2" align="center">
					</div>
				</div>

				<div class="col-sm-6">
					<?php if($array[3] != null) : ?>
					<div class="col-sm-12">
						<h1 style="text-align:justify; text-justify: inter-word;">Characteristics</h1>
					</div>
					<div class="col-sm-12">
						<div class="Characteristics" style="text-align:justify; text-justify: inter-word;">
							<?php echo $array[3]; ?> 
						</div> 
					</div>
					<?php endif; ?>
				</div>

				<?php if($array[1] != null) : ?>
				<table align="center">
					<td>
						<div class="textBuy"><p>BUY ME</p></div>
					</td>
					<td>
						<a href="../../BuyMe.php">
							<div class="prizefont"><p><?php echo $array[1]; ?> €</p></div>
						</a>
					</td>
				</table>
				<?php endif; ?>

				<div class="col-sm-12 recommended">
					<a href="../../Recommended.php">
						<p>Our Recommended<br>Devices</p>
					</a>	
				</div>

				<div class="col-sm-12">
					<hr>
					<h1>Details</h1>
				</div>
				<div class="col-sm-12">
					<?php if($array[4] != null) : ?>
					<div class="Details" style="text-align:justify; text-justify: left;">
						<ul>
							<?php echo $array[4]; ?>
						</ul> 
					</div> 	
					<?php endif; ?>	
				</div>



				<?php if($array[5] != null) : ?>
				<table>
					<td>
						<h1 class="textDetails">How To Use it</h1>
						<div class="Details">
							<ul>
								<?php echo $array[5]; ?>
							</ul> 
						</div> 	
					</td>
				</table>
				<?php endif; ?>

				<?php if($array[1] != null) : ?>
				<table>
					<td>
						<div class="textBuy"><p>BUY ME</p></div>
					</td>
					<td>
						<a href="../../BuyMe.php">
							<div class="prizefont"><p><?php echo $array[1]; ?> €</p></div>
						</a>
					</td>
				</table>
				<?php endif; ?>
			</div>
		</div>
	</body>

	<!-- Load footer -->
	<br>
	<br>
	<div class="footer" align="center">
		<div class="col-sm-3">
			<p class="text-follow">FOLLOW US IN SOCIAL MEDIA</p>
			<img class="img-responsive" src="../../../img/Followus.png" style="width:358px;height:50px" alt="FollowUs" />
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