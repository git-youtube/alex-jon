<?php
error_reporting(0);
session_start();
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
    <title>Proyecto blog</title>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js"
        integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"
        integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="pagina.css">

    <style>
    
    </style>
</head>
<body>
    <nav class="nav">
        <ul>
            <li><a href="#"> Inicio</a></li>
            <li><a href="posts.php">Post</a> </li>
            <h3>Bienvenido</h3>
    <?php 
    if($compara!=null){
        echo $_SESSION['user'];
    if($compara=="1"){
        echo "<h3>Editor</h3>";
    }elseif($compara=="2"){
        echo "<h3>Admin</h3>";
    }
    
    echo '<a class="boton" href="logout.php"> Logout</a>';
    }else{
        echo '<a class="boton" href="V_login.php"> Login</a>';
    };
        ?>
          
        </ul>
    </nav>
 
    <div >
        
    </div>


</body>
</html>