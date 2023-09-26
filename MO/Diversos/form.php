<?php
//$nome = $_GET['nome'];
$nome =$_POST['nome'];
$email = $_POST['email'];
$endereço = $_POST['endereço'];
$telefone =$_POST['telefone'];


echo "Olá $nome<br>";
echo " seu email  $email<br> ";
echo " seu numero  de celular $telefone<br>";
echo " mora em $endereço<br>"
?>