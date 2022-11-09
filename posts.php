<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pagina.css">

    <style>
*{
    margin: 0;
    padding: 0;
}

nav {
    position: relative;
    width: 100%;
    height: 50px;
    background-color: black;
    font-size: 0;    
}

nav a {
    line-height: 50px;
    height: 100%;
    font-size: 15px;
    display: inline-block;
    position: relative;
    z-index: 1;
    text-decoration: none;
    text-transform: uppercase;
    text-align: center;
    color: white;
    cursor: pointer;
    justify-content: center;
}

nav .animation {
    position: absolute;
    height: 100%;
    top: 0;
    z-index: 0;
    transition: all .5s ease 0s;
}

a:nth-child(1) {
    width: 100px;
}

a:nth-child(2) {
    width: 110px;
}

a:nth-child(3) {
    width: 100px;
}

a:nth-child(4) {
    width: 160px;
}

a:nth-child(5) {
    width: 120px;
}

nav .start-home,
a:nth-child(1):hover~.animation {
    width: 100px;
    left: 0;
    background-color: #1abc9c;
}

nav .start-about,
a:nth-child(2):hover~.animation {
    width: 110px;
    left: 100px;
    background-color: #e74c3c;
}

nav .start-blog,
a:nth-child(3):hover~.animation {
    width: 160px;
    left: 185px;
    background-color: #3498db;
}

nav .start-portefolio,
a:nth-child(4):hover~.animation {
    width: 100px;
    left: 340px;
    background-color: #9b59b6;
}

nav .start-contact,
a:nth-child(5):hover~.animation {
    width: 120px;
    left: 470px;
    background-color: #e67e22;
}

body {
    font-size: 12px;
    font-family: sans-serif;
    background-image: url('https://wallpapercave.com/wp/99KlGYb.jpg');
    background-size: 100%;
}




.posts {
  display: flex;
  justify-content: center;
  margin-top: 50px;
}


.post {
  background: #1abc9c;
  box-shadow: 0 5px 10px rgba(0,0,0,.2);
  padding: 1.5em;
  border-radius: 1em;
  display: grid;
  grid-template-columns: 150px 1fr;
  gap: 1em;
  align-items: center;
  color: white;
  font-weight: 100;
  width: 50%;
  box-shadow: 10px 5px 5px #28B463;

}

.imagenes {
  width: 100%;
  border-radius: 0.4em;
  height: 120px;
}

h1 {
  font-size: 2rem;
  animation: fadeIn ease 4s; 
  text-align: center;
  color: white;

}

  @keyframes fadeIn{
    0% {
      opacity:0;
    }
    100% {
      opacity:1;
    }
  }

  h2 {
    margin-top: 10px;
    text-align: center;
    font-size: 1rem;
  }
  
.texto {
  font-size: 0.9rem;
  margin-top: 15px;
}

p {
  text-align: center;

}

.botones {
  margin-top: 40px;
}
    </style>

</head>
<?php
    $link = new PDO('mysql:host=localhost;dbname=test', 'root', ''); 
    ?>
<body>
    <nav class="nav">    
            <a href="pagina.php"> Inicio</a>
            <a href="posts.php">Post</a> 
            <a href="#">Informacion</a>
            <a class="boton" href="V_login.php"> Login</a>
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