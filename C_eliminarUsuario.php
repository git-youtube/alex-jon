<?php
$id=$_GET['username'];

//Conexion con la BBDD
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Sentencia sql para borrar al usuario
$stmt = $mysqli->prepare("DELETE FROM users WHERE id=?");
$stmt->bind_param('i',$id);
$stmt->execute();
$mysqli->close();

header("Location: gestionUsuarios.php");

?>