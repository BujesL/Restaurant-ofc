<?php
  include "../model/pedido.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['descricao'])and isset($_GET['bebida'])and isset($_GET['cliente'])){
     $_SESSION['pedido'][]= new Pedido(
          $_GET['nome'],$_GET['descricao'],$_GET['bebida'],$_GET['cliente']);
     echo "<h1>PEDIDO CADASTRADO!</h1>";
          header("Refresh:2;../view/conPedido.php");
  }

?>