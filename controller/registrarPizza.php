<?php
  include "../model/pizza.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['retirar'])and isset($_GET['acresentar'])and isset($_GET['borda'])){
     $_SESSION['pizza'][]= new Pizza(
          $_GET['nome'],$_GET['retirar'],$_GET['acresentar'],$_GET['borda']);
     echo "<h1>PIZZA CADASTRADO!</h1>";
          header("Refresh:2;../view/conPizza.php");
  }

?>