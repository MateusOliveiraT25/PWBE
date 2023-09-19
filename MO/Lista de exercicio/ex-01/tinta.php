<?php
$m2 = isset($_POST['m2']) ? floatval($_POST['m2']) : 0; // Valide e obtenha o valor de M² como um número float

// Função para calcular a quantidade de latas necessárias
function calcularLatas($m2){
    return ceil($m2 / 18);
}

// Função para calcular a quantidade de galões necessários
function calcularGaloes($m2){
    return ceil($m2 / 3.6);
}

// Função para calcular o preço total de latas
function calcularPrecoLatas($m2){
    $quantidadeLatas = calcularLatas($m2);
    return $quantidadeLatas * 80;
}

// Função para calcular o preço total de galões
function calcularPrecoGaloes($m2){
    $quantidadeGaloes = calcularGaloes($m2);
    return $quantidadeGaloes * 25;
}

// Função para calcular o preço mínimo, considerando latas e galões
function calcularPrecoMinimo($m2){
    $quantidadeLatas = calcularLatas($m2);
    $quantidadeGaloes = calcularGaloes($m2);

    // Calcula o preço usando apenas latas
    $precoApenasLatas = $quantidadeLatas * 80;

    // Calcula o preço usando apenas galões
    $precoApenasGaloes = $quantidadeGaloes * 25;

    // Calcula o preço misturando latas e galões para cobrir $m2
    $areaRestante = $m2 % 18; // Área restante após usar as latas
    $quantidadeLatasRestantes = ceil($areaRestante / 18); // Quantidade de latas extras necessárias
    $quantidadeGaloesNecessarios = ceil($areaRestante / 3.6); // Quantidade de galões extras necessários
    $precoMisto = ($quantidadeLatas + $quantidadeLatasRestantes) * 80 + $quantidadeGaloesNecessarios * 25;

    return min($precoApenasLatas, $precoApenasGaloes, $precoMisto);
}


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
