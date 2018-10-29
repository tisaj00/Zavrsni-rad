<?php
   //include('session.php');
?>
<!DOCTYPE html>
<html lang="hr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Slanje paketa</title>

  <!-- Browser icon -->
  <link rel="shortcut icon" href="img/favicon.png">

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,latin-ext" rel="stylesheet" type="text/css">

</head>

<body class="slanje-paketa naslovna">
	<div class="container">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box">

        <h1>Slanje paketa</h1>

				<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0 small-box">

					<form name="form2" method="post" action="order_script.php">

						<h2>Pošiljatelj</h2>
						<div class="form-group">
              <label>Grad/Mjesto:</label>
              <input class="form-control" type="text" name="city" size="25" maxlength="20" value=""/>
            </div>

						<div class="form-group">
              <label>Kontakt broj:</label>
              <input class="form-control" type="text" name="contact" size="25" maxlength="20" value=""/>
            </div>

						<div class="form-group">
              <label>Adresa:</label>
              <input class="form-control" type="text" name="adress" size="25" maxlength="100" value=""/>
            </div>

						<!--select for box_size-->
						<div class="form-group">
							<label>Brzina dostave/Prioritet:</label>
							<select name="priority" class="form-control">
								<option value="Da">Da</option>
								<option value="Ne">Ne</option>
							</select>
						</div>

						<div class="form-group">
              <label>Veličina kutije</label>
							<select name="box_size" class="form-control">
								<option value="sm">1*1*1</option>
								<option value="md">2*2*2</option>
								<option value="lg">3*3*3</option>
								<option value="xl">4*4*4</option>
							</select>
						</div>

						<h2 class="mt40">Primatelj</h2>
						<div class="form-group">
              <label>Ime:</label>
              <input class="form-control" type="text" name="name" size="25" maxlength="20" value=""/>
            </div>

						<div class="form-group">
              <label>Prezime:</label>
              <input class="form-control" type="text" name="lname" size="25" maxlength="20" value=""/>
            </div>

						<div class="form-group">
              <label>Adresa:</label>
              <input class="form-control" type="text" name="del_adress" size="25" maxlength="40" value=""/>
            </div>

						<div class="form-group">
              <label>Poštanski broj:</label>
              <input class="form-control" type="text" name="pob" size="25" maxlength="20" value=""/>
            </div>

						<!--Price of delivery hidden -->
						<div class="form-group mt20 text-right">
							<input type="hidden" name="price" value="" size="25">
							<input class="btn btn-primary" type="submit" name="order" value="Naruči"/>
							<a class="btn btn-default" href="index.php">Odustani</a>
						</div>

					</form>

					<form method="POST" action="print.php">
						<input type="SUBMIT" class="btn btn-default pull-left" name="povijest" value="Povijest">
					</form>
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
