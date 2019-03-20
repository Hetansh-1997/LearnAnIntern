<?php
    $dbh=new PDO("mysql:host=localhost;dbname=pdfupload","root","");
    $file=$_GET['id'];
    $stat=$dbh->prepare("select * from pdfformupload where id=?");
    $stat->bindParam(1,$file);
    $stat->execute();
    $row=$stat->fetch();
    header("Content-Type:application/pdf");
    echo $row['Pdf'];
?>