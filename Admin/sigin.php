<?php
    $userName=$_POST['email'];
    $password=$_POST['pwd'];
    if(strcmp($userName,"hetansh.s@somaiya.edu")==0 && strcmp($password,"admin123")==0){
      session_start();
      $_SESSION['email']=$userName;
      header("Location: view.php");
	  exit;
    }
?>
