<?php
  $dbh=new PDO("mysql:host=localhost;dbname=pdfupload","root","");
  $NameOfMember1=$_POST['NameOfMember1'];
  $NameOfMember2=$_POST['NameOfMember2'];
  $NameOfMember3=$_POST['NameOfMember3'];
  $FacultyName=$_POST['FacultyName'];
  $problemstatement=$_POST['problemstatement'];
  $emailofmem1=$_POST['emailofmem1'];
  $emailofmem2=$_POST['emailofmem2'];
  $emailofmem3=$_POST['emailofmem3'];
  $probcomesunder=$_POST['probcomesunder'];
  $AccYear=$_POST['AccYear'];
  $name=$_FILES['file']['name'];
  $type=$_FILES['file']['type'];
  $data=file_get_contents($_FILES['file']['tmp_name']);
  $filesize=filesize($_FILES['file']['tmp_name'])/1024;
  if ($filesize>64) {
    echo "filesize can only be 64kb";
  }else{
    $stmt=$dbh->prepare("INSERT INTO `pdfformupload` (`NameOfMember1`, `NameOfMember2`, `NameOfMember3`, `FacultyName`, `problemstatement`, `emailofmem1`, `emailofmem2`, `emailofmem3`, `probcomesunder`, `AccYear`, `file` , `Pdf`)  VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
    /*$stmt->bindParam(1,$name);
    $stmt->bindParam(2,$filesize);
    $stmt->bindParam(3,$data);*/
    $stmt->bindParam(1, $NameOfMember1);
    $stmt->bindParam(2, $NameOfMember2);
    $stmt->bindParam(3, $NameOfMember3);
    $stmt->bindParam(4, $FacultyName);
    $stmt->bindParam(5, $problemstatement);
    $stmt->bindParam(6, $emailofmem1);
    $stmt->bindParam(7, $emailofmem2);
    $stmt->bindParam(8, $emailofmem3);
    $stmt->bindParam(9, $probcomesunder);
    $stmt->bindParam(10, $AccYear);
    $stmt->bindParam(11, $name);
    $stmt->bindParam(12, $data);
    $stmt->execute();
    header('Location: index.php');
    exit();

  }
  
// class BobDemo {
 
//     const DB_HOST = 'localhost';
//     const DB_NAME = 'pdfupload';
//     const DB_USER = 'root';
//     const DB_PASSWORD = '';
 
//     /**
//      * Open the database connection
//      */
//     public function __construct() {
//         // open database connection
//         $conStr = sprintf("mysql:host=%s;dbname=%s;charset=utf8", self::DB_HOST, self::DB_NAME);
 
//         try {
//             $this->pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
//             //for prior PHP 5.3.6
//             //$conn->exec("set names utf8");
//         } catch (PDOException $e) {
//             echo $e->getMessage();
//         }
//     }
 
//     /**
//      * close the database connection
//      */
//     public function __destruct() {
//         // close the database connection
//         $this->pdo = null;
//     }
//     public function insertBlob($NameOfMember1,$NameOfMember2,$NameOfMember3,$FacultyName,$problemstatement, $emailofmem1,$emailofmem2,$emailofmem3,$probcomesunder,$AccYear,$filePath,$blob) {
//         $blob = fopen("ProjectPDF/9783319431611-c2.pdf", 'rb');
 
//         $sql = "INSERT INTO `pdfformupload` (`NameOfMember1`, `NameOfMember2`, `NameOfMember3`, `FacultyName`, `problemstatement`, `emailofmem1`, `emailofmem2`, `emailofmem3`, `probcomesunder`, `AccYear`, `file` , `Pdf`)  VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
//         $stmt = $this->pdo->prepare($sql);
        
//         $stmt->bindParam(1, $NameOfMember1);
//         $stmt->bindParam(2, $NameOfMember2);
//         $stmt->bindParam(3, $NameOfMember3);
//         $stmt->bindParam(4, $FacultyName);
//         $stmt->bindParam(5, $problemstatement);
//         $stmt->bindParam(6, $emailofmem1);
//         $stmt->bindParam(7, $emailofmem2);
//         $stmt->bindParam(8, $emailofmem3);
//         $stmt->bindParam(9, $probcomesunder);
//         $stmt->bindParam(10, $AccYear);
//         $stmt->bindParam(11, $filePath);
//         $stmt->bindParam(12, $blob, PDO::PARAM_LOB);
//         return $stmt->execute();
//     } 
// }

// $blobObj = new BobDemo();

//   /*$conn = new mysqli("localhost", "root", "", "pdfupload");
// */
//   $NameOfMember1=$_POST['NameOfMember1'];
// 	$NameOfMember2=$_POST['NameOfMember2'];
// 	$NameOfMember3=$_POST['NameOfMember3'];
//   $FacultyName=$_POST['FacultyName'];
// 	$problemstatement=$_POST['problemstatement'];
// 	$emailofmem1=$_POST['emailofmem1'];
// 	$emailofmem2=$_POST['emailofmem2'];
// 	$emailofmem3=$_POST['emailofmem3'];
//   $probcomesunder=$_POST['probcomesunder'];
//   $AccYear=$_POST['AccYear'];
//   $targetfile="ProjectPDF/".$_FILES['file']['name'];
//   $fileData=basename($_FILES['file']['tmp_name']);
//   $blobObj->insertBlob($NameOfMember1,$NameOfMember2,$NameOfMember3,$FacultyName,$problemstatement, $emailofmem1,$emailofmem2,$emailofmem3,$probcomesunder,$AccYear,$targetfile,$fileData);
//   header('Location: index.php');
//   exit();
  
?>
