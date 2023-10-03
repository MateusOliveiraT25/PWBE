<?php
$imagem = $_FILES["imagem"]; // Obtém o array de informações da imagem do formulário

$host = "localhost";
$username = "root";
$password = "";
$db = "pessoa";

if ($imagem != NULL) {
    // Gera um nome único para a imagem usando o timestamp e uma extensão fixa (neste caso, .jpg)
    $nomeFinal = time() . '.jpg';

    // Move a imagem do diretório temporário para o destino final usando o nome único gerado
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
        // Obtém o tamanho da imagem para armazenamento no banco de dados
        $tamanhoImg = filesize($nomeFinal);

        // Abre o arquivo da imagem e a converte para um formato seguro para o banco de dados
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

        // Conecta ao banco de dados
        $conn = mysqli_connect($host, $username, $password, $db);
        if (!$conn) {
            die("Impossível Conectar ao Banco de Dados: " . mysqli_connect_error());
        }

        // Prepara e executa a consulta SQL para inserir a imagem no banco de dados
        $query = "INSERT INTO PESSOA (PES_IMG) VALUES ('$mysqlImg')";
        if (mysqli_query($conn, $query)) {
            // Se a inserção for bem-sucedida, exclui o arquivo temporário e redireciona para a página de exibição
            unlink($nomeFinal);
            header("Location: exibir.php");
            exit;
        } else {
            // Se houver um erro na consulta SQL, exibe uma mensagem de erro
            echo "Erro ao inserir imagem no banco de dados: " . mysqli_error($conn);
        }

        // Fecha a conexão com o banco de dados
        mysqli_close($conn);
    }
} else {
    // Se nenhum arquivo foi enviado, exibe uma mensagem de erro
    echo "Você não realizou o upload de forma satisfatória.";
}
?>
