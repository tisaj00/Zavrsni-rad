<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registracija</title>

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
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 remove-padding">
				<h1 class="text-center">Registracija</h1>
			</div>

			<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0 small-box">
				<form name="form1" method="post" action="registernext.php">
					<div class="form-group">
						<label>Ime:</label>
						<input class="form-control" type="text" name="name" size="15" maxlength="20" value=""/>
					</div>

					<div class="form-group">
						<label>Prezime:</label>
						<input class="form-control" type="text" name="lastname" size="15" maxlength="20" value=""/>
					</div>

					<div class="form-group">
						<label>Username:</label>
						<input class="form-control" type="text" name="username" size="15" maxlength="20" value=""/>
					</div>

					<div class="form-group">
						<label>Password:</label>
						<input class="form-control" type="password" name="pass" size="15" maxlength="20" value=""/>
					</div>

					<div class="form-group">
						<label>Confirm Password:</label>
						<input class="form-control" type="password" name="pass2" size="15" maxlength="20" value=""/>
					</div>

					<div class="form-group">
						<label>Email:</label>
						<input class="form-control" type="text" name="email" size="30" maxlength="50" value=""/>
					</div>

					<div class="form-group">
						<label>Confirm Email:</label>
						<input class="form-control" type="text" name="email2" size="30" maxlength="50" value=""/>
					</div>

					<div class="form-group">
						<input class="btn btn-primary pull-right" type="submit" name="submit" value="Register"/>
					</div>

				</form>
			</div>

		</div>
	</div>

</body>
</html>
