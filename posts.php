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
    <title>Document</title>
    <link rel="stylesheet" href="pagina.css">

<style>
<?php include 'posts.css'; ?>
</style>
 

</head>
<?php
    $link = new PDO('mysql:host=localhost;dbname=blog', 'root', ''); 
    ?>
<body>
    <nav class="nav">    
            <a href="pagina.php"> Inicio</a>
            <a href="posts.php">Post</a> 
            <a href="#">Informacion</a>
            <?php 
            if($compara=="1"){
                echo '<a href="V_gestionPost.php"> Editar Posts</a>';
            }elseif($compara=="2"){
                echo '<a href="V_gestionPost.php"> Editar</a>';
                echo '<a href="gestionUsuarios.php">Gestionar</a>';
            }
            
    if($compara!=null){
    echo '<a class="boton" href="logout.php"> Logout</a>';
    }else{
        echo '<a class="boton" href="V_login.php"> Login</a>';
    };
        ?>
            <div class="animation start-home"></div>
    </nav>


<?php 
$postId = $_GET['id'];
foreach ($link->query('SELECT * from posts') as $row){ 
  ?> 

<div class="posts">
        <div class="post">
          <img class="imagenes" src="<?php echo $row['image'] ?>">
          <div class="detalles">
            <h1><?php echo $row['title'] ?></h1>
            <h2><?php echo $row['brief'] ?></h2>
            <p class="texto"><?php echo $row['content'] ?></p>
            <a href="comentarios.php?id=<?php echo $row['id']?>" >Comentarios</a>
          </div>
          <p><?php echo $row['created_at']?></p> 
       </div>
</div>

<?php
	} 
?>


  </tbody>
</table>
</div>

</body>
</html>