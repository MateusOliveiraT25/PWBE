<?php
$numero = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
  // qualquer número

function verificarParImpar($num) {
    if ($num % 2 == 0) {
        return 'par';
    } else {
        return 'ímpar';
    }
}

foreach ($numero as $num) {
    echo $num . ' é ' . verificarParImpar($num) . '<br>';
}
?>