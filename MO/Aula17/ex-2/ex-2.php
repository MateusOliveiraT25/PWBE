<?php
$n1 = isset($_POST['n1']) ? floatval($_POST['n1']) : 0; // Valide e obtenha o valor de M² como um número float
function tabuada0() {
    global $n1;
    return $n1 *0;
   
}
function tabuada1() {
    global $n1;
    return $n1 *1;
   
}
function tabuada2() {
    global $n1;
    return $n1 *2;
   
}

function tabuada3() {
    global $n1;
    return $n1 *3;
   
}
function tabuada4() {
    global $n1;
    return $n1 *4;
   
}
function tabuada5() {
    global $n1;
    return $n1 *5;
   
}
function tabuada6() {
    global $n1;
    return $n1 *6;
   
}

function tabuada7() {
    global $n1;
    return $n1 *7;
   
}

function tabuada8() {
    global $n1;
    return $n1 *8;
   
}

function tabuada9() {
    global $n1;
    return $n1 *9;
   
}
function tabuada10() {
    global $n1;
    return $n1 *10;
   
}
echo " = " . tabuada0() . "\n";
echo " = " . tabuada1() . "\n";
echo " = " . tabuada2() . "\n";
echo " = " . tabuada3() . "\n";
echo " = " . tabuada4() . "\n";
echo " = " . tabuada5() . "\n";
echo " = " . tabuada6() . "\n";
echo " = " . tabuada7() . "\n";
echo " = " . tabuada8() . "\n";
echo " = " . tabuada9() . "\n";
echo " = " . tabuada10() . "\n";