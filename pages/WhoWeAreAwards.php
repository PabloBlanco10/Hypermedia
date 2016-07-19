<!-- Who We Are Page - Awards-->

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

		<?php require_once '../php/ConnectionsDB.php'; ?>
	</head>

	<!-- Load header -->
	<nav class="navbar navbar-inverse" style="background-color:darkblue;" style="position:fixed">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="../index.php"><img id="logo" src="../img/Il-nuovo-Marchio-TIM_13-gennaio-2016.jpg" alt="TIM-Photo"></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">

				<ul class="nav navbar-nav">
					<li class="textHeader">
						<a href="device.php" style="color:blue">
							<span class="glyphicon glyphicon-phone"></span>DEVICE
						</a>
					</li>
					<li class="textHeader"><a href="smartLife.php" style="color:blue"><span class="glyphicon glyphicon-globe"></span> SMART LIFE SERVICE</a></li>
					<li class="textHeader"><a href="assistanceService.php" style="color:blue"><span class="glyphicon glyphicon-question-sign"></span>ASSISTANCE SERVICE</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="textHeader"><a href="WhoWeAre.php" style="color:blue"><span class="glyphicon glyphicon-user"></span> WHO WE ARE</a></li>
					<li class="textHeader"><a href="#" style="color:blue"><span class="glyphicon glyphicon-text-size"></span>IM</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- BreadCrumbs -->
	<div class="btn-group btn-breadcrumb">
		<a href="../index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> HOME</a>
		<a href="WhoWeAre.php" class="btn btn-default">Who we are</a>
	</div>

	<!-- Body -->
	<body>
		<br>
		<ul class="pagination" align="center">
			<li><a href="WhoWeAre.php">HISTORY</a></li>
			<li><a href="WhoWeArePresentation.php">PRESENTATION</a></li>
			<li class="active"><a href="WhoWeAreAwards.php">AWARDS</a></li>
		</ul>

		<div class="panel panel-default">
			<div class="panel-body" align="center">
				<br>
				<div class="initialTextWhoWeAre" align="center">Nº1 FOR NETWORK COVERAGE </div>
				<div class="container">
					<div class="row" align="center">
						<div align="center">
							<?php
							$array = array();
							$array = getWhoWeAre('7');
							?>
							<img src="../php/getImageWhoWeAre.php?id=7" id="whoWeAre" alt="whoWeAre" class="img-responsive" style="width:650px;height:120px">
						</div>			
					</div>

				</div>
				<div class="former">
					<?php echo $array[1]; ?>
				</div>

				<br>
				<br>
				<div class="initialTextWhoWeAre" align="center">Nº1 FOR NETWORK COVERAGE </div>
				<div class="container">
					<div class="row" align="center">
						<div align="center">
							<?php
							$array = array();
							$array = getWhoWeAre('8');
							?>
							<img src="../php/getImageWhoWeAre.php?id=8" id="whoWeAre" alt="whoWeAre" class="img-responsive" style="width:650px;height:120px">
						</div>			
					</div>

				</div>
				<div class="former">
					<?php echo $array[1]; ?>
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
			<img class="img-responsive" src="../img/Followus.png" style="width:358px;height:50px" alt="FollowUs" />
		</div>
		<div class="col-sm-3">
			<p class="text-contact">Contact us:</p><p> Tel.: 02 93746739<br/> Email: info@tim.it<br/> Fax: 02 93746739<br/></p>
		</div>
		<div class="col-sm-3">
			<a href="infoRequest.php" class="text-request-info">Request Info</a>
		</div>
		<div class="col-sm-3">
			<p class="text-copyright">© 2016 Politecnico di Milano</p>
		</div>
	</div>

</html>