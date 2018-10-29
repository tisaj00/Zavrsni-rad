<!DOCTYPE html>
<html lang="hr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin | Povijest</title>

  <!-- Browser icon -->
  <link rel="shortcut icon" href="../img/favicon.png">

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../css/style.css" rel="stylesheet">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,latin-ext" rel="stylesheet" type="text/css">

</head>

<body class="naslovna">
	<div class="container">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 remove-padding">

					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 remove-padding">
            <h1>Kontrolna ploča admina</h1>
					</div>

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 remove-padding">
            <a href="admin.php" class="btn btn-primary pull-right">Natrag</a>
					</div>

				</div>

				<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0 small-box">
          <h1>Povijest</h1>
          <?php
            include('../connection.php');
            $sql="SELECT username AS KORISNIK, city AS GRAD, contact AS MOJ_KONTAKT, adress AS MOJA_ADRESA,name AS IME , del_adress AS DESTINACIJA, date AS DATUM, pob AS PBROJ, price AS CIJENA FROM orders ";
            $result = mysqli_query($dbc,$sql);
            if (!$result) {
                die("Query to show fields from table failed");
            }

            $fields_num = mysqli_num_fields($result);

            echo "<table class='table table-bordered table-responsive'><tr>";
            // printing table headers
            for($i=0; $i<$fields_num; $i++)
            {
                $field = mysqli_fetch_field($result);
                echo "<td>$field->name</td>";
            }
            echo "</tr>\n";
            // printing table rows
            while($row = mysqli_fetch_row($result))
            {
                echo "<tr>";

                // $row is array... foreach( .. ) puts every element
                // of $row to $cell variable
                foreach($row as $cell)
                    echo "<td>$cell</td>";

                echo "</tr>\n";
            }
            mysqli_free_result($result);
          ?>
				</div>

			</div>
		</div>

	<!-- jQuery -->
	<script src="../js/jquery.js"></script>

	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>

</body>

</html>
