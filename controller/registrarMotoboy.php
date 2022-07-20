<?php
  include "../model/motoboy.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['cpf'])and isset($_GET['endereco'])and isset($_GET['telefone'])){
     $_SESSION['motoboy'][]= new Motoboy(
          $_GET['nome'],$_GET['cpf'],$_GET['endereco'],$_GET['telefone']);
     echo "<h1>MOTOBOY CADASTRADO!</h1>";
          header("Refresh:2;../view/conMotoboy.php");
  }

?>