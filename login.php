<?php
$user = $_GET['username'];
$pass = $_GET['password'];
$esSuperior=0;
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$resultado = $mysqli->query("select password from users where username ='" .$user . "'");
$esSuperior= $mysqli->query("select rol from users where username ='" .$user . "'");

while ($row = $resultado->fetch_assoc()) {
    $contra=$row['password'];
}

echo $pass."=".$contra;
if($pass==$contra&&$esSuperior!=NULL){
    echo "user y pass correctos";
    session_start();
    $_SESSION['user']=$user;
    $_SESSION['rol']=$esSuperior;
    header("Location: blog.php");
}elseif ($pass==$contra){
 echo "user y pass correctos";
  session_start();
   $_SESSION['user']=$user;
    header("Location: blog.php");
}else{
    header("Location: V_login.php");
}

$mysqli->close();
