<?
//Paso de argumentos a las funciones
function tomar_array($entrada)
{
    return $entrada[0] + $entrada[1];
}

$entrada = array(10,15);

echo tomar_array($entrada);