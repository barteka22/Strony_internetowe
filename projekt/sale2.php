<!DOCTYPE html>
<html lang="en">
<head>
<title>Pomoc techniczna ZS1MMZ</title>
  <meta name="theme-color" content="#000000">
  <meta name="description" content="Strona internetowa Zespołu Szkół nr 1 w Mińsku Mazowieckim - Pomoc Techniczna">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php

include('menu.php');
if(!isset($_SESSION['login_user'])){
  header("location:logowanie.php");
  die();
}
?>

        <?php 
        
session_start();
if ($_SESSION["zgloszenie"]!=0) {
  header("LOCATION:index.php");
}
        $sala=$_POST["sala"];
        $nazwa=$_POST["nazwa"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pomoc_techniczna";

$conn = mysqli_connect($servername, $username, $password,$dbname);


$sql2 = "UPDATE sala SET sala = '$nazwa' WHERE sala.id = $sala";
mysqli_query($conn, $sql2);


header("location: sale.php");
?>
        

</body>
</html>