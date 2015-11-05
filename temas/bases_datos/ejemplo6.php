<?

//Ejemplo de uso de affected_rows

$mysqli = new mysqli('127.0.0.1', 'root', '', "curso_php");

/* Comprueba la conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* Inserta filas */

$mysqli->query("DROP TABLE IF EXISTS country_2");
$mysqli->query("CREATE TABLE country_2 SELECT * from country WHERE name LIKE '%a%'");
echo "Affected rows (INSERT): " . $mysqli->affected_rows . '<br />';

$mysqli->query("ALTER TABLE country_2 ADD active int default 0");

/* Actualiza filas */
$mysqli->query("UPDATE country_2 SET active=1 WHERE iso_code_2 IN ('DZ','AS')");
echo "Affected rows (UPDATE): " . $mysqli->affected_rows . '<br />';

/* Elimina filas */
$mysqli->query("DELETE FROM country_2 WHERE name LIKE '%e%'");
echo "Affected rows (DELETE): " . $mysqli->affected_rows . '<br />';

/* Selecciona todas las filas */
$result = $mysqli->query("SELECT * FROM country_2");
echo "Affected rows (SELECT): " . $mysqli->affected_rows . '<br />';

$result->close();

/* Elimina la tabla "Language" */
$mysqli->query("DROP TABLE country_2");

/* Cierra la conexión */
$mysqli->close();
