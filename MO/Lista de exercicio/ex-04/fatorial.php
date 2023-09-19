<?php
$n1 = isset($_POST['n1']) ? floatval($_POST['n1']) : 0; // Valide e obtenha o valor de M² como um número float
$n2 = isset($_POST['n2']) ? floatval($_POST['n2']) : 0; // Valide e obtenha o valor de M² como um número float
$base = $n1;
$expoente = $n2;
$resultado = potencia($base, $expoente);
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
function quad1() {
    global $n1;
    return $n1 * $n1;
     
}
function potencia($n1, $n2) {
    $resultado =1 ;
    $contador = 0;
        while ($contador < $n2) {
            $resultado *= $n1;
            $contador++;
        }
    
        return $resultado;
    }
    function calcularFatorial($n2) {
        if ($n2 <= 1) {
        return 1;
        } else {
       return $n2 * calcularFatorial($n2 - 1);
       }
      
       }
       $fatorial = calcularFatorial($n2); 
    

echo "Soma: " . soma() . "\n";
echo "Subtração: " . sub() . "\n";
echo "Divisão: " . div() . "\n";
echo "Multiplicação: " . mult() . "\n";
echo "Quadrado: " . quad1() . "\n";
echo "Potencia: $resultado \n";
echo "Fatorial: $fatorial";

?>

