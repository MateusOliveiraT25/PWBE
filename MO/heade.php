<?php
$x = 5;
if($x <= 5):
header('Location: sucesso.php');
else: 
header('Location: erro.php');
 endif;
?>