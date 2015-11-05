
<?

$mysqli = new mysqli('127.0.0.1', 'root', '', "curso_php");


if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/* Sentencia no preparada */
if (!$mysqli->query("DROP TABLE IF EXISTS test") || !$mysqli->query("CREATE TABLE test(id INT)")) {
    echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
}

/* Sentencia preparada, etapa 1: preparación */
if (!($sentencia = $mysqli->prepare("INSERT INTO test(id) VALUES (?)"))) {
     echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
}

/* Sentencia preparada, etapa 2: vinculación y ejecución */
$id = 1;
if (!$sentencia->bind_param("i", $id)) {
    echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
}

if (!$sentencia->execute()) {
    echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
}

/* Sentencia preparada: ejecución repetida, sólo datos transferidos desde el cliente al servidor */
for ($id = 2; $id < 5; $id++) {
    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    }
}

/* se recomienda el cierre explícito */
$sentencia->close();

/* Sentencia no preparada */
$resultado = $mysqli->query("SELECT id FROM test");
var_dump($resultado->fetch_all());
?>
