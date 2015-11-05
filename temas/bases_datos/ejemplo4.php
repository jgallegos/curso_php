<?

//Sentencias preparadas

$mysqli = new mysqli('127.0.0.1', 'curso_php', 'curso_phpii', "curso_php");

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


/* Sentencia preparada, etapa 2: vincular y ejecutar */
$id = 1;

if (!$sentencia->bind_param("i", $id)) {
    echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
}

if (!$sentencia->execute()) {
    echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
}else{
	echo "Sentencia ejecutada con éxito";
}