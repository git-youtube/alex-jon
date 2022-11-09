
<?php
$name = $_GET['name'];
$comment = $_GET['comment'];
$email = $_GET['email'];
$id_post = $_GET['id'];
$id = rand(0,99);
$fecha = date('y-m-d h:i:s');
$status = 1;
session_start();
$user=($_SESSION['user']);

$mysqli = new mysqli("localhost", "root", "", "blog");


$resultado = $mysqli->query("select id from users where username ='" .$user . "'");
while ($row = $resultado->fetch_assoc()) {
    $user_id=$row['id'];
}


echo ($id." ".$name." ". $comment." ". $email." ". $id_post." ". $user_id." ". $fecha." ". $status);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sentencia = $mysqli->prepare("INSERT INTO comments(id, name, comment, email, post_id, user_id, created_at, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$sentencia->bind_param("isssiisi", $id, $name, $comment, $email, $id_post, $user_id, $fecha, $status);

$sentencia->execute();
$sentencia->close();

header ("location: comentarios.php?id=". $id_post);


?>
