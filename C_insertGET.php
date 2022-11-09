<?php
    $id = $_GET['id'];
    $title = $_GET['title'];
    $brief = $_GET['brief'];
    $content = $_GET['content'];
    $image = $_GET['image'];
    $created_at = $_GET['created_at'];
    $status = $_GET['status'];
    $user_id = $_GET['user_id'];

    $mysqli = new mysqli("localhost", "root", "", "test");
    
    $d = rand(0,99);
    $fecha = date('y-m-d h:i:s');
    $ID = 1;

    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
 $sentencia = $mysqli->prepare("INSERT INTO posts(id, title, brief, content, image, created_at, status, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
 $sentencia->bind_param("isssssii", $d, $title, $brief, $content, $image, $fecha, $status, $ID);

$sentencia->execute();
$sentencia->close();
    header ("location: posts.php");

    
?>
