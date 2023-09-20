<?php
// Leitura dos valores
$a = isset($_POST['a']) ? floatval($_POST['a']) : 0; // Valide e obtenha o valor de 'a' como um número float
$b = isset($_POST['b']) ? floatval($_POST['b']) : 0; // Valide e obtenha o valor de 'b' como um número float
$c = isset($_POST['c']) ? floatval($_POST['c']) : 0; // Valide e obtenha o valor de 'c' como um número float

// Verificação se as medidas formam um triângulo
if ($a > 0 && $b > 0 && $c > 0) { // Verifique se 'a', 'b' e 'c' são maiores que zero
   // desigualdade triangular
    if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) { //a medida de um lado sempre tem que ser menor que a soma das medidas dos outros dois
        if ($a == $b && $b == $c) {
            echo "As medidas formam um triângulo equilátero."; // Se todos os lados forem iguais, é um triângulo equilátero
        } elseif ($a == $b || $a == $c || $b == $c) {
            echo "As medidas formam um triângulo isósceles."; // Se dois lados forem iguais, é um triângulo isósceles
        } else {
            echo "As medidas formam um triângulo escaleno."; // Se nenhum dos casos acima for verdadeiro, é um triângulo escaleno
        }
    } else {
        echo "As medidas não formam um triângulo."; // Se a desigualdade triangular não for atendida, não é um triângulo
    }
} else {
    echo "Por favor, insira medidas válidas maiores que zero."; // Se algum dos lados não for maior que zero, não são medidas válidas
}
?>
