<?

function concatena_algo(& $cadena , $cadena2)
{
    $cadena  .= 'y algo más.';
    $cadena2 .= 'y algo más.';
}

$frase  = 'Esto es una cadena, ';
$frase2 = 'Esto es una cadena, ';

concatena_algo($frase, $frase2);

echo $frase . '<br>';

echo $frase2;