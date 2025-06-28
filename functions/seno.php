<?php


function seno() {
    $grados = readline("Ingrese el ángulo en grados: ");
    $radianes = deg2rad($grados); // Convierte los grados a radianes, ya que la función sin() trabaja con radianes.
    $resultado = sin($radianes); // Calcula el seno del ángulo en radianes.
    return $resultado;
}
