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
    header("location: logowanie.php");
    die();
 }
?>
<div class="container text-center">
  <h3>Witaj Mistrzu</h3>
  <br>
</div>
<div class="container">
  <h3 class="text-center"> Zmień nazwę sali</h3>
  <div class="row test">
    <div class="col-md-4">
      <p>Napotkałeś/aś problem? Podaj szczegóły.</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: informatyk@zs1mm.edu.pl</p>
    </div>
    <div class="col-md-8">
        <form action="sale2.php" method="POST">

            





        <div class="col-sm-6 form-group">
        Podaj salę:<select class="form-control" id="sala" name="sala" placeholder="sala" type="text" required>
 
        <?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pomoc_techniczna";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$sql = "select * from sala";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "<option value='". $row['id'] ."'>" .$row['sala'] ."</option>";  
}

mysqli_close($conn);

?>


</select>        
Podaj nową nazwę:<input class="form-control" id="nazwa" name="nazwa" placeholder="sala" type="text" required>

    </div>

        <div class="col-md-12 form-group">
          <input type="submit" class="btn pull-right"></submit>
</form>

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