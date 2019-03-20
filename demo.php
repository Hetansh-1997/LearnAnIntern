<?php

?>

<!DOCTYPE html>
<html>
<body>

<h2>The Button Element</h2>
<button type="button">
<?
$file = 'ProjectPDF/Resume 31-01-2019.pdf';
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
  Click Me!</button>

</body>
</html>
