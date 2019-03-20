<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdfupload";

// Create connection
$dbh=new PDO("mysql:host=localhost;dbname=pdfupload","root","");
$file=$_GET['id'];
$stat=$dbh->prepare("delete from pdfformupload where id=?");
$stat->bindParam(1,$file);
$stat->execute();
    
header("Location: view.php");
exit;
