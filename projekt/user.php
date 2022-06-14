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
  <h3 class="text-center"> Dodaj użytkownika</h3>
  <p class="text-center"><em>Podaj hasło i login</em></p>
  <div class="row test">
    <div class="col-md-4">
      <p>Napotkałeś/aś problem? Podaj szczegóły.</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: informatyk@zs1mm.edu.pl</p>
    </div>
    <div class="col-md-8">
        <form action="user2.php" method="POST">

            





        <div class="col-sm-6 form-group">
        Podaj login:<input  class="form-control" id="login" name="login" placeholder="login" type="text" required>
        Podaj hasło:<input  class="form-control" id="password" name="password1" placeholder="hasło" type="text" required>

       

</select>        
    </div>

        <div class="col-md-12 form-group">
          <input type="submit" class="btn pull-right"></submit>
</form>

        </div>
      </div>
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pomoc_techniczna";
$conn = mysqli_connect($servername, $username, $password,$dbname);


$sql = "select * from user";
$result = mysqli_query($conn,$sql);
echo "<form action='user_1.php' method='POST'>";

echo "<table class='table table-sm  '>
<tr>
<th >id</th>
<th >login</th>
<th >haslo</th>
<th >uprawnienia</th>


</tr>";

while($row = mysqli_fetch_array($result))
{


echo "<td><a href='wyloguj.php'>" . $row['id'] . "</a></td>";
echo "<td>" . $row['login'] . "</td>";
echo "<td>" . "xxxxxxx" . "</td>";
echo "<td>" . $row['uprawnienia'] . "</td>";
echo "<td><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1' value='".$row['id'].">
  <label class='form-check-label' for='flexRadioDefault1'>

  </label></td>";

echo "</tr>";
}
echo "</table>";
echo "          <input type='submit' class='btn pull-right'></submit>
</form>";
mysqli_close($conn);




?>
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