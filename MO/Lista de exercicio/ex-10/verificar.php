<?php
// Leitura dos valores
$v1 = isset($_POST['v1']) ? floatval($_POST['v1']) : 0; // Valide e obtenha o valor de M² como um número float
function valor5($v1){
  $v5 = $v1 * 0.05;
  return $v5;
}
function valor50($v1){
  $v50 = $v1 * 0.5;
  return $v50;
}

$v5 = valor5($v1);
$v50 = valor50($v1);

echo "5% do valor: $v5<br>";
echo "50% do valor: $v50<br>";
?>
