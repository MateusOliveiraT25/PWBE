<?php
$num = isset($_POST['n']) ? floatval($_POST['num']) : 0; // Valide e obtenha o valor de M² como um número float
  // qualquer número

function verificarParImpar($num) {
    if ($num % 2 == 0) {
        return 'par';
    } else {
        return 'ímpar';
    }
echo $num . ' é ' . verificarParImpar($num) . '<br>';


    
}
?>
