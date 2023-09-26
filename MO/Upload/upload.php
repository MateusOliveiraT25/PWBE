<?php
$dir = "./img/";

$file = $_FILES["arquivo"];

if(move_uploaded_file($file["tmp_name"], $dir.$file["name"])){
    echo "Arquivo enviado com sucesso";
    }
else {
    "Erro, arquivo não foi enviado";
}











?>