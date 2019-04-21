<?php

# String
$nombre = "Carlos";

# Integer: Numeros enteros
$numero = 7;

# Double: Numeros con decimales
$numero_decimal = 7.7;

# Boolean : Verdadero o falso (true / false)
$verdadero = false;

# Array: Arreglo
# Object: Objeto
# Class: Clase
# Null: Cuando una variable aun no se le ha asignado ningun valor

//echo 'Hola, $nombre';

#Con comillas dobles podes traer variables
//echo "Hola, $nombre";

#con el punto concatenas variables, es más seguro
#echo 'Hola, ' .$nombre;

//gettype te da el tipo de dato
echo gettype($numero_decimal);

?>