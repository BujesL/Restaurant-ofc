<?php
 
include "../model/comidaTradicional.class.php";
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
						<h1 class="h3 d-inline align-middle">CADASTRO DA COMIDA TRADICIONAL</h1>						
					</div>
					<form action="../controller/registrarComidaTradicional.php" method="GET">
					<div class="row">
                                           <div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">QUAL COMIDA TRADICIONAL GOSTARIA?</h5>
									</div>
									<div class="card-body" >
                                    <select type="text" name="nome">
                                        <option name="1" value="PRATO PRONTO">PRATO PRONTO</option><br>
                                        <option name="2" value="ALAMINUTA DE FRANGO">ALAMINUTA DE FRANGO</option><br>
                                        <option name="3" value="ALAMINUTA DE PEIXE">ALAMINUTA DE PEIXE</option><br>
                                        <option name="4" value="ALAMINUTA DE CARNE">ALAMINUTA DE CARNE</option><br>
                                        <option name="5" value="PARMEGIANA DE FRANGO">PARMEGIANA DE FRANGO</option><br>
                                        <option name="6" value="PARMEGIANA DE CARNE">PARMEGIANA DE CARNE</option><br>
                                    </select>
									</div>
								</div>						
							</div>     
                            <div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">ACRESENTAR:</h5>
									</div>
									<div class="card-body" >
                                    <select type="text" name="acresentar">
                                        <option name="1" value="CARNE">CARNE</option><br>
                                        <option name="2" value="FRANGO">FRANGO</option><br>
                                        <option name="3" value="PEIXE">PEIXE</option><br>
                                        <option name="3" value="OVO">OVO</option><br>
                                        <option name="4" value="NENHUM">NENHUM</option>
                                    </select>
									</div>
								</div>						
							</div>

                            <div class="col-12 col-lg-8">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">O QUE GOSTARIA DE RETIRAR?</h5>
									</div>
									<div class="card-body">
										<input type="text" name="retirar" class="form-control">
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