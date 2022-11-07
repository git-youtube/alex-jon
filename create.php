<?php
$id=rand(0,99);
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$user = $_GET['username'];
$pass = $_GET['password'];
$fechaActual =  date('y-m-d h:i:s');
$valorActivo=0;
$valorRol=0;

//Conexion a la BBDD
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Sentencia para introducir a un usuario nuevo en la BBDD
$stmt = $mysqli->prepare("INSERT INTO users (id,username,password,email,created_on, last_login, active,first_name,last_name,rol) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?,?)");
$stmt->bind_param('isssssissi',$id,$user,$pass,$email,$fechaActual,$fechaActual,$valorActivo,$nombre,$apellido,$valorRol);
$ok=$stmt->execute();

//Si se ha introducido correctamente devolvera al login si no te devolvera a crear la cuenta
if ($ok==1) {
    header("Location: login.php");
} else {
    header("Location: create.php");
}
$mysqli->close();

?>