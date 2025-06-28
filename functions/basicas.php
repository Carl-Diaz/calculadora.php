<?php

function menu(){
    echo "\nSeleccione el número de la operación que desea realizar:\n";
    echo "1 - Operaciones básicas\n2 - Seno\n3 - Raíz\n4 - Salir\n";
    $decision = readline("Seleccione la operación: ");
    return $decision;
}

function sumar() {
    $suma = readline("Digite el primer número: ");
    $can = readline("¿Cuántos números desea sumar adicionalmente?: ");
    for ($i = 1; $i <= $can; $i++) {
        $num = readline("Digite el número $i: ");
        $suma += $num;
    }
    return $suma;
}

function restar() {
    $resta = readline("Digite el número inicial: ");
    $can = readline("¿Cuántos números desea restar?: ");
    for ($i = 1; $i <= $can; $i++) {
        $num = readline("Digite el número $i: ");
        $resta -= $num;
    }
    return $resta;
}

function multiplicacion() {
    $can = readline("¿Cuántos números desea multiplicar?: ");
    $resultado = 1;
    for ($i = 1; $i <= $can; $i++) {
        $num = readline("Digite el número $i: ");
        $resultado *= $num;
    }
    return $resultado;
}

function division() {
    $dividendo = readline("Digite el dividendo: ");
    $divisor = readline("Digite el divisor: ");
    if ($divisor == 0) {
        return "Error: División por cero.";
    }
    return $dividendo / $divisor;
}
