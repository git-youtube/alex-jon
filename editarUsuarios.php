<?php
$user = $_GET['username'];
$pass = $_GET['password'];
$email = $_GET['email'];
$rol = $_GET['rol'];
$id = $_GET['id'];

//Conexion con la BBDD
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Sentencia sql para actualizar el valor de activo en la BBDD a 0 (inactivo)
echo ($user." ".$pass." ".$email." ".$rol." ".$id);
$stmt = $mysqli->prepare("UPDATE users SET username=?, password=?,email=?,rol=? WHERE id=?");
$stmt->bind_param('sssii',$user,$pass,$email,$rol,$id);
$stmt->execute();
$mysqli->close();
?>