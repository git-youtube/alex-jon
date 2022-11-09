<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      <?php include 'comentarios.css'; ?>
    </style>

</head>
<body>
<?php
    $link = new PDO('mysql:host=localhost;dbname=blog', 'root', ''); 
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