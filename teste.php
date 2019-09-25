<html>
	<head>
		<!-- Texto da aba do navegador -->
		<title>Tipos de TAG</title>
		
		<!-- codificação dos caracteres -->
		<meta charset="utf8" />
		
		<style>
			#texto1{
				background-color: red;
				color: white;
				width: 49.5%; /* largura do elemento */
				margin: 0 auto;
				text-align: right;
				display: inline-block;
			}
			
			#texto2{
				background-color: blue;
				color: #FFF;
				width: 50%;
				margin: 0 auto;
				text-align: center;
				display: inline-block;
			}
			
			.link{
				text-decoration: none; /* retira o underline do link */
				display: block;
			}
			
			.link:hover{
				text-decoration: none;
			}
			
			.link img{
				border: 1px solid #333;
				padding: 5px;
				background-color: #2A1B0A;
				border-radius: 5px; /* CSS3 */
			}
			
			.link img:hover{
				border: 1px dashed #999;
				background-color: #2A1BDF;
				width:60px;
			}
			
			#menu{
				background-color: #708090;
				border: 1px solid #333;				
				width: 300px;
			}
			
			.link2{
				border-left: 5px solid #FF0000;
				border-top: 1px solid #0000FF;
				border-bottom: 1px solid #0000FF;
				background-color: 	#FFFF00;
				display: block;
				margin-bottom: 10px;
				padding-left: 15px;	
				padding-top: 5px;
				padding-bottom: 5px;
				text-decoration: none;
			}
			
		</style>
		
	</head>
	
	<body>
		
		<div id="texto1">
			Texto 1
		</div>
		
		<div id="texto2">
			Texto 2
		</div>
		
		<a href="" class="link">
			<img src="imagens/icones/android.gif" title="Clique aqui para página do android" />
		</a>
		<a href="" class="link">
			<img src="imagens/icones/apple.gif" title="Clique aqui para página da apple"/>
		</a>
		<a href="" class="link">
			<img src="imagens/icones/blog.gif" title="Clique aqui para página do blog"/>
		</a>
		
		<div id="menu">
			<a href="" class="link2">Início</a>
			
			<a href="" class="link2">Empresa</a>
				
			<a href="" class="link2">Contato</a>	
		</div>
		
	</body>
</html>