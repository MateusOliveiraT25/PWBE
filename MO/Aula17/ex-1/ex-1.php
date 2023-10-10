<?php

$n = isset($_POST['n1']) ? floatval($_POST['n1']) : 0;

function verifica($n) {
    if ($n < 0) {
        echo 'Nº Negativo';
    } elseif ($n > 0) {
        echo 'N° Positivo';
    } else {
        echo 'Igual a Zero';
    }
}

// Chamar a função para verificar o número
verifica($n);

?>
