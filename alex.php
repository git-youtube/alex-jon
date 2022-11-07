<?php
$id = rand(0,99);
    $title = 'titulo';
    $brief = 'random';
    $content = 'kdmqwdok';
    $image = 'pep';
    $fecha = date('y-m-d h:i:s');
    $status = 1;
    $id_usu = 1;
    $mysqli = new mysqli("localhost", "root", "", "blog");

  
  
  

    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    /* Sentencia preparada, etapa 1: preparación */
 $sentencia = $mysqli->prepare("INSERT INTO posts(id, title, brief, content, image, created_at, status, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
 $sentencia->bind_param("isssssii", $id, $title, $brief, $content, $image, $fecha, $status, $id_usu);
 echo ($id . " " . $title . " " . $content .  " " .$image. " ". $fecha . " ". $status . " " . $id_usu);

 $sentencia->execute();

 
    $sentencia->close();
    header ("location: posts.php");


?>