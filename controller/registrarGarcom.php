<?php
  include "../model/garcom.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['cpf']) and isset($_GET['telefone'])){
     $_SESSION['garcom'][]= new Garcom(
          $_GET['nome'],$_GET['cpf'],$_GET['telefone']);
     echo "<h1>GARÇOM CADASTRADO</h1>";
          header("Refresh:2;../view/conGarcom.php");
  }
?>