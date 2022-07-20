<?php
  include "../model/cliente.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['cpf'])and isset($_GET['endereco'])and isset($_GET['telefone'])){
     $_SESSION['cliente'][]= new Cliente(
          $_GET['nome'],$_GET['cpf'],$_GET['endereco'],$_GET['telefone']);
     echo "<h1>CLIENTE CADASTRADO!</h1>";
          header("Refresh:2;../view/conCliente.php");
  }

?>