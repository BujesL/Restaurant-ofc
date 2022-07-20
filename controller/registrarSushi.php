<?php
  include "../model/sushi.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['molho'])and isset($_GET['modo'])){
     $_SESSION['sushi'][]= new Sushi(
          $_GET['nome'],$_GET['molho'],$_GET['modo']);
     echo "<h1>SUSHI CADASTRADO!</h1>";
          header("Refresh:2;../view/conSushi.php");
  }

?>