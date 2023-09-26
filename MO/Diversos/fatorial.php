<?php
function calcularFatorial($numero) {
 if ($numero <= 1) {
 return 1;
 } else {
return $numero * calcularFatorial($numero - 1);
}
}

$numero = 2; // Altere este valor para o número desejado
$resultado = calcularFatorial($numero);
echo "O fatorial de $numero é $resultado";
?>