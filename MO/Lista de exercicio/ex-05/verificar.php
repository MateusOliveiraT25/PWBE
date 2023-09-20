<?php
// Leitura dos valores da viagem
$distanciaPercorrida = isset($_POST['distanciaPercorrida']) ? floatval($_POST['distanciaPercorrida']) : 0; // Valide e obtenha o valor de M² como um número float
$consumoTransporte = isset($_POST['consumoTransporte']) ? floatval($_POST['consumoTransporte']) : 0; // Valide e obtenha o valor de M² como um número float
$precoCombustivelPorLitro = isset($_POST['precoCombustivelPorLitro']) ? floatval($_POST['precoCombustivelPorLitro']) : 0; // Valide e obtenha o valor de M² como um número float


// Cálculo do custo total da viagem
$quantidadeLitrosCombustivel = $distanciaPercorrida / $consumoTransporte;
$custoTotal = $quantidadeLitrosCombustivel * $precoCombustivelPorLitro;

// Formatação do valor do custo total da viagem
$custoFormatado = "R$" . number_format($custoTotal, 2, ',', '.');

// Mensagem com o resultado
$mensagem = "Distância percorrida: $distanciaPercorrida km\n"
          . "Consumo do transporte: $consumoTransporte km/l\n"
          . "Preço do combustível: R$$precoCombustivelPorLitro por litro\n"
          . "Quantidade de litros de combustível: " . number_format($quantidadeLitrosCombustivel, 2, ',', '.') . " litros\n"
          . "Custo total da viagem: $custoFormatado";

echo $mensagem;
?>

