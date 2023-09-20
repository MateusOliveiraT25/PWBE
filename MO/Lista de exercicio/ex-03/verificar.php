<?php
// Leitura dos números
$N1 = isset($_POST['N1']) ? floatval($_POST['N1']) : 0; // Primeiro número
$N2 = isset($_POST['N2']) ? floatval($_POST['N2']) : 0; // Segundo número

// Verifica se o segundo número é zero (divisão por zero)
if ($N2 == 0) {
    echo "Erro: Divisão por zero.";
} else {
    // Inicialização do resultado
    $resultado = 0;

    // Determina qual número é o maior e qual é o menor
    $maior = max($N1, $N2);
    $menor = min($N1, $N2);

    // Realiza a divisão por subtrações sucessivas
    while ($maior >= $menor) {
        $maior -= $menor;
        $resultado++;
    }

    // Exibição do resultado
    echo "O resultado da divisão é: $resultado";
}
?>


