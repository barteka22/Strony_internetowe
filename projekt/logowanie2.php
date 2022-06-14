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
  <h3 class="text-center">Witaj Mistrzu</h3>
  <p class="text-center"><em>Przejrzyj zgłoszenia</em></p>
  <div class="row test">
    <div class="col-md-4">
      <p>Napotkałeś/aś problem? Podaj szczegóły.</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: informatyk@zs1mm.edu.pl</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
        <?php 



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pomoc_techniczna";



$conn = mysqli_connect($servername, $username, $password,$dbname);



session_start();
   
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myusername = mysqli_real_escape_string($conn,$_POST['login']);
   $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
   
   $sql = "SELECT id FROM user WHERE login = '$myusername' and haslo = '$mypassword'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
 
   if($count == 1) {
      $_SESSION['login_user'] = $myusername;
      
      header("location: witaj.php");
   }else {
      $error = "Nazwa użytkownika lub hasło są niepoprawne";
   }
}
echo $error;

mysqli_close($conn);

?>
        
        </div>
        <div class="col-sm-6 form-group">

        </div>
        <div class="col-sm-6 form-group">
       
    </div>
      </div>
      <div class="row">
        <div class="col-md-12 form-group">


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