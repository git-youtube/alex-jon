<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
       @import url("https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap");

       *{
    margin: 0;
    padding: 0;
}
body {
  background-image: url('https://p4.wallpaperbetter.com/wallpaper/938/788/837/wood-texture-wallpaper-preview.jpg');
  background-size: 100%;
}
#box {
  background: linear-gradient(
    277deg,
    #7c3ef9,
    #843cc4,
    #8d3b8f,
    #953959,
    #9e3724
  );
  width: 99.5%;
  padding-left: 10px;
  position: absolute;
  font-family: "Noto Sans", sans-serif;
  color: white;
  text-align: center;

  -webkit-animation: AnimationName 10s ease infinite;
  -moz-animation: AnimationName 10s ease infinite;
  animation: AnimationName 10s ease infinite;
}

@-webkit-keyframes AnimationName {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@-moz-keyframes AnimationName {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes AnimationName {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

form {
  padding-top: 80px;
  background-color: black;
  padding-left: 10px;
  padding-bottom: 30px;

  width: 500px;
  margin: auto;

  -webkit-animation: AnimationNameTwo 10s ease infinite;
  -moz-animation: AnimationNameTwo 10s ease infinite;
  animation: AnimationNameTwo 10s ease infinite;
}

#sub-button {
  border-radius: 35px;
  font-family: "Noto Sans", sans-serif;
  color: white;
  font-size: 15px;
  background: linear-gradient(
    277deg,
    #7c3ef9,
    #843cc4,
    #8d3b8f,
    #953959,
    #9e3724
  );
  margin-left: 43%;
}

#message {
  display: flex;
}

#container {
  background: #fff;
  width: 480px;
  height: 80px;
  box-shadow: 0px 5px 50px rgba(0,0,0,.2);
  margin: auto;
  padding: 30px;
  position: relative;
}

h3 {
  font-family: Montserrat, sans-serif;
  font-size: .9em;
  text-align: center;
  margin: 0;
}

#close {
  width: 14px;
  position: absolute;
  top: 30px;
  right: 30px;
}

.comment {
  margin-top: 30px;
  padding: 10px;
}


.comment-text {
  width: 80%;
  float: left;
}

.name {
  margin: 0;
  font-family: Maitree;
  font-size: .9em;
  color: #2C3137;
  font-weight: 600;
}

.time {
  margin: 0;
  font-family: Maitree;
  font-size: .8em;
  color: #a0a0a0;
  padding-left: 20px;
  font-weight: 400;
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Location_dot_grey.svg/500px-Location_dot_grey.svg.png");
  background-repeat: no-repeat;
  background-size: 4px;
  background-position: top 8px left 5px;
}

p {
  margin: 0;
  font-family: Maitree;
  font-size: .9em;
  color: #626A73;
}

.comment:nth-child(n+2):after {
	display: block;
	content: " ";
	clear: both;
	}

.comment:hover {
  background: #eaeaea;
}

#id {
  display: none;
}

    </style>

</head>

<body>
<?php
    $link = new PDO('mysql:host=localhost;dbname=test', 'root', ''); 
    $id=$_GET['id'];

    ?>
    <div id="box">
        <h2>Comentarios</h2>
      </div>
    
    <div class="form-div">
    <form  action="C_InsertComment.php" method="GET">
        <input type="text" id="name" name="name" placeholder="nombre" required><br> <br>
      <input type="text"  id="email" name="email" placeholder="Email" required><br> <br>
      <textarea id="message" name="comment" rows="6" cols="61" placeholder="Comentario"></textarea><br><br>
      <div class="sub-div">
        <input type="text" id="id" name="id" value="<?php echo $id ?>" readonly>
        <input type="submit" value="comentar" id="sub-button">
      </div>
    </form>
    </div>
<?php 
foreach ($link->query("SELECT * from comments WHERE post_id =".$id) as $row){ 
  ?> 

    <div id="container">
    <div class="comment">
      <div class="comment-text">
      <p>  </p>
        <p class="name"><?php echo $row['name'] ?> <span class="time"><?php echo $row['created_at'] ?> </span> </hp>
        <p id="comment"><?php echo $row['comment'] ?> </p>
      </div>
      </div>
    </div>
    <?php
	} 
?>
</body>
</html>