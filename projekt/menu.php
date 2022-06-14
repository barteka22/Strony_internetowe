


<nav class="navbar navbar-light bg-light">
  <span class="navbar-text">
    <a href="index.php">    <button type="button" class="btn btn-dark ">Pomoc techniczna</button></a>
    <a href="zgloszenie.php">    <button type="button" class="btn btn-dark ">Wyszukaj</button></a>
    <?php
session_start();
if (isset($_SESSION['login_user'])!=NULL){
  echo "    <a href='witaj.php'>    <button type='button' class='btn btn-dark '>Zarządzaj</button></a>";
  echo "    <a href='problem.php'>    <button type='button' class='btn btn-dark '>Dodaj rodzaj problemu</button></a>";
  echo "  <a href='logowanie.php'><button type='button' class='btn btn-dark ' >Logowanie</button></a>";


  if ($_SESSION['login_user']=="user"){
    echo "    <a href='user.php'>    <button type='button' class='btn btn-dark '>Dodaj użytkownika</button></a>";
  echo "    <a href='sale.php'>    <button type='button' class='btn btn-dark '>Dodaj/Edytuj sale</button></a>";

  }
}



    ?>


  </span>
</nav>
