<?php
  include "../model/comidaTradicional.class.php";

  session_start();
  if(isset($_GET['nome']) and isset($_GET['retirar'])and isset($_GET['acresentar'])){
     $_SESSION['comidaTradicional'][]= new ComidaTradicional(
          $_GET['nome'],$_GET['retirar'],$_GET['acresentar']);
     echo "<h1>COMIDA TRADICIONAL CADASTRADO!</h1>";
          header("Refresh:2;../view/conComidaTradicional.php");
  }

?>