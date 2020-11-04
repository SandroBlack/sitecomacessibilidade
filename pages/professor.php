<?php session_start();?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Facima - Central do Professor</title>
	<link rel="icon" href="../img/favicon-16x16.png">

    <!-- Bootstrap CSS, Font Awesome --> 
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
	
	<!-- Optional CSS -->
	<link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <div class="container">
			<!-- TOPO -->
			<header class="row align-items-center mb-1 bg-secondary">			
				<nav class="navbar navbar-light col-md-12">
					<a class="navbar-brand h1 text-light mb-0" href="">CENTRAL DO PROFESSOR</a>
					<!-- <h3 class="text-light align-center">PAINEL</h3>	 -->					
					<button class="btn btn-dark my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-sign-out-alt"></i>Sair</button>												
				</nav>								
			</header>
			<!-- FIM TOPO -->

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Central do Professor</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Deseja Realmente Sair?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
						<button type="button" class="btn btn-primary" id="btnSair">Sim</button>
					</div>
					</div>
				</div>
			</div>
			<!-- Fim Modal -->

			<div class="row mb-1" style="min-height: 85vh;">								
				<div class="list-group col-md-2 p-0 bg-white border">					
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active border-bottom" id="v-pills-inicio-tab" data-toggle="pill" href="#v-pills-inicio" role="tab" aria-controls="v-pills-inicio" aria-selected="true">Inicio</a>
						<a class="nav-link border-bottom" id="v-pills-dados-tab" data-toggle="pill" href="#v-pills-dados" role="tab" aria-controls="v-pills-dados" aria-selected="true">Dados Pessoais</a>
						<a class="nav-link border-bottom" id="v-pills-mensagens-tab" data-toggle="pill" href="#v-pills-mensagens" role="tab" aria-controls="v-pills-mensagens" aria-selected="false">Mensagens
								<span class="badge badge-dark badge-pill ml-4">02</span>
						</a>						
						<a class="nav-link border-bottom" id="v-pills-reserva-equip-tab" data-toggle="pill" href="#v-pills-reserva-equip" role="tab" aria-controls="v-pills-reserva-equip" aria-selected="false">Reservar Equip.</a>
						<a class="nav-link border-bottom" id="v-pills-servicos-tab" data-toggle="pill" href="#v-pills-servicos" role="tab" aria-controls="v-pills-servicos" aria-selected="false">Serviços</a>
					</div>					  
				</div>

				<div class="col-md-10 bg-light">
					<section>						
						<div class="tab-content" id="v-pills-tabContent">

							<!-- INICIO	 -->
							<div class="tab-pane fade show active" id="v-pills-inicio" role="tabpanel" aria-labelledby="v-pills-inicio-tab">
                            <h5>Bem Vindo Professor!</h5>
				            <hr style="border-width: 5px; border-color:#006FA7">
							</div>
							<!-- FIM INICIO -->

							<!-- DADOS PESSOAIS -->
							<div class="tab-pane fade" id="v-pills-dados" role="tabpanel" aria-labelledby="v-pills-dados-tab">
                                    <h5>Dados Pessoais</h5>
                                    <hr style="border-width: 5px; border-color:#006FA7">
									<div class="bg-secondary">
											
									</div>								
									<table class="table table-bordered bg-white ">
											
											<tbody>
											  <tr class="text-dark">
													<th scope="row">
														<p class="mb-0" style="font-weight: normal">NOME: <span class="text-secondary"><?=$_SESSION["nomeUsuario"]?></span>
														<br>RA: <span class="text-secondary"><?=$_SESSION["idUsuario"]?></span>
														
													</th>																							
													<th scope="row" colspan="1">
															<img src="../img/rosto.svg" alt="Foto Aluno" class="img-thumbnail float-right rosto">
													</th>																							
											  </tr>
											  <tr>
													<th scope="row">RG:</th>
													<td class="text-secondary">200.200.12345</td> 																																																												
											  </tr>
											  <tr>
													<th scope="row">CPF:</th>
													<td class="text-secondary">121.456.789-00</td> 																																																												
											  </tr>
											  <tr>
													<th scope="row">FONE:</th>
													<td class="text-secondary">(82)99999-9999</td> 																																																												
											  </tr>
											  <tr>
													<th scope="row">E-MAIL:</th>
													<td class="text-secondary">email@email.com</td>												
											  </tr>
											  <tr>
													<th scope="row">ENDEREÇO:</th>
													<td class="text-secondary">Avenida Fernandes Lima, 000</td>																								
											  </tr>
											  <tr>
													<th scope="row">BAIRRO:</th>
													<td class="text-secondary">Farol</td>												
											  </tr>
											  <tr>
													<th scope="row">CEP:</th>
													<td class="text-secondary">57080-000</td>												
											  </tr>
											  <tr>
													<th scope="row">CIDADE:</th>
													<td class="text-secondary">Maceió</td>												
											  </tr>											  
											  <tr>
													<th scope="row">ESTADO:</th>
													<td class="text-secondary">Alagoas</td>												
											  </tr>											  
											</tbody>
										</table>
							</div>
							<!-- FIM DADOS PESSOAIS -->

							<!-- MENSAGENS -->
							<div class="tab-pane fade" id="v-pills-mensagens" role="tabpanel" aria-labelledby="v-pills-mensagens-tab">
                                <h5>Mensagens</h5>
                                <hr style="border-width: 5px; border-color:#006FA7">
								<table class="table table-hover table-light">
									<thead>
										<tr class="bg-secondary text-white">
											<th scope="col">Nº</th>
											<th scope="col">Remetente</th>
											<th scope="col">Titulo</th>
											<th scope="col">Recebido</th>
											<th scope="col">Horário</th>
										</tr>
									</thead>
									<tbody>										
										<tr>
											<th scope="row">2</th>
											<td class="text-secondary">Secretaria</td>
											<td class="text-secondary">Atualização</td>
											<td class="text-secondary">15/01/2018</td>
											<td class="text-secondary">16:25</td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td class="text-secondary">Diretoria</td>
											<td class="text-secondary">Matricula 2018</td>
											<td class="text-secondary">01/01/2018</td>												
											<td class="text-secondary">19:32</td>												
										</tr>
									</tbody>
								</table>
							</div>
							<!-- FIM MENSAGENS -->							

							<!-- RESERVA DE EQUIPAMENTO -->
							<div class="tab-pane fade" id="v-pills-reserva-equip" role="tabpanel" aria-labelledby="v-pills-reserva-equip-tab">
								<nav>
									<div class="nav nav-tabs" id="nav-tab" role="tablist">
										<a class="nav-item nav-link active" id="nav-reservados-equip-tab" data-toggle="tab" href="#nav-reservados-equip" role="tab" aria-controls="nav-reservados-equip" aria-selected="false">Minhas Reservas</a>										
										<a class="nav-item nav-link" id="nav-nova-reserva-equip-tab" data-toggle="tab" href="#nav-nova-reserva-equip" role="tab" aria-controls="nav-nova-reserva-equip" aria-selected="false">Nova</a>										
									</div>
								</nav>
								<div class="tab-content" id="nav-tabContent-equip">
									
									<!-- Equipamentos Reservados -->
									<div class="tab-pane fade show active" id="nav-reservados-equip" role="tabpanel" aria-labelledby="nav-reservados-equip-tab">
										<!--<h5 class="mt-2">Equipamentos Reservados</h5>
										<hr style="border-width: 5px; border-color:#006FA7"> -->
										
										<div class="input-group mb-3 mt-1">
											<div class="input-group-prepend">
												<label class="input-group-text" for="inputGroupSelect">Filtro</label>
											</div>
											<select class="custom-select" id="inputGroupSelectEquipamento">
												<option selected>TODOS</option>
												<option value="1">ID</option>
												<option value="2">EQUIPAMENTO</option>
												<option value="3">SALA</option>											
											</select>
											<input type="text" class="form-control" placeholder="Digite sua pesquisa" aria-label="" aria-describedby="basic-addon1">
											<div class="input-group-append">
												<button class="btn btn-outline-primary" type="button" id="btn-pesquisa-equip-reservados" title="Pesquisar"><i class="fas fa-search"></i></button>
											</div>
											<!--<div class="input-group-append">
												<button class="btn btn-outline-secondary" type="button" id="btn-imprimir-equip-reservados" title="Imprimir"><i class="fas fa-print"></i>&nbsp;Imprimir</button>
											</div>-->
										</div>

										<table class="table table-bordered bg-white text-center">
											<thead class="thead-light">
												<tr>
													<th scope="col">ID</th>													
													<th scope="col">EQUIPAMENTO</th>
													<th scope="col">SALA</th>
													<th scope="col">H.RETIRADA</th>
													<th scope="col">H.DEVOLUÇÃO</th>
													<th scope="col">DATA</th>														
													<th scope="col">#</th>														
												</tr>
											</thead>	
											
												<tbody class="dadosReserva">
													
												</tbody>
														
										</table>
										
									</div>
								
									<!-- Nova Reserva -->
									<div class="tab-pane fade" id="nav-nova-reserva-equip" role="tabpanel" aria-labelledby="nav-nova-reserva-equip-tab">
										<!--<h5 class="mt-2">Reserva de Equipamentos</h5>
										<hr style="border-width: 5px; border-color:#006FA7">
										-->									
										
										<div class="input-group mb-3 mt-1">
											<div class="input-group-prepend">
												<label class="input-group-text" for="inputGroupSelect">DATA</label>
											</div>											
											<input type="date" class="form-control" min="2018-01-01" aria-label="data" aria-describedby="basic-addon1">
										</div>	
										
										<div class="form-group mt-1">
											<span class="input-group-text" id="">EQUIPAMENTO</span>											
											<select class="custom-select dadosCurso" id="inputGroupSelectCadAluno" required>
												<option selected hidden>Selecione</option>																										
												<option>...</option>																															
											</select>
										</div>		

										<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="">QUANTIDADE</span>
											  </div>
											  <input type="text" class="form-control" name="rg" aria-label="rg" aria-describedby="inputGroup-sizing-default" required>
										</div>	

										<div class="form-group">
											<span class="input-group-text" id="">CURSO</span>											
											<select class="custom-select dadosCurso" id="inputGroupSelectCadAluno" required>
												<option selected hidden>Selecione</option>
												<option>...</option>		
											</select>
										</div>				
										
										<div class="form-group">
											<span class="input-group-text" id="">PERÍODO</span>											
											<select class="custom-select dadosCurso" id="inputGroupSelectCadAluno" required>
												<option selected hidden>Selecione</option>																			
												<option>...</option>																													
											</select>
										</div>			
											
										<div class="form-group">
											<span class="input-group-text" id="">SALA</span>											
											<select class="custom-select dadosCurso" id="inputGroupSelectCadAluno" required>
												<option selected hidden>Selecione</option>																										
												<option>...</option>																										
																																															
											</select>
										</div>

										<div class="form-group">
											<span class="input-group-text" id="">HORA RETIRADA</span>											
											<select class="custom-select dadosCurso" id="inputGroupSelectCadAluno" required>
												<option selected hidden>Selecione</option>																										
												<option>19:15</option>																										
												<option>19:40</option>																										
												<option>20:30</option>																															
												<option>20:45</option>																															
												<option>21:10</option>																															
											</select>
										</div>
										
										<div class="form-group mb-5">
											<span class="input-group-text" id="">HORA DEVOLUÇÃO</span>											
											<select class="custom-select dadosCurso" id="inputGroupSelectCadAluno" required>
												<option selected hidden>Selecione</option>																										
												<option>19:15</option>																										
												<option>19:40</option>																										
												<option>20:30</option>																															
												<option>20:45</option>																															
												<option>21:10</option>																														
												<option>22:00</option>																														
											</select>
										</div>	
										
										<button class="btn btn-dark mb-3" id="btn-reserva-equip">Reservar</button>
									</div>									

								</div>
							</div>                 
							
                            <!-- FIM RESERVA DE EQUIPAMENTO -->
                            
							<!-- SERVIÇOS -->
							<div class="tab-pane fade" id="v-pills-servicos" role="tabpanel" aria-labelledby="v-pills-servicos-tab">
								<h5>Serviços</h5>
				                <hr style="border-width: 5px; border-color:#006FA7">
							</div>
							<!-- FIM SERVIÇOS -->

						</div>
					</section>
				</div>			
			</div>
			
			<!-- RODAPÉ -->
			<footer class="row bg-secondary">
				<div class="col-md-12">
					<p class="text-center text-light mt-2">&copy 2018 - Aquilla / Elissandro / Joseano</p>
				</div>
			</footer>
		</div>
	

		<!-- Optional JavaScript -->		
			
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/funcoes.js"></script>			
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="../js/bootstrap.min.js"></script>
  </body>
</html>