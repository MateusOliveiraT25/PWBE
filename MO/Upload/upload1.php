<?php
if (isset($_POST['enviar-formulario'])) {
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif", "pdf");
    $nomeArquivo = $_FILES['arquivo']['name'];
    $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);

    if (in_array($extensao, $formatosPermitidos)) {
        $diretorioUpload = "./img/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid() . ".$extensao";
        $caminhoCompleto = $diretorioUpload . $novoNome;

        if (move_uploaded_file($temporario, $caminhoCompleto)) {
            $mensagem = "Upload feito com sucesso.";
        } else {
            $mensagem = "Erro ao fazer o upload.";
        }
    } else {
        $mensagem = "Formato inválido. Os formatos permitidos são: " . implode(", ", $formatosPermitidos);
    }

    echo $mensagem;
    echo "<br> <a href='index.html'> << Voltar </a>";
}
?>
