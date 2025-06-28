# Calculadora en PHP (Consola)

Este es un proyecto de calculadora por consola en PHP que permite realizar operaciones matemáticas básicas y funciones científicas como seno y raíces.

---

## Funcionalidades

Operaciones básicas:
- Suma
- Resta
- Multiplicación
- División

Funciones científicas:
- Cálculo de seno (ángulo en grados)
- Cálculo de raíz cuadrada
- Cálculo de raíz cúbica

---

## Estructura del proyecto

```
INCLUDES/
|
├── index.php                 # Programa principal (menú)
└── functions/
    ├── basicas.php           # Funciones de suma, resta, multiplicación y división
    ├── seno.php              # Función seno()
    └── raiz.php              # Funciones para raíz cuadrada y cúbica
```

---

## Cómo ejecutar

1. Asegúrate de tener PHP instalado. Puedes verificarlo con:

```
php -v
```

2. Abre una terminal en el directorio del proyecto y ejecuta:

```
php index.php
```

3. Interactúa con el menú desde la consola.

---

## Ejemplo de uso

```
Seleccione el número de la operación que desea realizar:
1 - Operaciones básicas
2 - Seno
3 - Raíz cuadrada/cúbica
4 - Salir

Seleccione la operación: 1

Seleccione la operación básica:
1 - Suma
2 - Resta
3 - Multiplicar
4 - División
5 - Volver al menú principal
```

---

## Validaciones

- Manejo de división por cero.
- Verificación de entrada numérica en seno y raíces.
- Permite raíces cúbicas de números negativos.
- Repite menús hasta que el usuario decida salir.

---

## Autor

Carlos Diaz  
[GitHub: @Carl-Diaz](https://github.com/Carl-Diaz)

Proyecto desarrollado como práctica de programación en PHP desde consola.


