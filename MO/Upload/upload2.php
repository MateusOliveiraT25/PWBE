<?php
if (isset($_POST['enviar-formulario'])) {
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif", "pdf");
    $mensagens = array();

    // Verifica se o diretório de upload existe e é gravável
    $diretorioUpload = "./img/";
    if (!is_dir($diretorioUpload) || !is_writable($diretorioUpload)) {
        die("Erro: Diretório de upload não existe ou não é gravável.");
    }

    // Iterar sobre cada arquivo enviado
    foreach ($_FILES['arquivos']['name'] as $key => $nomeArquivo) {
        $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);

        if (in_array($extensao, $formatosPermitidos)) {
            $temporario = $_FILES['arquivos']['tmp_name'][$key];
            $novoNome = uniqid() . ".$extensao";
            $caminhoCompleto = $diretorioUpload . $novoNome;

            if (move_uploaded_file($temporario, $caminhoCompleto)) {
                $mensagens[] = "Upload de '$nomeArquivo' feito com sucesso.";
            } else {
                $mensagens[] = "Erro ao fazer o upload de '$nomeArquivo'.";
            }
        } else {
            $mensagens[] = "Formato inválido para o arquivo '$nomeArquivo'. Os formatos permitidos são: " . implode(", ", $formatosPermitidos);
        }
    }

    // Exibir as mensagens de upload para cada arquivo
    foreach ($mensagens as $mensagem) {
        echo $mensagem . "<br>";
    }

    echo "<br> <a href='index.html'> << Voltar </a>";
}
?>
