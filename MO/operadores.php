<?php
$n1 = 10;
$n2 = 20;

// Função para calcular a média
function soma() {
    global $n1, $n2;
    return $n1 + $n2;
}

function sub() {
    global $n1, $n2;
    return $n1 - $n2;
}

function div() {
    global $n1, $n2;
    if ($n2 != 0) {
        return $n1 / $n2;
    } else {
        return "Divisão por zero não é permitida.";
    }
}

function mult() {
    global $n1, $n2;
    return $n1 * $n2;
}
function quad() {
    global $n1;
    return $n1 * $n1;
     global $n2;
    return $n2 * $n2;
}

echo "Soma: " . soma() . "\n";
echo "Subtração: " . sub() . "\n";
echo "Divisão: " . div() . "\n";
echo "Multiplicação: " . mult() . "\n";
echo "Quadrado: " . quad() . "\n";
?>
