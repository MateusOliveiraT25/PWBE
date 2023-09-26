<?php
function soma($n1, $n2)
{
	return $n1 +$n2;
}
?>

<?php
include "operadores.php";
$n1 = 5;
$n2 = 2;

echo "Soma: " . soma() . "\n";
echo "Subtração: " . sub() . "\n";
echo "Divisão: " . div() . "\n";
echo "Multiplicação: " . mult() . "\n";
?>