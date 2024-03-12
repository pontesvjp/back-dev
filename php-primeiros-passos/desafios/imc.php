<?php

$peso = 56;
$altura = 1.64;
$resultado = $peso / ($altura * $altura);

$resultado;

if ($resultado <= 16.9) {
    echo "seu IMC eh $resultado e esta muito abaixo do peso";
}

if ($resultado >= 17 && $resultado <= 18.4) {
    echo "seu IMC eh $resultado e esta abaixo do peso";
}

if ($resultado >= 18.5 && $resultado <= 24.9) {
    echo "seu IMC eh $resultado e esta no peso normal";
}

if ($resultado >= 25 && $resultado <= 29.9) {
    echo "seu IMC eh $resultado e esta acima do peso";
}

if ($resultado >= 30 && $resultado <= 34.9) {
    echo "seu IMC eh $resultado e esta em obesidade 1";
}

if ($resultado >= 35 && $resultado <= 40) {
    echo "seu IMC eh $resultado e obesidade 2"
    ;
} else if ($resultado > 40) {
    echo "seu IMC eh $resultado e VOCE ESTA IMENSO";
}
