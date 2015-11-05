<?

//Conexiones con la base de datos

$mysqli = new mysqli('127.0.0.1', 'curso_php', 'curso_phpii', "curso_php");

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";

