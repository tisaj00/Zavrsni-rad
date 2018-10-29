<?php
  include('session.php');
?>
<!DOCTYPE html>
<html lang="hr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Završni rad</title>

  <!-- Browser icon -->
  <link rel="shortcut icon" href="img/favicon.png">

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,latin-ext" rel="stylesheet" type="text/css">

</head>

<body class="naslovna">
	<div class="container">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 remove-padding">

					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 remove-padding">
            <h1>Web aplikacija za dostavu paketa</h1>
					</div>

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 remove-padding">
            <h2 class="text-right">
              <?php echo $login_session; ?>
              <a href="logout.php" class="btn btn-primary btn-lg pull-right">Odjava</a>
            </h2>
					</div>

				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20 remove-padding">
					<a href="slanje_paketa.php" class="btn btn-primary btn-lg pull-left">Slanje paketa</a>
          <a href="admin/admin_login.php" class="btn btn-primary btn-lg pull-left">Kutak za admine</a>
					<a href="driver/driver_login.php" class="btn btn-primary btn-lg pull-left">Kutak za vozače</a>
				</div>

				<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0 small-box">
					<a href="http://www.etfos.unios.hr/" title="FERIT" rel="nofollow" target="_blank">
						<img src="img/ferit.jpg" class="img-responsive">
          </a>
					<div class="text-center">
						<h2>Fakultet elektrotehnike, računarstva i informacijskih tehnologija Osijek</h2>
						<h3>Završni rad Josipa Tisaja i Luke Roguljića</h3>
          </div>
					</div>

				</div>

			</div>
		</div>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>

</body>

</html>
