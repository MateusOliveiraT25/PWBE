<?php

$n = isset($_POST['n1']) ? floatval($_POST['n1']) : 0;

function verifica($n) {
    if ($n < 0) {
        echo 'Nº Negativo';
    } elseif ($n > 0) {
        echo 'N° Positivo';
    } else {
        echo 'Igual a Zero';
    }
}

// Chamar a função para verificar o número
verifica($n);

?>
/*ex6
<?php
$n1 = isset($_POST['n1']) ? floatval($_POST['n1']) : 0;
$n2 = isset($_POST['n2']) ? floatval($_POST['n2']) : 0;

function crescente($n1, $n2) {
    if ($n1 < $n2) {
        echo $n1 + $n2;
    } else {
        echo $n2 + $n1;
    }
}

// Chamar a função
crescente($n1, $n2);
?>


<?php //ex-7
$a = isset($_POST['a']) ? floatval($_POST['a']) : 0;
$b = isset($_POST['b']) ? floatval($_POST['b']) : 0;

function crescente($a, $b) {
    if ($a > $b) {
        echo 'Maior que B';
    } else {
        echo 'Maior que A';
    }
}

// Chamar a função
crescente($a, $b);
?>





*/
