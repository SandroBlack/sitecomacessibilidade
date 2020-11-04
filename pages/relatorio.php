<?php
    /* Usar o Dompdf com Namespaces e corrigir o conflito de nomes */
    use Dompdf\Dompdf;
    include_once("../pdf/dompdf/autoload.inc.php");

    /* Cria uma Stancia do Dompdf */
    $dompdf = new DOMPDF();
	
    /* Nome do Aquivo Pdf */
    $nomeArquivo = "Relatório_de_Equipamentos_Reservados.pdf";	
    echo "Chegou na Página de Impressão";
	/* Conteúdo do Relatório */
    $conteudo = "<head>
					<link rel='icon' href='../img/favicon-16x16.png'>
					<!-- Bootstrap CSS, Font Awesome -->
					<link rel='stylesheet' href='../css/bootstrap.min.css'>
					<!-- Optional CSS -->
					<link rel='stylesheet' href='../css/style.css'>
				</head>
				<body>
					<div>								
						<img style='float:left; margin-right: 60px' class='mb-0' src='../img/Logo_Loginb.png' alt='Logo Facima'>
						<h3 style='' class='page-header'>Relatório de Equipamentos Reservados - </h3>
					</div>
					<hr style='border-width: 5px; border-color:#006FA7'>			  				
					<div class='table-responsive'>
						<table class='table table-striped table-bordered table-condensed text-center'>
							<thead>
								<tr>
									<th>Professor</th>
									<th>Curso</th>
									<th>Semestre</th>
									<th>Período</th>
									<th>Sala</th>
									<th>Data</th>
									<th>Retirada</th>
									<th>Devolução</th>
									<th>Equipamento</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
					Gerador por: ?
				</body>";

    /* Gera a Página com o Conteúdo */
    $dompdf->load_html($conteudo);
	
	/* Colocar a página A4 ou em modo Retrato(portrait) ou em modo paisagem(landscape) */
	$dompdf->set_paper('A4','landscape');

    /* Renderizando o Pdf */
    $dompdf->render();

    /* Exibe a Página e Define se o Arquivo Será Visualizado Antes de Baixar */
    $dompdf->stream($nomeArquivo, array("Attachment" => false));    

?>