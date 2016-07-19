<!-- Smart Life - TV & ENTERTEIMENT -->
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
	</head>


	<!-- Load header -->
	<nav class="navbar navbar-inverse" style="background-color:darkblue;" style="position:fixed">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="../../index.php"><img id="logo" src="../../img/Il-nuovo-Marchio-TIM_13-gennaio-2016.jpg" alt="TIM-Photo"></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">

				<ul class="nav navbar-nav">
					<li class="textHeader">
						<a href="../device.php" style="color:blue">
							<span class="glyphicon glyphicon-phone"></span>DEVICE
						</a>
					</li>
					<li class="textHeader"><a href="../smartLife.php" style="color:blue"><span class="glyphicon glyphicon-globe"></span> SMART LIFE SERVICE</a></li>
					<li class="textHeader"><a href="../assistanceService.php" style="color:blue"><span class="glyphicon glyphicon-question-sign"></span>ASSISTANCE SERVICE</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="textHeader"><a href="../WhoWeAre.php" style="color:blue"><span class="glyphicon glyphicon-user"></span> WHO WE ARE</a></li>
					<li class="textHeader"><a href="#" style="color:blue"><span class="glyphicon glyphicon-text-size"></span>IM</a></li>
				</ul>
			</div>
		</div>
	</nav>


	<!-- BreadCrumbs -->
	<div class="btn-group btn-breadcrumb">
		<a href="../index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> HOME</a> 
		<a href="../smartLife.php" class="btn btn-default">SMART LIFE SERVICE</a>
		<a href="TV-Enterteiment.php" class="btn btn-default">TV & ENTERTEIMENT</a>
	</div>


	<!-- Body -->
	<body>
		<!-- SubMenu -->
		<br>
		<ul class="pagination">
			<li class="active"><a href="TV-Enterteiment.php">TV & ENTERTEIMENT</a></li>
			<li><a href="Health.php">HEALTH</a></li>
			<li><a href="Home.php">HOME</a></li>
			<li><a href="Person.php">PERSON</a></li>
		</ul>


		<table align="center" style="margin-top:50px">
			<td> 		
				<a href="TV/TV.php">
					<div class="imagenWithButton" align="center">
						<img class="img-responsive" src="../../img/tv-entertainment_0.jpg" style="width:1300px;height:500px" alt="TvEnterteiment" align="center">
						<h1 class="blueText"><br>Unlimited FUN</h1>
						<p class="blueText">Discover the great cinema, the most exciting series, the most loved cartoon characters, sports and more on TV, PC, tablet and smartphone</p>
						<h2 class="blueButton">Discover</h2>
					</div>
				</a> 
			</td>
		</table>

		<table align="center">
			<td> 
				<a href="#">
					<div class="imagenWithButton" align="center">
						<img class="img-responsive" src="../../img/tv_entertaiment_1.jpg" style="width:1300px;height:500px" alt="Soundtrack" align="center">
						<h1 class="yellowText">The soundtrack of your<br>LIFE</h1>
						<p class="yellowText">Listen to millions of songs streaming, all new recordings, exclusive previews and many playlist of all kinds without consuming GB, PC and tablet. When you want and how much you want</p>
						<h2 class="yellowButton">Discover</h2>	
					</div> 
				</a>
			</td>
		</table>

		<table align="center">
			<td> 
				<a href="#">
					<div class="imagenWithButton" align="center">
						<img class="img-responsive" src="../../img/tim_reading.jpg" style="width:1300px;height:500px" alt="Reading" align="center">
						<h1 class="greenText">Read when you want<br>what do you want</h1>
						<p class="greenText">Always carry on Smartphone and Tablet your favorite eBook, follow all your passions choosing among the most beloved magazine and puff. Your daily from early in the morning.</p>
						<h2 class="greenButton">Discover</h2>	
					</div> 
				</a>
			</td>
		</table>
	</body>
	<!-- Load footer -->
	<br>
	<br>
	<div class="footer" align="center">
		<div class="col-sm-3">
			<p class="text-follow">FOLLOW US IN SOCIAL MEDIA</p>
			<img class="img-responsive" src="../../img/Followus.png" style="width:358px;height:50px" alt="FollowUs" />
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