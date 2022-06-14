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

<div class="container">
  <h3 class="text-center">Witaj Mistrzu</h3>
  <p class="text-center"><em>Przejrzyj zgłoszenia</em></p>
  <p class="text-center">Aby wejść w szegóły zgłoszenia kliknij w jego id</p>

  <div class="row test">
    <div class="col-md-4">
      
      <p>Napotkałeś/aś problem? Podaj szczegóły.</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: informatyk@zs1mm.edu.pl</p>
      <a href="witaj2.php">

      <button type="button" class="btn btn-dark">Archiwum</button>
</a>
      <a href="wyloguj.php">

 <button type="button" class="btn btn-dark ">Wyloguj się</button>
 <p><span></span></p>

 </a>
 
    </div>

    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
        
        
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
  
  <?php 



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pomoc_techniczna";



$conn = mysqli_connect($servername, $username, $password,$dbname);




$user_check = $_SESSION['login_user'];
   
$ses_sql = mysqli_query($conn,"select login from user where login = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['login'];

if(!isset($_SESSION['login_user'])){
   header("location:logowanie.php");
   die();
}


$sql = "select zgloszenia.zwrot,zgloszenia.opis,zgloszenia.id,zgloszenia.email,zgloszenia.rozwiazane,problem.problem,sala.sala from problem INNER JOIN zgloszenia ON zgloszenia.problem=problem.id INNER JOIN sala ON zgloszenia.sala=sala.id WHERE   zgloszenia.rozwiazane = 'przyjeto'";
$result = mysqli_query($conn,$sql);

echo "        <form action='witaj_1.php' method='POST'>";
echo "<table class='table table-sm  '>
<tr>
<th >id</th>
<th >sala</th>
<th >problem</th>
<th >email</th>
<th >status</th>
<th >rozwiazano</th>
<th >zwrot</th>


</tr>";

while($row = mysqli_fetch_array($result))
{

   if ($row['rozwiazane']=='przyjeto'){
    echo "<tr class='active'>";
  }
  else if ($row['rozwiazane']=='rozwiazane'){
    echo "<tr class='info'>";
  }
echo "<td><a href='wyloguj.php'>" . $row['id'] . "</a></td>";
echo "<td>" . $row['sala'] . "</td>";
echo "<td>" . $row['problem'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['rozwiazane'] . "</td>";
if ($row['rozwiazane']!='rozwiazane'){
echo "<td><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1' placeholder
=".$row['id']." >
  <label class='form-check-label' for='flexRadioDefault1'>

  </label></td>";
}
echo "<td>" ."<textarea class='form-control' id='".$row['id']."' name='".$row['id']."' placeholder='". $row['zwrot'] ."'>"  ."</textarea> </td>";
echo "<td><input class='form-check-input' type='radio' name='zwrotradio' id='zwrotradio' value=".$row['id']." >
  <label class='form-check-label' for='zwrotradio'>

  </label></td>";
echo "</tr>";
}
echo "</table>";
echo "          <input type='submit' class='btn pull-right'></submit>
</form>";
mysqli_close($conn);



?>
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

