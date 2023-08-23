<?php
$raio = $_POST['raio'];
$celsius = $_POST['celsius'];
$farenheit = $_POST['farenheit'];

function perimetro() {
    global $raio;
    return 2 * 3.1415926535898 * $raio;
}
function area() {
    global $raio;
    return 3.1415926535898 * $raio*$raio;
}

function farenheit() {
    global $celsius;
    return $celsius * 9/5 + 32;
}

function celsius() {
    global $farenheit;
    return ($farenheit - 32)*5/9;
}
$celsius = celsius();
$farenheit = farenheit();
$perimetro = perimetro();
$area = area();
echo "O perimetro é $perimetro cm<br>";
echo "A area é $area cm<br>";
echo "é celsius $celsius<br>";
echo "é farenheit $farenheit";
?>