<?php
session_start();
if(!isset($_SESSION['user'])){
    
    header("Location: V_login.php");
}
$user=($_SESSION['user']);
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$resultado2= $mysqli->query("select rol from users where username ='" .$user . "'");


while ($row = $resultado2->fetch_assoc()) {
    $compara=$row['rol'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>dashboard</h1>
    <h3>Bienvenido <?=$_SESSION['user']?></h3>
    <?php if($compara=="1"){
        echo "<h3>Editor</h3>";
    }elseif($compara=="2"){
        echo "<h3>Admin</h3>";
    };
        ?>
    <br><br><br>
    <a href="logout.php">logout</a>
</body>
</html>