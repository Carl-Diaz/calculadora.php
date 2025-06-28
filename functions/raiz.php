<?php

function raiz() {
    echo "\n¿Qué tipo de raíz desea calcular?\n";
    echo "1 - Raíz cuadrada\n";
    echo "2 - Raíz cúbica\n";
    $opcion = readline("Seleccione (1 o 2): ");

    switch ($opcion) {
        case 1:
            return raizCuadrada();
        case 2:
            return raizCubica();
        default:
            return "Opción no válida.";
    }
}

// Calcula la raíz cuadrada
function raizCuadrada() {
    $numero = readline("Ingrese un número para calcular su raíz cuadrada: ");
    if (!is_numeric($numero)) {
        return "Error: Entrada no válida.";
    }
    if ($numero < 0) {
        return "Error: No se puede calcular la raíz cuadrada de un número negativo.";
    }
    return sqrt($numero);
}

// Calcula la raíz cúbica
function raizCubica() {
    $numero = readline("Ingrese un número para calcular su raíz cúbica: ");
    if (!is_numeric($numero)) {
        return "Error: Entrada no válida.";
    }
    
}
