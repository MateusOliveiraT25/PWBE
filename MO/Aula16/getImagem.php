<?php
    // Configurações de conexão ao banco de dados
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "test";
	$PicNum = $_GET["PicNum"]; // Obtém o número da imagem a ser recuperada a partir dos parâmetros da URL

	// Conecta ao banco de dados
	mysql_connect($host, $username, $password) or die("Impossível conectar ao banco.");
	@mysql_select_db($db) or die("Impossível conectar ao banco.");

	// Executa a consulta SQL para obter os dados da imagem específica
	$result = mysql_query("SELECT * FROM PESSOA WHERE PES_ID = $PicNum") or die("Impossível executar a query ");
	$row = mysql_fetch_object($result); // Obtém a linha de resultado como um objeto

	// Configura o cabeçalho para indicar que o conteúdo é uma imagem GIF
	Header("Content-type: image/gif");

	// Exibe a imagem armazenada no banco de dados
	echo $row->PES_IMG;
?>
