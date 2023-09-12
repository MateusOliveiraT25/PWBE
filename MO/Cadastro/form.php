<?php
// Dados de conexão com a base de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banco";

// Criar conexão com o BD
$conexao = mysqli_connect($servername, $username, $password, $dbname);


// Insere os dados na tabela do banco
$sql = "INSERT INTO clientes (nome, email, dataNascimento, endereco) VALUES ('$nome', '$email', '$dataNascimento', '$endereco')";

if (mysqli_query($conexao, $sql)) {
    // Verifica se a inserção foi bem-sucedida
    if (mysqli_affected_rows($conexao) > 0) {
        // Redireciona para uma página de sucesso
        header('Location: sucesso.php');
        exit; // Certifique-se de sair para evitar que o restante do código seja executado
    } else {
        // Redireciona para uma página de erro
        header('Location: erro.php');
        exit; // Certifique-se de sair para evitar que o restante do código seja executado
    }
} else {
    // Redireciona para uma página de erro
    header('Location: erro.php');
    exit; // Certifique-se de sair para evitar que o restante do código seja executado
}


// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
