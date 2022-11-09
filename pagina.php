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
        *{
    margin: 0;
    padding: 0;
}
nav {
    position: relative;
    width: 100%;
    height: 50px;
    background-color: black;
    border-radius: 8px;
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
    border-radius: 8px;
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
    background: white;
}
    
    </style>
</head>
<body>
    <nav class="nav">    
            <a href="#"> Inicio</a>
            <a href="posts.php">Post</a> 
            <a href="#">Informacion</a>
            <a class="boton" href="V_login.php"> Login</a>
            <div class="animation start-home"></div>
    </nav>
 
    <div >
        
    </div>


</body>
</html>