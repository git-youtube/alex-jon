<?php
    $id = rand(0,99);
    $title = $_GET['title'];
    $brief = $_GET['brief'];
    $content = $_GET['content'];
    $image = $_GET['image'];
    $fecha = date('y-m-d h:i:s');
    $status = $_GET['status'];
    session_start();
    $user=($_SESSION['user']);
    
    
    
    $mysqli = new mysqli("localhost", "root", "", "blog");
    
    $resultado = $mysqli->query("select id from users where username ='" .$user . "'");
    while ($row = $resultado->fetch_assoc()) {
        $user_id=$row['id'];
    }
    
  
    
    echo $user_id;

    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
 $sentencia = $mysqli->prepare("INSERT INTO posts(id, title, brief, content, image, created_at, status, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
 $sentencia->bind_param("isssssii", $id, $title, $brief, $content, $image, $fecha, $status, $user_id);

$sentencia->execute();
$sentencia->close();
header ("location: posts.php");

    
?>
