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
  <h3 class="text-center">Witaj</h3>
  <p class="text-center"><em>Tutaj wyświetlą się szczegóły twojego zgłoszenia</em></p>

  <div class="row test">
    <div class="col-md-4">
      
      <p>Napotkałeś/aś problem? Podaj szczegóły.</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: informatyk@zs1mm.edu.pl</p>


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
        <div class="col-md-6 form-group">

        <form action="zgloszenie3.php" method="POST">

        Podaj kod sprawy:<input class="form-control" id="kod" name="kod" placeholder="kod" type="text" >

        <input type="submit" class="btn btn-dark pull-right">
        <form>

        </div>
       
      </div>
    </div>
  </div>
  <?php 



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pomoc_techniczna";
$kod = $_GET["kod"];


$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "select zgloszenia.zwrot,zgloszenia.opis,zgloszenia.id,zgloszenia.rozwiazane,problem.problem,sala.sala from problem INNER JOIN zgloszenia ON zgloszenia.problem=problem.id INNER JOIN sala ON zgloszenia.sala=sala.id WHERE  zgloszenia.id = $kod";
$result = mysqli_query($conn,$sql);

echo "<table class='table table-sm  '>
<tr>
<th >id</th>
<th >sala</th>
<th >problem</th>
<th >opis</th>
<th >status</th>
<th >Informacja zwrotna</th>



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
echo "<td>" . $row['opis'] . "</td>";
echo "<td>" . $row['rozwiazane'] . "</td>";
echo "<td>" . $row['zwrot'] . "</td>";
$zmienna=$row['id'];
echo "</tr>";
}
echo "</table>";
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

<script src="skrypt.js"></script>
