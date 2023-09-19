<?php
// Leitura dos números
$N1 = isset($_POST['N1']) ? floatval($_POST['N1']) : 0; //n1
$N2 = isset($_POST['N2']) ? floatval($_POST['N2']) : 0; //n2

// Inicialização do contador
$N3 = 0;

// Cálculo da multiplicação por somas sucessivas
for ($i = 0; $i < $N2; $i++) {
    $N3 += $N1;
}

// Exibição do resultado
echo "O resultado da multiplicação é: $N3\n";


?>

