<?php
 
include "../model/pizza.class.php";
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
						<h1 class="h3 d-inline align-middle">CADASTRO DO PIZZA</h1>						
					</div>
					<form action="../controller/registrarPizza.php" method="GET">
					<div class="row">
                                           <div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">QUAL SABOR DA PIZZA?</h5>
									</div>
									<div class="card-body" >
                                    <select type="text" name="nome">
                                        <option name="1" value="CALABRESA">CALABRESA</option><br>
                                        <option name="2" value="PORTUGUESA">PORTUGUESA</option><br>
                                        <option name="3" value="CORAÇÃO">CORAÇÃO</option><br>
                                        <option name="4" value="BRIGADEIRO">BRIGADEIRO</option><br>
                                        <option name="5" value="BRANQUINHO">BRANQUINHO</option><br>
                                        <option name="6" value="MARQUERITA">MARGUERITA</option><br>
                                        <option name="7" value="FRANGO COM CATUPIRY">FRANGO COM CATUPIRY</option><br>
                                        <option name="8" value="CHOCOLATE COM MORANGO">CHOCOLATE COM MORANGO</option>
                                    </select>
									</div>
								</div>						
							</div>     
                            <div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">ACRESENTAR A PIZZA:</h5>
									</div>
									<div class="card-body" >
                                    <select type="text" name="acresentar">
                                        <option name="1" value="QUEIJO">QUEIJO</option><br>
                                        <option name="2" value="MORANGO">MORANGO</option><br>
                                        <option name="3" value="QUEIJO CATUPIRY">QUEIJO CATUPIRY</option><br>
                                        <option name="3" value="QUEIJO CHEDDAR">QUEIJO CHEDDAR</option><br>
                                        <option name="4" value="NENHUM">NENHUM</option>
                                    </select>
									</div>
								</div>						
							</div>

                            <div class="col-12 col-lg-8">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">O QUE GOSTARIA DE RETIRAR DA PIZZA?</h5>
									</div>
									<div class="card-body">
										<input type="text" name="retirar" class="form-control">
									</div>
								</div>						
							</div>

                            <div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">BORDA:</h5>
									</div>
									<div class="card-body" >
                                        <input style= "margin-top:3%;" type="checkbox" name="borda"class="form-control" value="COM BORDA RECHEADA">COM BORDA RECHEADA<br>  
                                        <input style= "margin-top:3%;" type="checkbox" name="borda"class="form-control" value="SEM BORDA RECHEADA">SEM BORDA RECHEADA<br>
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