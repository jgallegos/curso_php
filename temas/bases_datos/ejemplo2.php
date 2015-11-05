<?

//Ejecutar sentencias

$mysqli = new mysqli('127.0.0.1', 'root', '', "curso_php");

if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
    !$mysqli->query("CREATE TABLE test(id INT)") ||
    !$mysqli->query("INSERT INTO test(id) VALUES (1)")) {
    echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
} else {
	echo 'Se creo la tabla test correctamente';
}