<!DOCTYPE html>
<html lang="hr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registracija</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Browser icon -->
  <link rel="shortcut icon" href="img/favicon.png">

	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,latin-ext" rel="stylesheet" type="text/css">

</head>
<body class="registracija">

	<div id="register">
        	<form autocomplete="on" action="registernext.php" method="post">
            	<h1>Registracija</h1>

                <p class="margin100">
					<input type="text" name="name" required  placeholder="Ime"/>
                </p>
                <p class="margin100">
					<input type="text" name="lastname" required placeholder="Prezime"/>
                </p>
				<p class="margin100">
                    <input type="text" name="username" required
                     placeholder="Korisnicko ime" id="username"/>
                     <span id="user_result"></span>
                </p>
				<p class="margin100">
                    <input type="password" name="pass" required id="p1" placeholder="Lozinka"/>
                </p>
				<p class="margin100">
                    <input type="password" name="pass2" required id="p2" placeholder="Ponovljena lozinka" onkeyup="checkPassword()">
                </p>
				<p class="margin100">
                    <input type="text" name="email" required placeholder="Email" id="email"/>
                </p>
				<p class="margin100">
                    <input type="text" name="email2" required placeholder="Ponovljen email" id="email"/>
                </p>
                <p>
                	<input class="btn" type="submit" value="Registracija" id="regButton" action="registernext.php"/>
                </p>
        	    <p class="margin100">
                	Već imate račun? <a href="prijava.php">Prijavite se</a>
                </p>

                <input type="hidden" name="what" value="register"/>
            </form>
    	</div>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function(){
			$("#link_to_register, #link_to_login").click(function(){
				$("#login").slideToggle(300);
				$("#register").slideToggle(300);
			});
		});
	</script>

</body>

</html>
