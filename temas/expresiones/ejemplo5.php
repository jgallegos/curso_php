<?

$primero = FALSE;
$segundo = 'Segundo';
$tercero = 'Tercero';

//Operador terciario
$resultado = $primero ? $segundo : $tercero;

echo $resultado . '<br>';

//Post-incremento
$b = $a = 5;
$c = $a++;

echo "c = $c <br>";
echo "a = $a <br>";

//Pre-incremento
$e = $d = ++$b;

echo "e = $e <br>";
echo "d = $d <br>";


function doble($i)
{
    return $i*2;
}

$f = doble($d++);
$g = doble(++$e);
$h = $g += 10;

echo "f = $f <br>";
echo "g = $g <br>";
echo "h = $h <br>";

