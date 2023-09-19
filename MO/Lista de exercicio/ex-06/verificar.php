<?php
// Leitura dos valores
$a = isset($_POST['a']) ? floatval($_POST['a']) : 0; // Valide e obtenha o valor de M² como um número float
$b = isset($_POST['b']) ? floatval($_POST['b']) : 0; // Valide e obtenha o valor de M² como um número float
$c= isset($_POST['c']) ? floatval($_POST['c']) : 0; // Valide e obtenha o valor de M² como um número float

// Verificação se as medidas formam um triângulo
if ($a > 0 && $b > 0 && $c > 0) {
    if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {
        echo "As medidas formam um triângulo.";
    } else {
        echo "As medidas não formam um triângulo.";
    }
} else {
    echo "Por favor, insira medidas válidas maiores que zero.";
}
?>
