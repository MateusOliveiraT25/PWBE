<?php
$numero = 3; // qualquer número

function verificarPrimo($num) {
    if ($num <= 1) {
        return 'não primo';
    }
    
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return 'não primo';
        }
    
    
    return 'primo';
}

echo $numero . ' é ' . verificarPrimo($numero);
?>