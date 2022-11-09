<?php
$user = $_GET['username'];
$pass = $_GET['password'];
$valorActivo=1;
$fechaActual= date('y-m-d h:i:s');

//Conexion con la BBDD
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Obtenemos el valor de la contraseña del usuario que ha intentado iniciar sesion
$resultado = $mysqli->query("select password from users where username ='" .$user . "'");
while ($row = $resultado->fetch_assoc()) {
    $contra=$row['password'];
}

//Si la contraseña introducida coincide con la de la base de datos inciara sesion
if ($pass==$contra){
  session_start();
   $_SESSION['user']=$user;
   
//Sentencia sql para actualizar el valor de activo en la BBDD a 0 (inactivo)
   $stmt = $mysqli->prepare("UPDATE users SET last_login=?, active=? WHERE username=?");
   $stmt->bind_param('sis',$fechaActual,$valorActivo,$user);
   $stmt->execute();
   $mysqli->close();
   
    header("Location: posts.php");
    
//Si la contraseña no coincide volvera al login
}else{
    header("Location: V_login.php");
}

$mysqli->close();
