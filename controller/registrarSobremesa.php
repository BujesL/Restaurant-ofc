<?php
  include "../model/sobremesa.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['opcao'])and isset($_GET['temperatura'])){
     $_SESSION['sobremesa'][]= new Sobremesa(
          $_GET['nome'],$_GET['opcao'],$_GET['temperatura']);
     echo "<h1>SOBREMESA CADASTRADO!</h1>";
          header("Refresh:2;../view/conSobemesa.php");
  }

?>