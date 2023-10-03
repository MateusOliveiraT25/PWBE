<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "pessoa";

// Conectar ao banco de dados
$conn = mysqli_connect($host, $username, $password, $db);

// Verificar se a conexão foi bem-sucedida
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Executar uma consulta SQL para selecionar todos os registros da tabela PESSOA
$result = mysqli_query($conn, "SELECT * FROM PESSOA");

// Iterar sobre os resultados e exibir as imagens
while ($row = mysqli_fetch_assoc($result)) {
    // Exibir cada imagem como uma tag <img> usando o formato base64
    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['PES_IMG']) . '" /><br>';
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>
