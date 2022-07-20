<?php
 
include "../model/sobremesa.class.php";
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
						<h1 class="h3 d-inline align-middle">CADASTRO DO SOBREMESAS</h1>						
					</div>
					<form action="../controller/registrarSobremesa.php" method="GET">
					<div class="row">
                    <div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">QUAL SOBRMESA?</h5>
									</div>
									<div class="card-body" >
                                    <select type="text" name="name">
                                        <option name="1" value="SORVETE">SORVETE</option><br>
                                        <option name="2" value="MOUSSE">MOUSSE</option><br>
                                        <option name="3" value="PUDIM">PUDIM</option><br>
                                        <option name="3" value="TORTA">TORTA</option><br>
                                        <option name="4" value="PAVÊ">PAVÊ</option>
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
                                    <select type="text" name="opcao">
                                        <option name="1" value="UVA">UVA</option><br>
                                        <option name="2" value="LARANJA">LARANJA</option><br>
                                        <option name="3" value="LIMÃO">LIMÃO</option><br>
                                        <option name="4" value="MORANGO">MORANGO</option><br>
                                        <option name="5" value="ABACAXI">ABACAXI</option><br>
                                        <option name="6" value="CHOCOLATE">CHOCOLATE</option><br>
                                        <option name="7" value="OREO">OREO</option><br>
                                        <option name="8" value="TRADICIONAL">TRADICIONAL</option>
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
                                        <input style= "margin-top:3%;" type="checkbox" name="temperatura"class="form-control" value="quente">QUENTE<br>  
                                        <input style= "margin-top:3%;" type="checkbox" name="temperatura"class="form-control" value="gelado">GELADO<br>
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