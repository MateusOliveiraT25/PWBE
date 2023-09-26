<?php
//$nome = $_GET['nome'];
$nome =$_POST['nome'];
$email = $_POST['email'];
$endereço = $_POST['endereço'];
$dataNascimento =$_POST['dataNascimento'];


echo "Olá $nome<br>";
echo " seu email  $email<br> ";
echo " sua data de nascimento $dataNascimento<br>";
echo " mora em $endereço<br>"
?>