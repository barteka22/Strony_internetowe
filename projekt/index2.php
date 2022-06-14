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

include('menu.php')

?>
<div class="container text-center">
  <h3>Strona pomocy technicznej ZS1MMZ</h3>
  <p>Uzywaj w razie napotkania problemu</p>
  <br>
</div>
<div class="container">
  <h3 class="text-center">Sukces</h3>
  <p class="text-center"><em>Przyjęto zgłoszenie</em></p>
  <div class="row test">
    <div class="col-md-4">
      <p>Napotkałeś/aś problem? Podaj szczegóły.</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: informatyk@zs1mm.edu.pl</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
        <?php 


$_SESSION["zgloszenie"]=1;
        $sala=$_POST["sala"];
        $problem=$_POST["problem"];
        $email=$_POST["email"];
        $opis=$_POST["opis"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pomoc_techniczna";

$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "select problem.problem,sala.sala from problem INNER JOIN zgloszenia ON zgloszenia.problem=problem.id INNER JOIN sala ON zgloszenia.sala=sala.id WHERE  zgloszenia.id = ( SELECT MAX(id) FROM zgloszenia ) ;";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
  echo "Sala: ".$row["sala"]."</br>"." Problem: ".$row["problem"]."</br>"." Email:".$email; 
  
}

$sql2 = "INSERT INTO zgloszenia (problem,sala,email,opis,rozwiazane) VALUES ('$problem','$sala','$email','$opis','przyjeto');";
mysqli_query($conn, $sql2);

$to      = $email;
$subject = 'ZS1MM - Pomoc Techniczna';
$message = 'Twoje zgłoszenie zostało przyjęte';

//  mail($to, $subject, $message);
if ($_SESSION["zgloszenie"]!=1) {
  header("LOCATION:index.php");
}

?>
        
        </div>
        <div class="col-sm-6 form-group">

        </div>
        <div class="col-sm-6 form-group">
       
    </div>
      </div>
      <div class="row">
        <div class="col-md-12 form-group">
        <?php 




$sql = "SELECT MAX(id) FROM zgloszenia;";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
  echo "Oto kod sprawy zapisz go by móc powrócić do niej: </br><h1>".$row["MAX(id)"]."</h1>"; 
  
}


mysqli_close($conn);

?>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
/* Add a dark background color to the footer */
footer {
    background-color: #5ec79b;
  color: #f5f5f5;
}

footer a {
  color: #f5f5f5;
}

footer a:hover {
  color: #777;
  text-decoration: none;
}
</style>

<footer class="text-center">
 <h5>
  <p>Strona stworzona przez <a href="http://zs1mm.edu.pl/#/" data-toggle="tooltip" title="Odwiedź stronę szkoły">Bartosz Jakubaszek</a></p>
</h5></footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();
})
</script>
</body>
</html>