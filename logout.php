
<?php
session_start();
$user=($_SESSION['user']);
$valorActivo=0;

//Conexion BBDD
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Sentencia sql para actualizar el valor de activo en la BBDD a 0 (inactivo)
$stmt = $mysqli->prepare("UPDATE users SET active=? WHERE username=?");
$stmt->bind_param('is',$valorActivo,$user);
$stmt->execute();

//Cerrar conexion BBDD
$mysqli->close();

//Cerramos la sesion de la pagina
session_unset();
session_destroy();

//Volvemos a la pagina inicial
header("Location: pagina.php");
?>
