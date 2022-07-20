<?php
 
include "../model/motoboy.class.php";
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
						<h1 class="h3 d-inline align-middle">CONSULTA MOTOBOY</h1>						
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<form action="#" method="GET">
								<div class="row">	
									<div class="col-12 col-lg-6">
										<input type="text" name="nome" class="form-control" placeholder="Digite o nome">
									</div>
									<div class="col-12 col-lg-6">	
										<button class="btn btn-info" type="submit">BUSCAR</button>
										<button class="btn btn-warning" type="cancel">LIMPAR</button>
									</div>	
								</div>	
							</form>
						</div>
					</div>
					<div class="row">
						<?php
                         

							if(isset($_SESSION['motoboy'])){
								echo "<table class='table'>";
								echo "<tr><th>#</th><th>NOME</th><th>CPF</th><th>ENDEREÇO</th><th>TELEFONE</th></tr>";
								foreach($_SESSION['motoboy'] as $i=>$motoboy){
									
									$cpf = $motoboy->getCpf();
									$nome = $motoboy->getNome();
                                    $endereco = $motoboy->getEndereco();
									$telefone = $motoboy->getTelefone();
                                    
										
										
										echo "<tr>
										<td>
										<div class='row'>
										
										<form action='#' method='GET'>
										<input type='hidden' name='cod' value='$i'>
										<input type='hidden' name='nome' value='$nome'>
                                        <input type='hidden' name='cpf' value='$cpf'>
                                        <input type='hidden' name='endereco' value='$endereco'>
                                        <input type='hidden' name='telefone' value='$telefone'>     
										<button type='submit' class='btn-danger'>
										<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-trash-2 align-middle me-2'><polyline points='3 6 5 6 21 6'></polyline><path d='M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2'></path><line x1='10' y1='11' x2='10' y2='17'></line><line x1='14' y1='11' x2='14' y2='17'></line></svg>
										
										
										</button>
										</form> 
										</div>      
										</td>       
										<td>$nome</td>
                                        <td>$cpf</td>
                                        <td>$endereco</td>
                                        <td>$telefone</td>
                                        </tr>";  
									} 
								}    
								
								echo "</table>";
							
							
							?>
					</div>		

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