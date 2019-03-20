<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdfupload";

// Create connection
$dbh = new PDO("mysql:host=localhost;dbname=pdfupload;charset=utf8", $username, $password);

 
$sql = $dbh->prepare("select * from (SELECT *FROM pdfformupload ORDER BY id desc) T where probcomesunder='Electronics Engineering'");
$sql->execute();

?>



<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.ico"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
		body {
			padding-top: 70px;
			background-image: url('media/background1.jpg');
		}
		.jumbotron {
			color: #284738;
			background: #dce2df;
		}

		.navbar-inverse {
			background: #284738;
		}

		.navbar-inverse .navbar-nav>li>a {
			color: #e0fff0;
		}

		.navbar-inverse .navbar-brand {
			color: #e0fff0;
		}

		.flex {
		  display: flex;
		  flex-wrap: wrap;
		}

		</style>

</head>
<body>
	<div class="jumbotron">
	<center>	<h1><i class="fa fa-newspaper-o" aria-hidden="true"></i> <b>View Electronics Engineering Projects</b> <i class="fa fa-newspaper-o" aria-hidden="true"></i></h1>
		<p>You can download the documentation of the project by clicking on the buttons.</p> </center>
	</div>

<div class="container">
	    <?php while ( $row = $sql->fetch()) { ?>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">
  <?="Problem Statement: " . $row["problemstatement"]. " " ?><br>

						</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
					 <?="<b>  <i>Name of Group Members: </b>  </i>" . $row["NameOfMember1"]. ", " . $row["NameOfMember2"]. ", " . $row["NameOfMember3"].

					" "?>
</div>
        <div class="panel-footer">
		<?="<a target='_blank' href='view.php?id=".$row["id"]."'><button class='btn btn-success'>Click here to download the documentation!</button></a>"?>

        </div>
      </div>
    </div>
  </div>
	<?php }?>
</div>

</body>
</html>
