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
  <h3 class="text-center">zaloguj się</h3>
  <div class="row test">
    <div class="col-md-4">
      <p>Napotkałeś/aś problem? Podaj szczegóły.</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: informatyk@zs1mm.edu.pl</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
        <form action="logowanie2.php" method="POST">

        Podaj login:<input class="form-control" id="login" name="login" placeholder="login" type="text" required>
        Podaj haslo:<input class="form-control" id="password" name="password" placeholder="hasło" type="password" >
        <input type="submit" class="btn pull-right"></submit>

    </div>
      </div>
      <div class="row">
        <div class="col-md-12 form-group">
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