<?php
 
include "../model/bebidas.class.php";
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
						<h1 class="h3 d-inline align-middle">CADASTRO DO BEBIDAS</h1>						
					</div>
					<form action="../controller/registrarBebidas.php" method="GET">
					<div class="row">
                    <div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">QUAL BEBIDA?</h5>
									</div>
									<div class="card-body" >
                                    <select type="text" name="name">
                                        <option name="1" value="DRINKS">DRINKS</option><br>
                                        <option name="2" value="COQUETÉIS">COQUETÉIS</option><br>
                                        <option name="3" value="REFRIGERANTE">REFRIGERANTE</option><br>
                                        <option name="3" value="SUCO">SUCO</option><br>
                                        <option name="4" value="ÁGUA">ÁGUA</option>
                                    </select>
									</div>
								</div>						
							</div>
                            <div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">QUAL SABOR?</h5>
									</div>
									<div class="card-body" >
                                    <select type="text" name="sabor">
                                        <option name="1" value="UVA">UVA</option><br>
                                        <option name="2" value="LARANJA">LARANJA</option><br>
                                        <option name="3" value="LIMÃO">LIMÃO</option><br>
                                        <option name="4" value="MORANGO">MORANGO</option><br>
                                        <option name="5" value="ABACAXI">ABACAXI</option><br>
                                        <option name="6" value="COCA-COLA">COCA-COLA</option><br>
                                        <option name="7" value="GUARANÁ">GUARANÁ</option><br>
                                        <option name="8" value="NENHUM">NENHUM</option>
                                    </select>
									</div>
								</div>						
							</div>
                            <div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">TIPO:</h5>
									</div>
									<div class="card-body" >
                                        <input style= "margin-top:3%;" type="checkbox" name="tipo"class="form-control" value="COM ALCOOL">COM ALCOOL<br>  
                                        <input style= "margin-top:3%;" type="checkbox" name="tipo"class="form-control" value="SEM ALCOOL">SEM ALCOOL<br>
                                        <input style= "margin-top:3%;" type="checkbox" name="tipo"class="form-control" value="NENHUM">NENHUM<br>
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