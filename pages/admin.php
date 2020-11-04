<?php
	include_once("../db/dbConexao.php"); 
	session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Facima - Administração</title>
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
			<header class="row align-items-center mb-1 bg-dark">			
				<nav class="navbar navbar-light col-md-12">
					<a class="navbar-brand h1 text-light mb-0" href="">PAINEL ADMINISTRATIVO</a>
					<!-- <h3 class="text-light align-center">PAINEL</h3>	 -->					
					<button class="btn btn-light my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-sign-out-alt"></i>Sair</button>												
				</nav>								
			</header>
			<!-- FIM TOPO -->

			<!-- Modal Logof -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Painel Administrativo</h5>
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
			<!-- Fim Modal Logof -->

            <!-- Menu Lateral -->
			<div class="row mb-1" style="min-height: 85vh;">								
				<div class="list-group col-md-2 p-0 bg-white border">					
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active border-bottom" id="v-pills-inicio-tab" data-toggle="pill" href="#v-pills-inicio" role="tab" aria-controls="v-pills-inicio" aria-selected="true">Inicio</a>
						<a class="nav-link border-bottom" id="v-pills-dados-tab" data-toggle="pill" href="#v-pills-dados" role="tab" aria-controls="v-pills-dados" aria-selected="true">Dados Pessoais</a>
						<a class="nav-link border-bottom" id="v-pills-comunicados-tab" data-toggle="pill" href="#v-pills-comunicados" role="tab" aria-controls="v-pills-comunicados" aria-selected="false">Enviar Comunicados
								<!-- <span class="badge badge-dark badge-pill ml-4">02</span> -->
						</a>						
						<a class="nav-link border-bottom" id="v-pills-alunos-tab" data-toggle="pill" href="#v-pills-alunos" role="tab" aria-controls="v-pills-alunos" aria-selected="false">Alunos</a>
						<a class="nav-link border-bottom" id="v-pills-equipamentos-tab" data-toggle="pill" href="#v-pills-equipamentos" role="tab" aria-controls="v-pills-equipamentos" aria-selected="false">Equipamentos</a>
						<a class="nav-link border-bottom" id="v-pills-professores-tab" data-toggle="pill" href="#v-pills-professores" role="tab" aria-controls="v-pills-professores" aria-selected="false">Professores</a>
						<a class="nav-link border-bottom" id="v-pills-noticias-tab" data-toggle="pill" href="#v-pills-noticias" role="tab" aria-controls="v-pills-noticias" aria-selected="false">Notícias</a>						
					</div>					  
				</div>

				<div class="col-md-10 bg-light">
					<section>						
						<div class="tab-content" id="v-pills-tabContent">

							<!-- INICIO	 -->
							<div class="tab-pane fade show active" id="v-pills-inicio" role="tabpanel" aria-labelledby="v-pills-inicio-tab">
								<h5>Bem Vindo(a) ao Painel Administrativo</h5>
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

							<!-- COMUNICADOS -->
							<div class="tab-pane fade" id="v-pills-comunicados" role="tabpanel" aria-labelledby="v-pills-comunicados-tab">
                                <h5>Comunicados</h5>
                                <hr style="border-width: 5px; border-color:#006FA7">
								
							</div>
							<!-- FIM COMUNICADOS -->							

							<!-- GERENCIAR ALUNOS -->
							<div class="tab-pane fade" id="v-pills-alunos" role="tabpanel" aria-labelledby="v-pills-alunos-tab">
								<nav>
									<div class="nav nav-tabs" id="nav-tab" role="tablist">
										<a class="nav-item nav-link active" id="nav-rel-aluno-tab" data-toggle="tab" href="#nav-rel-aluno" role="tab" aria-controls="nav-rel-aluno" aria-selected="true">Relação</a>
										<a class="nav-item nav-link selectCurso" id="nav-cadastrar-aluno-tab" data-toggle="tab" href="#nav-cadastrar-aluno" role="tab" aria-controls="nav-cadastrar-aluno" aria-selected="false">Cadastrar</a>										
									</div>
								</nav>
								
								<!-- Relação de Alunos -->
								<div class="tab-content" id="nav-tabContent-aluno">
									<div class="tab-pane fade show active" id="nav-rel-aluno" role="tabpanel" aria-labelledby="nav-rel-aluno-tab">
										<!--<h5 class="mt-2">Relação de Alunos</h5>
										<hr style="border-width: 5px; border-color:#006FA7">
										-->
										<div class="input-group mb-3 mt-1">
											<div class="input-group-prepend">
												<label class="input-group-text" for="inputGroupSelect">Filtro</label>
											</div>
											<select class="custom-select" id="inputGroupSelectAluno">
												<option selected>TODOS</option>
												<option value="1">RA</option>												
												<option value="2">NOME</option>
												<option value="3">SEXO</option>											
											</select>
											<input type="text" class="form-control" placeholder="Digite sua pesquisa" aria-label="" aria-describedby="basic-addon1">
											<div class="input-group-append">												
												<button class="btn btn-outline-primary mr-5" type="button" id="btn-pesquisa-aluno" title="Pesquisar"><i class="fas fa-search"></i></button>
											</div>
											<div class="input-group-append">
												<button class="btn btn-outline-secondary" type="button" id="btn-imprimir-alunos" title="relatório"><i class="fas fa-print"></i>&nbsp;Relatório</button>
											</div>
										</div>										
																														
										<table class="table table-bordered bg-white text-center">
											<thead class="thead-light">
												<tr>
													<th scope="col">RA</th>
													<th scope="col">NOME</th>
													<th scope="col">SEXO</th>
													<th scope="col">CURSO</th>
													<th scope="col">EDITAR</th>
													<th scope="col">EXCLUIR</th>
												</tr>
											</thead>												
											<tbody class="dadosAlunos">
												
											</tbody>
											<div></div>			
										</table>
										
									</div>
									
									<!-- Cadastro de Alunos -->
									<div class="tab-pane fade" id="nav-cadastrar-aluno" role="tabpanel" aria-labelledby="nav-cadastrar-aluno-tab">
										<form class="mt-1" id="formAluno">                                    
											<!--<h5 class="mt-2">Cadastro de Alunos</h5>
											<hr style="border-width: 5px; border-color:#006FA7">
											-->
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="">RG</span>
											  </div>
											  <input type="text" class="form-control" name="rg" aria-label="rg" aria-describedby="inputGroup-sizing-default" required>
											</div>		
											
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="">NOME</span>
											  </div>
											  <input type="text" class="form-control" name="nome" aria-label="rg" aria-describedby="inputGroup-sizing-default" required>
											</div>													
											
											<div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">											  
												<span class="input-group-text" id="">SEXO</span>	
											  <label class="btn btn-secondary">
												<input type="radio" name="options" id="option1" autocomplete="off"> Mascolino
											  </label>
											  <label class="btn btn-secondary">
												<input type="radio" name="options" id="option2" autocomplete="off"> Feminino
											  </label>
											</div>

											<div class="form-group">
												<span class="input-group-text" id="">CURSO</span>
												<!--<select class="form-control selectCurso dadosCursos" id="inputGroupSelectCadAluno" required>-->
												<select class="form-control dadosCurso" id="inputGroupSelectCadAluno">
													<option selected hidden>Selecione</option>																										
													<option>Ciência da Computação</option>																										
																																																
												</select>
											</div>											
											
											<div class="form-group mt-5">
												<button class="btn btn-dark" id="btn-cad-aluno"><i class="fas fa-save"></i>&nbsp;Cadastrar</button>      
											</div>                                        
											                              
										</form>		
									</div>
									<!-- Fim Cadastro Aluno -->
									
									<!-- Modal Cadastro Aluno -->
									<div class="modal fade" id="modalCadAluno" tabindex="-1" role="dialog" aria-labelledby="modalCadAluno" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="modalCadAlunoLabel">Editar Aluno</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form class="mt-1" id="formAluno">                                    
													
														<div class="input-group mb-3">
														  <div class="input-group-prepend">
															<span class="input-group-text" id="">RG</span>
														  </div>
														  <input type="text" class="form-control" name="rg" id="editRgAluno" value="" aria-label="rg" aria-describedby="inputGroup-sizing-default" required>
														</div>		
														
														<div class="input-group mb-3">
														  <div class="input-group-prepend">
															<span class="input-group-text" id="">NOME</span>
														  </div>
														  <input type="text" class="form-control" name="nome" id="editNomeAluno" value="" aria-label="nome" aria-describedby="inputGroup-sizing-default" required>
														</div>													
														
														<div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">											  
															<span class="input-group-text" id="">SEXO</span>	
														  <label class="btn btn-secondary">
															<input type="radio" name="options" id="option1" autocomplete="off"> Mascolino
														  </label>
														  <label class="btn btn-secondary">
															<input type="radio" name="options" id="option2" autocomplete="off"> Feminino
														  </label>
														</div>

														<div class="form-group">
															<span class="input-group-text" id="editCursoAluno">CURSO</span>
															<!--<select class="form-control selectCurso dadosCursos" id="inputGroupSelectCadAluno" required>-->
															<select class="form-control dadosCurso" id="inputGroupSelectCadAluno">
																<option selected hidden>Selecione</option>																																		
															</select>
														</div>							
																			
													</form>		
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
													<button type="button" class="btn btn-primary" id="btnSair">Atualizar</button>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Modal Cadastro Aluno -->
									
								</div>           
							</div>
              <!-- FIM GERENCIAR ALUNOS -->
                            
              <!-- GERENCIAR EQUIPAMENTOS -->
							<div class="tab-pane fade" id="v-pills-equipamentos" role="tabpanel" aria-labelledby="v-pills-equipamentos-tab">
								<nav>
									<div class="nav nav-tabs" id="nav-tab" role="tablist">
										<a class="nav-item nav-link active" id="nav-reservados-equip-tab" data-toggle="tab" href="#nav-reservados-equip" role="tab" aria-controls="nav-reservados-equip" aria-selected="false">Reservados</a>
										<a class="nav-item nav-link" id="nav-rel-equip-tab" data-toggle="tab" href="#nav-rel-equip" role="tab" aria-controls="nav-rel-equip" aria-selected="true">Relação</a>
										<a class="nav-item nav-link" id="nav-cadastrar-equip-tab" data-toggle="tab" href="#nav-cadastrar-equip" role="tab" aria-controls="nav-cadastrar-equip" aria-selected="false">Cadastro</a>
										
									</div>
								</nav>
								
								<!-- Equipamentos Reservados -->
								<div class="tab-content" id="nav-tabContent-equip">
								
									<div class="tab-pane fade show active" id="nav-reservados-equip" role="tabpanel" aria-labelledby="nav-reservados-equip-tab">
										<!--<h5 class="mt-2">Equipamentos Reservados</h5>
										<hr style="border-width: 5px; border-color:#006FA7">
										-->
										<div class="input-group mb-3 mt-1">
											<div class="input-group-prepend">
												<label class="input-group-text" for="inputGroupSelect">DATA</label>
											</div>											
											<input type="date" class="form-control" aria-label="data" aria-describedby="basic-addon1">
											<div class="input-group-append">
												<button class="btn btn-outline-primary mr-5" type="button" id="pesquisa-equip-reservados" title="Pesquisar"><i class="fas fa-search"></i></button>
											</div>
											<div class="input-group-append">
												<button class="btn btn-outline-secondary" type="button" id="btn-imprimir-reservados" title="Relatório"><i class="fas fa-print"></i>&nbsp;Relatório</button>
											</div>
										</div>				

										<table class="table table-bordered bg-white text-center">
											<thead class="thead-light">
												<tr>
													<th scope="col">ID</th>
													<th scope="col">PROFESSOR</th>
													<th scope="col">EQUIPAMENTO</th>
													<th scope="col">SALA</th>
													<th scope="col">DATA</th>														
												</tr>
											</thead>	
											
												<tbody class="dadosReservados">
													
												</tbody>
														
										</table>
										
									</div>
								
									<!-- Relação de Equipamentos -->
									<div class="tab-pane fade" id="nav-rel-equip" role="tabpanel" aria-labelledby="nav-rel-equip-tab">
										<!--<h5 class="mt-2">Relação de Equipamentos</h5>
										<hr style="border-width: 5px; border-color:#006FA7">
										-->
										<div class="input-group mb-3 mt-1">
											<div class="input-group-prepend">
												<label class="input-group-text" for="inputGroupSelect">Filtro</label>
											</div>
											<select class="custom-select" id="inputGroupSelectEquipamento">
												<option selected>TODOS</option>
												<option value="1">ID</option>
												<option value="2">NOME</option>
												<option value="3">FABRICANTE</option>											
											</select>
											<input type="text" class="form-control" placeholder="Digite sua pesquisa" aria-label="" aria-describedby="basic-addon1">
											<div class="input-group-append">
												<button class="btn btn-outline-primary mr-5" type="button" id="btn-pesquisa-equip" title="Pesquisar"><i class="fas fa-search"></i></button>
											</div>
											<div class="input-group-append">
												<button class="btn btn-outline-secondary" type="button" id="btn-imprimir-equipamentos" title="Relatório"><i class="fas fa-print"></i>&nbsp;Relatório</button>
											</div>
										</div>
											
										<table class="table table-bordered bg-white text-center">
											<thead class="thead-light">
												<tr>
													<th scope="col">ID</th>
													<th scope="col">NOME</th>													
													<th scope="col">FABRICANTE</th>
													<th scope="col">MODELO</th>
													<th scope="col">ESTOQUE</th>
													<th scope="col">EDITAR</th>
													<th scope="col">EXCLUIR</th>
												</tr>
											</thead>	
												
											<tbody class="dadosEquipamentos">
												
											</tbody>
													
										</table>
										
									</div>
									
									<!-- Cadastro de Equipamentos -->
									<div class="tab-pane fade" id="nav-cadastrar-equip" role="tabpanel" aria-labelledby="nav-cadastrar-equip-tab">
										<form class="mt-1" id="formEquipamento">                                    
											<!--<h5 class="mt-2">Cadastro de Equipamentos</h5>
											<hr style="border-width: 5px; border-color:#006FA7">
											-->
											<input type="hidden" name="funcao" value="cadEquip"/>	
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="">NOME</span>
											  </div>
											 <input type="text" class="form-control" name="nome" aria-label="nome" aria-describedby="inputGroup-sizing-default" required>
											</div>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="">FABRICANTE</span>
											  </div>
											  <input type="text" class="form-control" name="fabricante" aria-label="fabricante" aria-describedby="inputGroup-sizing-default" required>
											</div>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="">MODELO</span>
											  </div>
											  <input type="text" class="form-control" name="nome" aria-label="modelo" aria-describedby="inputGroup-sizing-default" required>
											</div>                                     
											<div class="input-group mb-5">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="">QUANTIDADE</span>
											  </div>
											  <input type="number" class="form-control" name="nome" aria-label="quantidade" aria-describedby="inputGroup-sizing-default" required>
											</div>                                       
											<button class="btn btn-dark" id="btn-cad-equip"><i class="fas fa-save"></i>&nbsp;Cadastrar</button>                                    
										</form>		
									</div>

									<!-- Modal Cadastro Equipamento -->
									<div class="modal fade" id="modalCadEquip" tabindex="-1" role="dialog" aria-labelledby="modalCadRquip" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="modalCadEquipLabel">Editar Equipamento</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form class="mt-1" id="formEquipamento">                    
														<input type="hidden" name="funcao" value="cadEquip"/>	
														<div class="input-group mb-3">
														  <div class="input-group-prepend">
															<span class="input-group-text" id="">NOME</span>
														  </div>
														 <input type="text" class="form-control" name="editNomeEquip" aria-label="editNomeEquip" aria-describedby="inputGroup-sizing-default" required>
														</div>
														<div class="input-group mb-3">
														  <div class="input-group-prepend">
															<span class="input-group-text" id="">FABRICANTE</span>
														  </div>
														  <input type="text" class="form-control" name="editNomeEquip" aria-label="editFabricanteEquip" aria-describedby="inputGroup-sizing-default" required>
														</div>
														<div class="input-group mb-3">
														  <div class="input-group-prepend">
															<span class="input-group-text" id="">MODELO</span>
														  </div>
														  <input type="text" class="form-control" name="editModeloEquip" aria-label="editModeloEquip" aria-describedby="inputGroup-sizing-default" required>
														</div>                                     
														<div class="input-group mb-5">
														  <div class="input-group-prepend">
															<span class="input-group-text" id="">QUANTIDADE</span>
														  </div>
														  <input type="text" class="form-control" name="editQuantidadeEquip" aria-label="editQuantidadeEquip" aria-describedby="inputGroup-sizing-default" required>
														</div>                                       
														                                   
													</form>		
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" id="btnCancelarModalEquip" data-dismiss="modal">Cancelar</button>
													<button type="button" class="btn btn-primary" id="btnAtualizarModalEquip">Atualizar</button>
												</div>
											</div>
										</div>
									</div>
									<!-- Fim Modal Cadastro Equipamento -->	

								</div>
							</div>                           					
              <!-- FIM GERENCIAR EQUIPAMENTOS -->

              <!-- GERENCIAR PROFESSORES -->
							<div class="tab-pane fade" id="v-pills-professores" role="tabpanel" aria-labelledby="v-pills-professores-tab">
								<nav>
									<div class="nav nav-tabs" id="nav-tab" role="tablist">
										<a class="nav-item nav-link active" id="nav-rel-professor-tab" data-toggle="tab" href="#nav-rel-professor" role="tab" aria-controls="nav-rel-professor" aria-selected="true">Relação</a>
										<a class="nav-item nav-link" id="nav-cadastrar-professor-tab" data-toggle="tab" href="#nav-cadastrar-professor" role="tab" aria-controls="nav-cadastrar-professor" aria-selected="false">Cadastrar</a>										
									</div>
								</nav>
								
								<!-- Relação de Professores -->
								<div class="tab-content" id="nav-tabContent-professor">
								
									<div class="tab-pane fade show active" id="nav-rel-professor" role="tabpanel" aria-labelledby="nav-rel-professor-tab">
										<!--<h5 class="mt-2">Relação de Professores</h5>
										<hr style="border-width: 5px; border-color:#006FA7">
										-->
										<div class="input-group mb-3 mt-1">
											<div class="input-group-prepend">
												<label class="input-group-text" for="inputGroupSelect01">Filtro</label>
											</div>
											<select class="custom-select" id="inputGroupSelectProfessor">
												<option selected>TODOS</option>
												<option value="1">RG</option>
												<option value="2">NOME</option>
												<option value="3">CURSO</option>
												<option value="4">TITULAÇÃO</option>
											</select>
											<input type="text" class="form-control" placeholder="Digite sua pesquisa" aria-label="" aria-describedby="basic-addon1">
											<div class="input-group-append">
												<button class="btn btn-outline-primary mr-5" type="button" id="pesquisa-professor" title="Pesquisar"><i class="fas fa-search"></i></button>
											</div>
											<div class="input-group-append">
												<button class="btn btn-outline-secondary" type="button" id="btn-imprimir-professores" title="Relatório"><i class="fas fa-print"></i>&nbsp;Relatório</button>
											</div>
										</div>
											
										<table class="table table-bordered bg-white text-center">
											<thead class="thead-light">
												<tr>
													<th scope="col">ID</th>
													<th scope="col">RG</th>
													<th scope="col">NOME</th>
													<th scope="col">SEXO</th>
													<th scope="col">TITULAÇÃO</th>
													<th scope="col">EDITAR</th>
													<th scope="col">EXCLUIR</th>													
												</tr>
											</thead>	
												
												<tbody class="dadosProfessores">
													
												</tbody>
														
										</table>
										
									</div>
									
									<!-- Cadastro de Professores -->
									<div class="tab-pane fade" id="nav-cadastrar-professor" role="tabpanel" aria-labelledby="nav-cadastrar-professor-tab">
										<form class="mt-1" id="formProfessor">                                    
											<!--<h5 class="mt-2">Cadastro de Professores</h5>
											<hr style="border-width: 5px; border-color:#006FA7">
											-->
											<input type="hidden" name="funcao" value="cadProfessor"/>		
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="">RG</span>
											  </div>
											  <input type="text" class="form-control" name="rg" aria-label="rg" aria-describedby="inputGroup-sizing-default" required>
											</div>
											
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="">NOME</span>
											  </div>
											  <input type="text" class="form-control" name="nome" aria-label="nome" aria-describedby="inputGroup-sizing-default" required>
											</div>
											
											<div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
											  <span class="input-group-text" id="">SEXO</span>											  
											  <label class="btn btn-secondary">
												<input type="radio" name="options" id="option1" autocomplete="off"> Mascolino
											  </label>
											  <label class="btn btn-secondary">
												<input type="radio" name="options" id="option2" autocomplete="off"> Feminino
											  </label>
											</div>
											
											<div class="form-group mb-5">
												<span class="input-group-text" id="">TITULAÇÃO</span>
												<select class="form-control" required>
													<option>Selecione</option>
													<option>Especialista</option>
													<option>Pos-Graduação</option>
													<option>Mestrado</option>
													<option>Doutorado</option>
												</select>
											</div>                                        
											<button class="btn btn-dark" id="btn-reserva"><i class="fas fa-save"></i>&nbsp;Cadastrar</button>                                    
										</form>	
									</div>
									
									<!-- Modal Cadastro Professor -->
									<div class="modal fade" id="modalCadProfessor" tabindex="-1" role="dialog" aria-labelledby="modalCadProfessor" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="modalCadProfessorLabel">Editar Professor</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<form class="mt-1" id="formProfessor">                                   
															<input type="hidden" name="funcao" value="cadProfessor"/>		
															<div class="input-group mb-3">
															  <div class="input-group-prepend">
																<span class="input-group-text" id="">RG</span>
															  </div>
															  <input type="text" class="form-control" name="rg" aria-label="rg" aria-describedby="inputGroup-sizing-default" required>
															</div>
															
															<div class="input-group mb-3">
															  <div class="input-group-prepend">
																<span class="input-group-text" id="">NOME</span>
															  </div>
															  <input type="text" class="form-control" name="nome" aria-label="nome" aria-describedby="inputGroup-sizing-default" required>
															</div>
															
															<div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
															  <span class="input-group-text" id="">SEXO</span>											  
															  <label class="btn btn-secondary">
																<input type="radio" name="options" id="option1" autocomplete="off"> Mascolino
															  </label>
															  <label class="btn btn-secondary">
																<input type="radio" name="options" id="option2" autocomplete="off"> Feminino
															  </label>
															</div>
															
															<div class="form-group mb-5">
																<span class="input-group-text" id="">TITULAÇÃO</span>
																<select class="form-control" required>
																	<option>Selecione</option>
																	<option>Especialista</option>
																	<option>Pos-Graduação</option>
																	<option>Mestrado</option>
																	<option>Doutorado</option>
																</select>
															</div>                                        
															                                    
														</form>	
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" id="btnCancelarModalProfessor" data-dismiss="modal">Cancelar</button>
														<button type="button" class="btn btn-primary" id="btnAtualizarModalProfessor">Atualizar</button>
													</div>
												</div>
											</div>
									</div>
									<!-- Fim Modal Cadastro Professor -->									
																		
								</div>           
                                
							</div>
                            <!-- FIM GERENCIAR PROFESSORES -->

							<!-- GERENCIAR NOTÍCIAS -->
							<div class="tab-pane fade" id="v-pills-noticias" role="tabpanel" aria-labelledby="v-pills-noticias-tab">
								<h5>Gerenciar Notícias</h5>
				                <hr style="border-width: 5px; border-color:#006FA7">
							</div>
							<!-- FIM GERENCIAR NOTÍCIAS -->
						</div>	
					</section>
				</div>
					
			</div>	
			
			<!-- RODAPÉ -->
			<footer class="row bg-dark">
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