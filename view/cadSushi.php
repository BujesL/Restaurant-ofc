<?php
 
include "../model/sushi.class.php";
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
						<h1 class="h3 d-inline align-middle">CADASTRO DO SUSHI</h1>						
					</div>
					<form action="../controller/registrarSushi.php" method="GET">
					<div class="row">
                                           <div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">QUAL SUSHI GOSTARIA?</h5>
									</div>
									<div class="card-body" >
                                    <select type="text" name="nome">
                                        <option name="1" value="NIGIRI">NIGIRI</option><br>
                                        <option name="2" value="MAKI">MAKI</option><br>
                                        <option name="3" value="URAMAKI">URAMAKI</option><br>
                                        <option name="4" value="TEMAKI">TEMAKI</option><br>
                                        <option name="5" value="HOT ROLL">HOT ROLL</option><br>
                                        <option name="6" value="SASHIMI">SASHIMI</option><br>
                                    </select>
									</div>
								</div>						
							</div>     
                            <div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">MOLHOS:</h5>
									</div>
									<div class="card-body" >
                                    <select type="text" name="molho">
                                        <option name="1" value="MOLHO DE SOJA">MOLHO DE SOJA</option><br>
                                        <option name="2" value="MOLHO TERYKI">MOLHO TERYKI</option><br>
                                        <option name="3" value="MOLHO TATAKI">MOLHO TATAKI</option><br>
                                        <option name="3" value="MOLHO TARÊ">MOLHO TARÊ</option><br>
                                        <option name="4" value="NENHUM">NENHUM</option>
                                    </select>
									</div>
								</div>						
							</div>

                            <div class="col-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">MODO:</h5>
									</div>
									<div class="card-body" >
                                        <input style= "margin-top:3%;" type="checkbox" name="modo"class="form-control" value="FRITO">FRITO<br>  
                                        <input style= "margin-top:3%;" type="checkbox" name="modo"class="form-control" value="NÃO FRITO">NÃO FRITO<br>
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