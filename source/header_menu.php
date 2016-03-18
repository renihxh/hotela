<!doctype html>
<html lang="en-US">
  <head>
  <!-- Meta -->
  <meta charset="UTF-8">
  <title>Hotel Amburgo</title>
  <meta name="keywords" content="Portfolio, Atis, Web, Development, graphic, design">
  <meta name="description" content="This is ATIS design template">
  <meta name="author" content="ATIS">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- link -->
    <link rel="stylesheet" href="tools/owl.carousel.css">
    <link rel="stylesheet" href="tools/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="tools/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="tools/datepicker/css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="tools/font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="style/header_footer.css">
    <link rel="stylesheet" type="text/css" href="style/rooms.css">
    <link rel="stylesheet" type="text/css" href="style/contatti_style.css">
    <link rel="stylesheet" type="text/css" href="style/prezzi.css">
    <!-- <link rel="stylesheet" href="style/jquery-ui.css"> -->
    <link rel="stylesheet" type="text/css" href="style/index_style.css">
<?php   if (($_SERVER['REQUEST_URI']=='/Hotel_Amburgo/prezzi.php')): ?>   
	<link rel="stylesheet" type="text/css" href="style/prezzi-head.css">
<?php endif; ?>
    <style type="text/css">

    </style>
  </head>
<body>
<div class="row header">
<?php   if (($_SERVER['REQUEST_URI']=='/Hotel_Amburgo/prezzi.php')): ?>
		<div class="col-xs-4 col-sm-2 col-md-2 col-lg-3 col-logo1">
		<div class="headlogo-prezzi">
			<img src="images/logo-prezzi.png" alt="logo" class="logo">
		</div>
	</div>
<?php endif; ?>
	<div class="col-xs-4 col-sm-2 col-md-2 col-lg-3 col-logo">
		<div class="headlogo">
			<img src="images/logo.png" alt="logo" class="logo">
			<div class="logo_content">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<sup>s</sup>
				<h2>hotel<br>amburgo</h2>
			</div>
		</div>
	</div>
	<div class="col-xs-3 col-sm-8 col-md-7 col-lg-6 col-menu">
		<nav class="navbar navbar-default navbar-menu">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#home-nav" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse collaspe-costume" id="home-nav">
				<ul class="language">
					<li><a href="#">IT</a></li>
					<li><a href="#">EN</a></li>
					<li><a href="#">DE</a></li>
					<li><a href="#">FR</a></li>
				</ul>
				<ul class="nav navbar-nav li-costume" id="nav">
					<li><a href="index.php">home</a></li>
					<li><a href="#">hotel</a></li>
					<li><a href="rooms.php">camere</a></li>
					<li><a href="#">servizi</a></li>
					<li><a href="cucina.php">cucina</a></li>
					<li><a href="prezzi.php">prezzi</a></li>
					<li><a href="contatti.php">contatti</a></li>
					<li class="last-li"><a href="blog.php">blog</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="col-xs-5 col-sm-2 col-md-3 col-lg-3 pull-right col-dispo">
		<div class="btn-group v-disponibla">
			<button type="button" class="btn def btn-default dropdown-toggle larg-show" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="hide-dis">verifica </span>disponibilita<i class="fa fa-check"></i>
			</button>
			<button type="button" class="btn def btn-default dropdown-toggle small-show" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">disponibilita <i class="fa fa-check"></i>
			</button>
			<div class="dropdown-verifica dropdown-menu pull-right  ">
				<div class="row row-verifica">
					<div class="col-lg-12 col-check">
						<div class="col-lg-6 arrivo-side">
							<h3>arrivo</h3>
							<form class="form-inline">
								<div class="form-group">
									<div class="input-group">
										<input id="disabledInput dp1" class="form-control datepickercls" type="text" value="02-16-2012" disabled>
										<div class="input-group-addon datepickerclsbtn"><i class="fa fa-calendar"></i></div>
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-6 partenza-side">
							<h3>partenza</h3>
							<form class="form-inline">
								<div class="form-group">
									<div class="input-group">
										<input id="disabledInput dp1" class="form-control datepickercls1" type="text" value="02-16-2012" disabled>
										<div class="input-group-addon datepickerclsbtn1"><i class="fa fa-calendar"></i></div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-12 room-size">
						<div class="col-sm-4 col-md-4 col-lg-4 col-cos">
							<h3>adulti</h3>
								<div class="select-option">
									<select class="form-control costum-select">
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									</select>
								</div>
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 col-cos">
							<h3>bambini</h3>
								<div class="select-option">
									<select class="form-control costum-select">
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									</select>
								</div>
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 col-cos">
							<h3>camere</h3>
								<div class="select-option">
									<select class="form-control costum-select">
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									</select>
								</div>
						</div>
					</div>
					<div class="col-lg-12 trattamento-cost">
						<h3>trattamento</h3>
								<div class="select-option2">
									<select class="form-control costum-select">
									  <option>Colazione e Pernottamento</option>
									  <option>Colazione</option>
									  <option>Pernottamento</option>
									</select>
								</div>
					</div>
					<div class="col-lg-12 nome-email">
						<h3>nome e cognome</h3>
						<div class="input-group nome-group">
			                <input type="text" class="form-control nome-text"  aria-describedby="basic-addon2">
			            </div>
			            <h3>email</h3>
						<div class="input-group email-group">
			                <input type="text" class="form-control email-text"  aria-describedby="basic-addon2">
			            </div>
					</div>
					<div class="col-lg-12">
						<div class="btn-reg">
		                  <button>invia richiesta</button>
		              	</div>
		            </div>
		            <div class="col-lg-12 col-prenota">
						<div class="btn-prenota">
		                  <button>oppure prenota online</button>
		              	</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

