<?php

require './functions/basicas.php';

while (true) {
    $decision = menu();

    switch ($decision) {
        case 1:
            // Menú de operaciones básicas en bucle
            while (true) {
                echo "\nSeleccione la operación básica:\n";
                echo "1 - Suma\n2 - Resta\n3 - Multiplicar\n4 - División\n5 - Volver al menú principal\n";
                $operacion = readline("Seleccione: ");

                switch ($operacion) {
                    case 1:
                        $resultado = sumar();
                        echo "El resultado de la suma es: $resultado\n";
                        break;
                    case 2:
                        $resultado = restar();
                        echo "El resultado de la resta es: $resultado\n";
                        break;
                    case 3:
                        $resultado = multiplicacion();
                        echo "El resultado de la multiplicación es: $resultado\n";
                        break;
                    case 4:
                        $resultado = division();
                        echo "El resultado de la división es: $resultado\n";
                        break;
                    case 5:
                        echo "Volviendo al menú principal...\n";
                        break 2;
                    default:
                        echo "Opción no válida en operaciones básicas.\n";
                        break;
                }
            }
            break;

        case 2:
            require_once './functions/seno.php';
            $resultado = seno();
            echo "El seno del ángulo es: $resultado\n";
            break;

        case 3:
            require_once './functions/raiz.php';
            $resultado = raiz();
            echo "La raíz cuadrada es: $resultado\n";
            break;

        case 4:
            echo "Gracias por usar la calculadora ADSO\n";
            exit;

        default:
            echo "Opción no válida. Intente nuevamente.\n";
            break;
    }
}
