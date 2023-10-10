<?php
$num1 = isset($_POST['n1']) ? floatval($_POST['n1']) : 0;
$num2 = isset($_POST['n2']) ? floatval($_POST['n2']) : 0;
echo "Escolha a operação aritmética (1) Soma, (2) Subtração, (3) Divisão e (4) Multiplicação? ";
$opA  = isset($_POST['n3']) ? floatval($_POST['n3']) : 0;



if ($opA == 3 && $num2 == 0) {
    echo "Erro: Não é possível dividir por zero.";
} else {
    switch ($opA) {
        case 1:
            echo "Resultado da Soma é: " . ($num1 + $num2);
            break;
        case 2:
            echo "Resultado da Subtração é: " . ($num1 - $num2);
            break;
        case 3:
            echo "Resultado da Divisão é: " . ($num1 / $num2);
            break;
        case 4:
            echo "Resultado da Multiplicação é: " . ($num1 * $num2);
            break;
        default:
            echo "Opção inválida";
    }
}



?>

