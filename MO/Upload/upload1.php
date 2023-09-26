<?php
if(isset($_POST['enviar-formulario'])):
    $formatos = array("png", "jpeg", "jpg","gif","pdf");
$extensao =pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

if(in_array($extensao,$formatos)):
    //echo "existe"
    $pasta = "./img/";
    $temporario = $_FILES['arquivo']['tmp_name'];
    $novoNome = uniqid() . ".$extensao";

    if(move_uploaded_file($temporario,$pasta.$novoNome)):
$mensagem = "Upload feito com sucesso.";
else:
        $mensagem = "Erro.";  
    endif;
else:
//echo "nao existe"
$mensagem = "Formato Invalido";
endif;

echo $mensagem;

endif;

echo "<br> <a href='index.html'> << Voltar </a>"





?>
