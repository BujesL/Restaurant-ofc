<?php
 
include "../model/pedido.class.php";
include "../model/cliente.class.php";
session_start();

?>
<html lang="en">

<?php include "head.php"; ?>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
		   <?php
		     include "menu.php";
		  
		 ?>
		</nav>

		<div class="main">
		<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						
				

							
		    			   
						
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">CADASTRO DE PEDIDO</h1>						
					</div>
					<form action="../controller/registrarPedido.php" method="GET">
					<div class="row">
						
							<div class="col-12 col-lg-8">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Nome</h5>
									</div>
									<div class="card-body">
										<input type="text" name="nome" class="form-control" placeholder="Digite o nome">
									</div>
								</div>						
							</div>
							<div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">DESCRIÇÃO</h5>
									</div>
									<div class="card-body" >
										<input type="text" name="descricao" class="form-control" placeholder="Digite a descrição">
									</div>
								</div>						
							</div>
                            <div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">BEBIDA</h5>
									</div>
									<div class="card-body" >
										
                                        <input style= "margin-top:3%;" type="checkbox" name="bebida"class="form-control" value="suco">SUCO 
                                        <input style= "margin-top:3%;" type="checkbox" name="bebida"class="form-control" value="refri">REFRI
									</div>
								</div>						
							</div>
                            <div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">CLIENTE</h5>
									</div>
									<div class="card-body" >
                                        <select name="proprietario">
                                            <option value=""class="form-control">Selecione</option>
                                            <?php
                                            if(isset($_SESSION['cliente'])){
                                                for($i=0;$i<count($_SESSION['cliente']);$i++){
                                                    $na=$_SESSION['cliente'][$i]->getNome();
                                                    echo "<option value='$na'>$na</option>";   
                                                }
                                            } 
                                            ?>   
                                        </select>
									</div>
								</div>						
							</div>

							<div class="col-12 col-lg-12" style="text-align:right;">
								<button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
							</div>
						
					</div>
					</form>
							

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="#" ><strong>CAROLINE CONTER</strong></a> &copy;
							</p>
						</div>
						
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>