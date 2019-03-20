<?php
$host         = "localhost";
$username     = "root";
$password     = "";
$dbname       = "pdfupload";

/*Create connection */
$conn = new mysqli($host, $username, $password, $dbname);
/*Check connection */
if ($conn->connect_error) {
     die("Connection t database failed: " . $conn->connect_error);
} 
?>
