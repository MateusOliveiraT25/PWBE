<?php
function ehPrimo($numero) {
if ($numero <= 1) {
 return false;
 }

if ($numero <= 3) {
 return true;
}

 if ($numero % 2 == 0 || $numero % 3 == 0) {
return false;
}

$i = 5;
while ($i * $i <= $numero) {
if ($numero % $i == 0 || $numero % ($i + 2) == 0) {
return false;
 }
 $i += 6;
}

return true;
}

$numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0; // Valide e obtenha o valor de M² como um número float // Altere este valor para o número que deseja verificar
if (ehPrimo($numero)) {
echo "$numero é primo.";
} else {
 echo "$numero não é primo.";
}
?>
