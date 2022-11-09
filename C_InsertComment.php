
<?php
/*
$id = $_GET['id'];
$name = $_GET['name'];
$comment = $_GET['comment'];
$email = $_GET['email'];
$post_id = $_GET['post_id'];
$created_at = $_GET['created_at'];
$status = $_GET['status'];

$mysqli = new mysqli("localhost", "root", "", "test");
$bloque=$_GET['id'];
$sql = "SELECT *  FROM posts WHERE id=".$bloque;

$d = rand(0, 99);
$fecha = date('y-m-d h:i:s');

$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);

$sentencia = $mysqli->prepare("INSERT INTO comments(id, name, comment, email, post_id, created_at, status) VALUES (?, ?, ?, ?, ?, ?, ?)");
$sentencia->bind_param("isssisi", $d, $name, $comment, $email, 1, $fecha, $status);

$sentencia->execute();
$sentencia->close();
*/
$name = $_GET['name'];
$comment = $_GET['comment'];
$email = $_GET['email'];
$id = $_GET['id'];

$mysqli = new mysqli("localhost", "root", "", "test");

$d = rand(0,99);
$fecha = date('y-m-d h:i:s');
$h = 1;

if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sentencia = $mysqli->prepare("INSERT INTO comments(id, name, comment, email, post_id, created_at, status) VALUES (?, ?, ?, ?, ?, ?, ?)");
$sentencia->bind_param("isssisi", $d, $name, $comment, $email, $id, $fecha, $h);



$sentencia->execute();
$sentencia->close();

header ("location: comentarios.php?id=". $id);
?>
