<!DOCTYPE html>
<html lang="hr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Slanje paketa</title>

	<!-- Browser icon -->
  <link rel="shortcut icon" href="../img/favicon.png">

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../css/style.css" rel="stylesheet">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,latin-ext" rel="stylesheet" type="text/css">
</head>

<body class="naslovna slanje-paketa">
	<div class="container">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 remove-padding">

					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 remove-padding">
            <h1>Dobrodošli, <?php echo "Vozač"; ?></h1>
					</div>

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 remove-padding">
            <a href="../logout.php" class="btn btn-primary btn-lg pull-right">Odjava</a>
					</div>

				</div>

				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 small-box">

					<form method="POST" action="driver_print.php">
						<input type="SUBMIT" class="btn btn-default" name="povijest" value="DESTINACIJE">
					</form>

				</div>

			</div>

		</div>
	</div>

	<!-- jQuery -->
	<script src="../js/jquery.js"></script>

	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>

</body>

</html>
