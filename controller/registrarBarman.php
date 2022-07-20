<?php
  include "../model/barman.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['cpf']) and isset($_GET['telefone'])and isset($_GET['modo'])){
     $_SESSION['barman'][]= new Barman(
          $_GET['nome'],$_GET['cpf'],$_GET['telefone'],$_GET['modo']);
     echo "<h1>BARMAN CADASTRADO</h1>";
          header("Refresh:2;../view/conBarman.php");
  }
?>