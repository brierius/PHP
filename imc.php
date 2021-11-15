<?php

$peso = 115;
$altura = 1.68;

$imc = $peso / ($altura * $altura);
    if ($imc <= 18){
        echo "Seu imc é $imc, você está abaixo do peso"
    ;}
    if ($imc >= 18 && $imc <= 24.9){
        echo "Seu imc é $imc, você está com o peso normal"
    ;}
    if ($imc >= 25 && $imc <= 29.9){
        echo "Seu imc é $imc, você está com sobrepeso"
    ;}
    if ($imc >= 30 && $imc <= 34.9){
        echo "Seu imc é $imc, você está com obesidade Grau 1"
    ;}
    if ($imc >= 35 && $imc <= 39.9){
        echo "Seu imc é $imc, você está com obesidade Grau 2" 
    ;} if ($imc >= 40){
        echo "Seu imc é $imc, você está com obesidade Grau 3, comumente chamada de obesidade mórbida"
    ;}
    
    





// imc = $peso / ($altura x $altura)
//IMC = 80 kg ÷ (1,80 m × 1,80 m) = 24,69 kg/m2 (Peso idea$l)
/*
abaixo $peso 18.5
normal 18.5-24.9
$sobre $peso 25-29.9
obesidade grau 1 30-34.9$
grau 2 35-39.9
grau 3 morbida maior 40

*/
