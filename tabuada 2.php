<?php
$a = 1; // Aqui colocamos o multiplicador
while ($a <= 9) { //Criamos a condição, enquanto o multiplicador for menor ou igual 9 executamos o código abaixo.
    for ($i=0; $i <= 10; $i++) { // Aqui usamos a lógica acima para estabelecer o multplicando 
        echo "$a * $i = ".$a * $i.PHP_EOL; // aqui fazemos multiplicador X multiplicando 
    }
    $a++.PHP_EOL; // Aqui soma-se +1 ao multiplicador até atingir o 9.
}