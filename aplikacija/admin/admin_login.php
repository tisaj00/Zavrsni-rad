<?php
//include('admin_session.php');
?>
<!DOCTYPE html>
<html lang="hr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin</title>

	<!-- Browser icon -->
  <link rel="shortcut icon" href="../img/favicon.png">

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../css/style.css" rel="stylesheet">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,latin-ext" rel="stylesheet" type="text/css">

</head>
<body class="prijava">
	<a id="toregister" class="hidden"></a>
    <a id="tologin" class="hidden"></a>
	<div id="wrapper">
		<div id="login">
			<form autocomplete="on" action="admin_script.php" method="POST">
				<h1>Prijava</h1>
				<p class="margin100">
					<input type="text" name="username" required placeholder="Korisničko ime"/>
                </p>
				<p class="margin100">
                    <input type="password" name="password" required placeholder="Lozinka"/>
                </p>
                <p>
                   	<input class="btn" type="submit" name="login" value="Prijava"/>
                </p>
				<p class="margin100">
                	 <a href="../index.php">Povratak na početnu stranicu</a>
                </p>
			</form>
		</div>
		</div>

	<!-- jQuery -->
	<script src="../js/jquery.js"></script>

	<!-- Bootstrap -->
  <script src="../js/bootstrap.min.js"></script>

	</body>

</html>
