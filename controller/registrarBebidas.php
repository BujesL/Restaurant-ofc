<?php
  include "../model/bebidas.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['sabor'])and isset($_GET['tipo'])){
     $_SESSION['bebidas'][]= new Bebidas(
          $_GET['nome'],$_GET['sabor'],$_GET['tipo']);
     echo "<h1>BEBIDA CADASTRADO!</h1>";
          header("Refresh:2;../view/conBebidas.php");
  }

?>