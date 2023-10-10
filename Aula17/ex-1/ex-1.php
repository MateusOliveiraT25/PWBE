<?php

$n1 = isset($_POST['n1']) ? floatval($_POST['n1']) : 0; // Valide e obtenha o valor de M² como um número float
function verifica( ) {
if($n1  = 0):
echo('Igual a zero');
elseif ($n1  > 0) :
    echo('N° Positivo'); 
endif;     
}


?>