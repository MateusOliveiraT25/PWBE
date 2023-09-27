<?php
$arquivos = $_FILES["arquivos"];
$host = "localhost";
$username = "root";
$password = "";
$db = "pessoa";

if ($arquivos != NULL) {
    $nomeFinal = time() . '_' . $_FILES["arquivos"]["name"];

    if (move_uploaded_file($arquivos['tmp_name'], $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal);
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

        $mysqli = new mysqli($host, $username, $password, $db);

        // Verificar a conexão
        if ($mysqli->connect_error) {
            die("Conexão falhou: " . $mysqli->connect_error);
        }

        $stmt = $mysqli->prepare("INSERT INTO pessoa (PES_IMG) VALUES (?)");
        $stmt->bind_param("b", $mysqlImg);
        $stmt->send_long_data(0, $mysqlImg); // Enviar dados da imagem
        $stmt->execute();
        $stmt->close();

        unlink($nomeFinal); // Remover o arquivo após o upload

        header("location:exibir.php");
    } else {
        echo "Falha ao mover o arquivo.";
    }
} else {
    echo "Você não realizou o upload de forma satisfatória.";
}
?>
