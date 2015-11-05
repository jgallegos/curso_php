<?
//Constantes de clase

class MiClase
{
    const CONSTANTE = 'valor constante';

    function mostrarConstante() {
        echo  self::CONSTANTE . '<br />';
    }
}

echo MiClase::CONSTANTE . '<br />';

$nombreclase = "MiClase";
echo $nombreclase::CONSTANTE . '<br />';

$clase = new MiClase();
$clase->mostrarConstante();

echo $clase::CONSTANTE . '<br />';