<?php
// Dados de conexão com a base de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

// Criar conexão com o BD
$conexao = mysqli_connect($servername, $username, $password, $dbname);

$nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $dataNasc= $_POST['dataNascimento'];
    // data em formato brasileiro para inserir no MySQL:
    $data = implode("-", array_reverse(explode("/", $dataNascimento)));
// Insere os dados na tabela do banco
$sql = "INSERT INTO clientes (nome, email, dataNascimento, endereco) VALUES ('$nome', '$email', '$data', '$endereco')";

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
