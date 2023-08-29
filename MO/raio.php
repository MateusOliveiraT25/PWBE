<?php
$raio = $_POST['raio'];
$celsius = $_POST['celsius'];
$farenheit = $_POST['farenheit'];
$valorHora = floatval($_POST["valorHora"]);
$horasTrabalhadas = floatval($_POST["horasTrabalhadas"]);

function perimetro() {
    global $raio;
    return 2 * 3.1415926535898 * $raio;
}

function area() {
    global $raio;
    return 3.1415926535898 * $raio * $raio;
}

function farenheitCelsius() {
    global $farenheit;
    return ($farenheit - 32) * 5 / 9;
}

function celsiusFarenheit() {
    global $celsius;
    return $celsius * 9 / 5 + 32;
}

$celsius = celsiusFarenheit();
$farenheit = farenheitCelsius();
$perimetro = perimetro();
$area = area();

$salarioBruto = $valorHora * $horasTrabalhadas;
$ir = $salarioBruto * 0.11;
$inss = $salarioBruto * 0.08;
$sindicato = $salarioBruto * 0.05;
$salarioLiquido = $salarioBruto - $ir - $inss - $sindicato;

echo "O perímetro é $perimetro cm<br>";
echo "A área é $area cm²<br>";
echo "É Celsius $celsius<br>";
echo "É Fahrenheit $farenheit<br>";

echo "<br>Salário Bruto: R$ " . number_format($salarioBruto, 2) . PHP_EOL;
echo "IR (11%): R$ " . number_format($ir, 2) . PHP_EOL;
echo "INSS (8%): R$ " . number_format($inss, 2) . PHP_EOL;
echo "Sindicato (5%): R$ " . number_format($sindicato, 2) . PHP_EOL;
echo "Salário Líquido: R$ " . number_format($salarioLiquido, 2) . PHP_EOL;
?>

