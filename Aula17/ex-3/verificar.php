<?php
$n1 = isset($_POST['n1']) ? floatval($_POST['n1']) : 0; // Valide e obtenha o valor de M² como um número float
$n2 = isset($_POST['n2']) ? floatval($_POST['n2']) : 0; // Valide e obtenha o valor de M² como um número float
    function calcularFatorial($n2) {
        if ($n2 <= 1) {
        return 1;
        } else {
       return $n2 * calcularFatorial($n2 - 1);
       }
      
       }
       $fatorial = calcularFatorial($n2); 
    

echo "Fatorial: $fatorial";

?>

