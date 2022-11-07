<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pagina.css">

    <style>
        * {
    padding: 0px;
    margin: 0px;
}

body {
    background-color: white;
    margin: 0%;
}

/* Noticias */
.post {
  display: grid;
  gap: 2em;
  margin: 4em;
  grid-template-columns: repeat(auto-fit, minmax(600px, 1fr));
  grid-template-rows: repeat(auto-fit, minmax(150px, 1fr));
  margin-top: 50px;
}


.posts {
  background: rgb(124, 186, 81);
  box-shadow: 0 5px 10px rgba(0,0,0,.2);
  padding: 1.5em;
  border-radius: 1em;
  display: grid;
  grid-template-columns: 150px 1fr;
  gap: 1.5em;
  align-items: center;
  color: white;
  font-weight: 100;
}

.imagenes {
  width: 100%;
  border-radius: 0.4em;
  height: 120px;
}

h2 {
  font-size: 1.4rem;
  font-weight: 700;
  margin-bottom: 0.25em;
}


    </style>

</head>
<body>
    <nav class="nav">
        <ul>
            <li><a href="pagina.php"> Inicio</a></li>
            <li><a href="#">Post</a> </li>
            <a class="boton" href="V_login.php"> Login</a>
        </ul>
    </nav>

    <div class="post">
        <div class="posts">
          <img class="imagenes" src="">
          <div class="detalles">
            <h1 class="Titulo">
            
            </h1>
            <p class="texto"> <?php $Contenido ?> </p>
          </div>
        </div>
        <div class="posts">
            <img class="imagenes" src="">
            <div class="detalles">
              <h1>Reservas </h1>
              <p class="texto"> Por temas de salud tendremos las reservas activas hasta nuevo aviso</p>
            </div>
        </div>
    </div>

</body>
</html>