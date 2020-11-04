$(document).ready(function(){

	/*$("#btnAcessar").click(function(){
		location.href="pages/login.html";				 
  	});*/ 		
	
	$("#btnSair").click(function(){		
		location.href="../index.html";		
	});	

	/* FUNÇÃO DE LOGIN */
	$("#btnLogin").click(function(){
		var funcao = "logar";				
		var perfil = $("#perfil").val();
		var login  = $("#login").val(); 
		var senha  = $("#senha").val();		

		if(perfil == "" || login == "" || senha == ""){
			$("#alerta1").css("display","none");
			$("#alerta2").css("display","block");			
			return false;
		}
        
		if (perfil == "Administracao" && login == "admin" && senha == "123"){
			location.href = "../pages/admin.html";
		} else{
			$("#alerta2").css("display","none");
			$("#alerta1").css("display","block")
		}
		
		if (perfil = "Aluno" && login == "aluno" && senha == "123"){
			location.href = "../pages/aluno.html";
		} else{
			$("#alerta2").css("display","none");
			$("#alerta1").css("display","block")
		}
		
		if (perfil = "Professor" && login == "professor" && senha == "123"){
			location.href = "../pages/professor.html";
		} else{
			$("#alerta2").css("display","none");
			$("#alerta1").css("display","block")
		}
		/*else {			
			var dados = {funcao, perfil, login, senha}
			$.ajax({			
				type: 'POST',
				url:'../db/funcoes.php',
				data: dados,
				dataType: 'html',
				success: function(retorno){
					if(retorno == "0"){
						$("#alerta2").css("display","none");
						$("#alerta1").css("display","block");						
					} else if(retorno == "1"){
						location.href="../pages/admin.php";					
					} else if(retorno == "2"){
						location.href="../pages/aluno.php";					
					} else if(retorno == "3"){
						location.href="../pages/professor.php";
					} else{						
						console.log(retorno);
					}								
				},				
			});			
		} */
	});

	/* PESQUISA DE EQUIPAMENTOS */
	$("#btn-pesquisa-equip").click(function(){
		var funcao = "consultarRegistros";
		var tabela = "equipamento";		
		
		$.ajax({
			type: 'POST',
			url: '../db/funcoes.php',
			data: {funcao, tabela},
			dataType: 'json',					
			success: function(retorno){				
				$(".dadosEquipamentos").empty();												
				for(i=0;i<retorno.length;i++){
					$(".dadosEquipamentos").append(				
						"<tr>"+										
							"<td>" + retorno[i].idequipamento + "</td>"+											
							"<td>" + retorno[i].nome + "</td>"+											
							"<td>" + retorno[i].fabricante + "</td>"+											
							"<td>" + retorno[i].modelo + "</td>"+											
							"<td>" + retorno[i].quantidade + "</td>"+											
							
							"<td><button class='btn btn-sm btn-primary' id='editarEquipamento' data-toggle='modal' data-target='#modalCadEquip' title='Editar'><i class='fas fa-pencil-alt'></i></button></td>"+
							"<td><button class='btn btn-sm btn-dark' id='excluirEquip' title='Excluir'><i class='far fa-trash-alt'></button></td>"+							
						"</tr>"
					);
				}									
			}
		});
	});
	
	/* PESQUISA EQUIPAMENTOS RESERVADOS (ADMIN) */
	$("#pesquisa-equip-reservados").click(function(){
		var funcao = "consultarReservados";
		var tabela = "reserva";		
		
		$.ajax({
			type: 'POST',
			url: '../db/funcoes.php',
			data: {funcao, tabela},
			dataType: 'json',					
			success: function(retorno){				
				$(".dadosReservados").empty();												
				for(i=0;i<retorno.length;i++){
					$(".dadosReservados").append(				
						"<tr>"+																			
							"<td>" + retorno[i].idreserva + "</td>"+																	
							"<td>" + retorno[i].id_equipamento + "</td>"+
							"<td>" + retorno[i].id_sala + "</td>"+
							"<td>" + retorno[i].horaretirada + "</td>"+	
							"<td>" + retorno[i].horadevolucao + "</td>"+																			
							"<td>" + retorno[i].periodo + "</td>"+																			
							"<td>" + retorno[i].data + "</td>"+ 																	
														
							"<td><button class='btn btn-sm btn-dark' id='excluirReservaEquip' title='Excluir'><i class='far fa-trash-alt'></button></button></td>"+							
						"</tr>"
					);
				}									
			}
		});
	});	
	
	/* CADASTRO DE EQUIPAMENTOS */
	$("#btn-cad-equip").click(function(){
		//var funcao = "cadEquip";
		var dados = $("#formEquipamento").serialize(); 
		$.ajax({
			type: 'POST',
			url: '../db/funcoes.php',
			data: dados,
			dataType: 'html',
			success: function(retorno){
				if(response == "1"){
					alert("Equipamento Cadastrado com Sucesso!");
				} else{
					console.log(retorno);
				}
			}
		});		
	});

	/* PESQUISA DE ALUNOS */
	$("#btn-pesquisa-aluno").click(function(){
		var funcao = "consultarRegistros";		
		var tabela = "aluno";		
				
		$.ajax({
			type: 'POST',
			url: '../db/funcoes.php',
			data: {funcao, tabela},
			dataType: 'json',								
			success: function(retorno){				
				//$(".dadosAlunos").html(retorno);
				$(".dadosAlunos").empty();	
				for(i=0;i<retorno.length;i++){
					$(".dadosAlunos").append(				
						"<tr>"+										
							"<td>" + retorno[i].ra + "</td>"+											
							"<td>" + retorno[i].nome + "</td>"+											
							"<td>" + retorno[i].sexo + "</td>"+											
							"<td>" + retorno[i].id_curso + "</td>"+											
							
							"<td><button class='btn btn-sm btn-primary btnEditarAluno' id='"+retorno[i].ra+"' data-toggle='modal' data-target='#modalCadAluno' title='Editar'><i class='fas fa-pencil-alt'></i></button></td>"+
							"<td><button class='btn btn-sm btn-dark btnExcluirAluno' id='"+retorno[i].ra+"' title='Excluir'><i class='far fa-trash-alt'></i></button></td>"+							
						"</tr>"
					);
				}									
			}
		});
	});

	/* CADASTRO DE ALUNOS */
	$("#btn-cad-aluno").click(function(){		
		var dados = $("#formAluno").serialize(); 

		$.ajax({
			type: 'POST',
			url: '../db/funcoes.php',
			data: dados,
			dataType: 'html',
			success: function(retorno){
				if(response == "1"){
					alert("Aluno Cadastrado com Sucesso!");
				} else{
					console.log(retorno);
				}
			}
		});		
	});
	
	/* EDITAR ALUNO */
	$(document).on("click", ".btnEditarAluno", function(){
		var funcao = "editarRegistro";
		var tabela = "aluno";
		var id = this.id;
		
		$.ajax({
			type: 'POST',
			url: '../db/funcoes.php',
			data: {funcao, tabela, id},
			dataType: 'json',
			success: function(retorno){
				$("#editRgAluno").val(retorno[0].rg); 
				$("#editNomeAluno").val(retorno[0].nome); 
				$("input[name='options']:checked").val(retorno[0].sexo); 
				$("#editCursoAluno option:selected").val(retorno[0].id_curso); 
			},
		});
	});

	/* EXCLUIR ALUNO */
	$(document).on("click",".btnExcluirAluno",function(){
		var funcao = "excluirRegistro";
		var tabela = "aluno";
		var id = this.id;
		console.log(id);
		/*$.ajax({
			type: 'POST',
			url: '../db/funcoes.php',
			data: {funcao,tabela,id},
			dataType: 'json',
			success: function(retorno){
				console.log(retorno);
			},
		});*/
	});

	/* PREENCHER SELECT CURSOS */
	$(".selectCurso").click(function(){		
		var funcao = "consultar";
		var tabela = "curso";		

		$.ajax({
			type: 'POST',
			url: '../db/funcoes.php',
			data: {funcao, tabela},
			dataType: 'json',
			success: function(retorno){
				//$(".dadosCurso").empty();	
				for(i=0;i<retorno.length;i++){										
					$(".dadosCurso").append(						
						
						'<option value="'+ retorno[i].id_equipamento +'">'+ retorno[i].nome +'</option>'	
					);					
				}					
			}
		});		
	});

	/* CADASTRO DE PROFESSORES */
	$("#btn-cad-professor").click(function(){
		var dados = $("#formProfessor").serialize();
		$.ajax({
			type: 'POST',
			url: '../db/funcoes.php',
			data: dados,
			dataType: 'html',
			success: function(retorno){
				if(response == "1"){
					alert("Aluno Cadastrado com Sucesso!");
				} else{
					console.log(retorno);
				}
			}
		});
	});

	/* PESQUISA DE PROFESSORES */
	$("#pesquisa-professor").click(function(){
		var funcao = "consultarRegistros";
		var tabela = "professor";		
		
		$.ajax({
			type: 'POST',
			url: '../db/funcoes.php',
			data: {funcao, tabela},
			dataType: 'json',					
			success: function(retorno){				
				$(".dadosProfessores").empty();												
				for(i=0;i<retorno.length;i++){
					$(".dadosProfessores").append(				
						"<tr>"+										
							"<td>" + retorno[i].idprofessor + "</td>"+											
							"<td>" + retorno[i].rg + "</td>"+											
							"<td>" + retorno[i].nome + "</td>"+											
							"<td>" + retorno[i].sexo + "</td>"+											
							"<td>" + retorno[i].titulacao + "</td>"+											
							
							"<td><button class='btn btn-sm btn-primary' id='editarProfessor' data-toggle='modal' data-target='#modalCadProfessor' title='Editar'><i class='fas fa-pencil-alt'></i></button></td>"+
							"<td><button class='btn btn-sm btn-dark' id='excluirProfessor' title='Excluir'><i class='far fa-trash-alt'></button></td>"+							
						"</tr>"
					);
				}									
			}
		});
	});
	
	/* PESQUISA MINHAS RESERVAS (PROFESSOR) */
	$("#pesquisa-reserva-equip").click(function(){
		var funcao = "consultar";
		var tabela = "reservado";		
		
		$.ajax({
			type: 'POST',
			url: '../db/funcoes.php',
			data: {funcao, tabela},
			dataType: 'json',					
			success: function(retorno){				
				$(".dadosReserva").empty();												
				for(i=0;i<retorno.length;i++){
					$(".dadosReserva").append(				
						"<tr>"+																			
							"<td>" + retorno[i].idreserva + "</td>"+																	
							"<td>" + retorno[i].id_equipamento + "</td>"+
							"<td>" + retorno[i].id_sala + "</td>"+
							"<td>" + retorno[i].horaretirada + "</td>"+	
							"<td>" + retorno[i].horadevolucao + "</td>"+																			
							"<td>" + retorno[i].data + "</td>"+ 																	
														
							"<td><button class='btn btn-sm btn-dark' id='excluirReservaEquip' title='Excluir'><i class='far fa-trash-alt'></button></button></td>"+							
						"</tr>"
					);
				}									
			}
		});
	});
	
	/* GERAR RELATÓRIOS */
	$("#btn-imprimir-alunos").click(function(){
		window.open("../pages/relatorio_alunos.php", "_blank");		
	});

	$("#btn-imprimir-equipamentos").click(function(){
		window.open("../pages/relatorio_equipamentos.php", "_blank");		
	});

	$("#btn-imprimir-reservados").click(function(){
		window.open("../pages/relatorio_equip_reservados.php", "_blank");		
	});

	$("#btn-imprimir-professores").click(function(){
		window.open("../pages/relatorio_professores.php", "_blank");		
	});	
	
});

window.onload = () => {
	let body = document.body;
	let mudarContraste = document.getElementById("mudarContraste");
	let aumentarFonte  = document.getElementById("aumentarFonte");
	let diminuirFonte  = document.getElementById("diminuirFonte");
    
	mudarContraste.addEventListener("click", function(){
		body.classList.contains("contraste") ? body.classList.remove("contraste") : body.classList.add("contraste");
	});

	aumentarFonte.addEventListener("click", function(){
		let fontSize = window.getComputedStyle(body, null).getPropertyValue("font-size");
		body.style.fontSize = (parseFloat(fontSize) + 1) + "px";
	});

	diminuirFonte.addEventListener('click', function(){
        let fontSize = parseFloat(window.getComputedStyle( body, null).getPropertyValue("font-size"));
        body.style.fontSize = fontSize <= 16 ? "16px" : (fontSize - 1) + "px";
    });

	/*aumentarFonte.addEventListener("click", function(){
		let fontsize = window.getComputedStyle(body, null).getPropertyValue("font-size");
		body.style.fontsize = (parseFloat(fontsize) + 1) + "px";
		//alert(fontsize);		
	});

	diminuirFonte.addEventListener("click", function(){
		let fontsize = parseFloat(window.getComputedStyle(body, null).getPropertyValue("font-size"));
		body.style.fontsize = fontsize <= 16 ? "16px" : (fontsize -1) + "px";
		//alert(fontsize);
	});*/

	body.addEventListener("keydown", function(event){
		//console.log(event.key + " - " + event.keyCode);
	});

	let keys = {
		16 : false,
		17 : false,
		49 : false,
		50 : false,
		51 : false,
		97 : false,
		98 : false,
		99 : false
	}

	body.addEventListener("keydown", function(event){
		if(!keys.hasOwnProperty(event.keyCode)){ 
			return false;
		}
		keys[event.keyCode] = true;	
		acionaAtalho();		
	});
	
	body.addEventListener("keyup", function(event){
		if(!keys.hasOwnProperty(event.keyCode)){ 
			return false;
		}
		keys[event.keyCode] = false;
	});
	
	let acionaAtalho = () => {
		if(keys[16] && keys[17] && keys[49]){
			mudarContraste.click();
		} else if(keys[16] && keys[17] && keys[50]){
			aumentarFonte.click();
		} else if(keys[16] && keys[17] && keys[51]){
			diminuirFonte.click();
		}
	};
};