<?php
	include "conexao.php";
	include "funcoes.php";
?>

<html>
	<head>
		<title></title>
		<meta charset="utf8" />
		<link rel="stylesheet" href="estilo.css" />
		<style>
			
		</style>
	</head>
	<body>
		<div id="central">
			<div id="geral">
				<div id="topo">
					<h1>Bem vindo administrador</h1>
				</div>
				<div id="menu">
					<a href="index.php?pagina=inicio">Início</a>
					<a href="index.php?pagina=clientes_listar">Clientes</a>
					<a href="index.php?pagina=funcionarios_listar">Funcionários</a>
					<a href="index.php?pagina=vendas_listar">Vendas</a>
				</div>
				<div id="conteudo">
					<?php
						if( isset( $_GET['pagina'])){
							$pagina = $_GET['pagina'];
						} else{
							$pagina = "inicio";
						}
						
						if( file_exists("$pagina.php"))
							include "$pagina.php";
						else
							include"inicio.php";
					?>
				</div>
				<div id="rodape">
					Todos os direitos reservados
					<?php echo date("Y"); ?>
				</div>
			</div>
		</div>
	</body>
</html>