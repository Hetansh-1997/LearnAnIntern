<?php
	$dbh=new PDO("mysql:host=localhost;dbname=pdfupload","root","");
	$name=$_FILES['file']['name'];
	$type=$_FILES['file']['type'];
	$data=file_get_contents($_FILES['file']['tmp_name']);
	$filesize=filesize($_FILES['file']['tmp_name'])/1024;
	if ($filesize>64) {
		echo "filesize can only be 64kb";
	}else{
		$stmt=$dbh->prepare("Insert Into Files values(?,?,?)");
		$stmt->bindParam(1,$name);
		$stmt->bindParam(2,$filesize);
		$stmt->bindParam(3,$data);
		$stmt->execute();
	}
	

	$stat=$dbh->prepare("Select * from Files");
	$stat->execute();

	while ($row=$stat->fetch()) {
		echo "<li><a target='_blank' href='view.php?filename=".$row['fileName']."'>".$row['fileName']."</a></li>";
	}
?>