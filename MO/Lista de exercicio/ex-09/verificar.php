<?php
function eNumeroPerfeito($numero) {
    if ($numero == 1) {
        return false;
    }

    $somaFatores = 1; // Inicializamos com 1 porque todo número é divisível por 1.

    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $somaFatores += $i;
            if ($i != ($numero / $i)) {
                $somaFatores += ($numero / $i);
            }
        }
    }

    return $somaFatores == $numero;
}

echo "Números perfeitos até 1000: ";
for ($i = 1; $i <= 1000; $i++) {
    if (eNumeroPerfeito($i)) {
        echo $i . " ";
    }
}
?>