<?php
if (isset($_GET['Nombre']) && isset($_GET['Titulo']) && isset($_GET['Contenido'])) {
    $Nombre= $_GET['Nombre'];
    $Titulo = $_GET['Titulo'];
    $Contenido = $_GET['Contenido'];
    
    $mysqli = new mysqli("localhost", "root", "", "test");
    
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    /* Sentencia preparada, etapa 1: preparación */
    if (!($sentencia = $mysqli->prepare("INSERT INTO posts(Nombre, Titulo, Contenido) VALUES (?, ?, ?)"))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
    }
   
    /* Sentencia preparada, etapa 2: vinculación y ejecución */
    if (!$sentencia->bind_param("sss", $Nombre, $Titulo, $Contenido)) {
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    /* se recomienda el cierre explícito */
    $sentencia->close();
    header ("location: posts.php");
}else{
    echo("<br>Error en parametros<br>");
    
}
?>
