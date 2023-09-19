<?php
// Seu script principal
include 'tinta.php';

// Agora você pode chamar as funções do arquivo incluído
$m2 = isset($_POST['m2']) ? floatval($_POST['m2']) : 0;
if ($m2 > 0) {
    $quantidadeLatas = calcularLatas($m2);
    $quantidadeGaloes = calcularGaloes($m2);
    $precoApenasLatas = calcularPrecoLatas($m2);
    $precoApenasGaloes = calcularPrecoGaloes($m2);
    $precoMinimo = calcularPrecoMinimo($m2);

    echo "Quantidade de latas necessárias: $quantidadeLatas<br>";
    echo "Quantidade de galões necessários: $quantidadeGaloes<br>";
    echo "Preço ao comprar apenas latas: R$ $precoApenasLatas<br>";
    echo "Preço ao comprar apenas galões: R$ $precoApenasGaloes<br>";
    echo "Preço mínimo (misturando latas e galões): R$ $precoMinimo";
} else {
    echo "Por favor, insira uma quantidade válida de M².";
}
?>
