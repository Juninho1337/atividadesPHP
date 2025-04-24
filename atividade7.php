<?php

    $lado1 = 1;

    $lado2 = 3;

    $lado3 = 2;

    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "É um triângulo equilátero."; }

    elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "É um triângulo isósceles."; }
    else {
            echo "É um triângulo escaleno.";
        }
?>