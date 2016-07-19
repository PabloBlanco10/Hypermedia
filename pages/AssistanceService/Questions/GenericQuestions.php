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
		<link rel="stylesheet" type="text/css" href="../../../css/StyleAssistance.css">
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
	$array = getAssistanceService($id);
	?>

	<!-- BreadCrumbs -->
	<div class="btn-group btn-breadcrumb">
		<a href="../../index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> HOME</a> 
		<a href="../../assistanceService.php" class="btn btn-default">ASSISTANCE SERVICE</a>
		<a href="#" class="btn btn-default"><?php echo $array[1]; ?></a>
		<a href="#" class="btn btn-default"><?php echo $array[0]; ?></a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>
		<ul class="pagination">
			<?php if($array[1] == 'LINE MANAGEMENT') : ?>
			<li class="active"><a href="../LineManagement.php">LINE MANAGEMENT</a></li>
			<li><a href="../MonitoringCosts.php">MONITORING COSTS & PAYMENTS</a></li>
			<li><a href="../TechnicalSupport.php">TECHNICAL SUPPORT</a></li>
			<li><a href="../SmartLife.php">SMART LIFE</a></li>
			<?php elseif($array[1] == 'MONITORING COSTS & PAYMENTS') : ?>
			<li><a href="../LineManagement.php">LINE MANAGEMENT</a></li>
			<li class="active"><a href="../MonitoringCosts.php">MONITORING COSTS & PAYMENTS</a></li>
			<li><a href="../TechnicalSupport.php">TECHNICAL SUPPORT</a></li>
			<li><a href="../SmartLife.php">SMART LIFE</a></li>
			<?php elseif($array[1] == 'TECHNICAL SUPPORT') : ?>
			<li><a href="../LineManagement.php">LINE MANAGEMENT</a></li>
			<li><a href="../MonitoringCosts.php">MONITORING COSTS & PAYMENTS</a></li>
			<li  class="active"><a href="../TechnicalSupport.php">TECHNICAL SUPPORT</a></li>
			<li><a href="../SmartLife.php">SMART LIFE</a></li>
			<?php else : ?>
			<li><a href="../LineManagement.php">LINE MANAGEMENT</a></li>
			<li><a href="../MonitoringCosts.php">MONITORING COSTS & PAYMENTS</a></li>
			<li><a href="../TechnicalSupport.php">TECHNICAL SUPPORT</a></li>
			<li class="active"><a href="../SmartLife.php">SMART LIFE</a></li>
			<?php endif; ?>
		</ul>

		<div class="panel panel-default">
			<div class="panel-body" align="center">
				<div class="textDevice"><p><?php echo $array[0]; ?></p></div>

				<!-- DESCRIPTION -->
				<?php if($array[2] != null) : ?>
				<div class="col-sm-4">
					<h2>DESCRIPTION</h2>
				</div>
				<div class="col-sm-12 questionsBox" style="text-align:justify; text-justify: inter-word;">
					<p><?php echo $array[2]; ?></p>	
				</div>
				<?php endif; ?>

				<!-- FREQUENTLY QUESTIONS -->
				<?php if($array[3] != null) : ?>
				<div class="col-sm-6">
					<h2>FREQUENTLY QUESTIONS</h2>
				</div>
				<div class="col-sm-12 questionsBox" style="text-align:justify; text-justify: inter-word;">
					<p><?php echo $array[3]; ?></p>	
				</div>
				<?php endif; ?>

				<!-- Buttons -->
				<div class="col-sm-12" align="center">
					<?php if($id > 1) : ?>
					<a href="GenericQuestions.php?id=<?php echo $id-1?>" class="btn btn-default"> <span class="glyphicon glyphicon-chevron-left"></span> PREVIOUS QUESTION</a>
					<?php endif; ?>

					<?php if($id < 79) : ?>
					<a class="btn btn-default" href="GenericQuestions.php?id=<?php echo $id+1?>">NEXT QUESTION <span class="glyphicon glyphicon-chevron-right"></span></a>
					<?php endif; ?>
				</div>

				<!-- RECOMMENDED DEVICES -->
				<div class="col-sm-12 recommended" align="left">
					<a href="../../Recommended.php">
						<p>Our Recommended<br>Devices</p>
					</a>	
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