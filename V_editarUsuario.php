<?php 
$user = $_GET['username'];
$pass = $_GET['password'];
$email = $_GET['email'];
$rol = $_GET['rol'];
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form action="editarUsuarios.php" method="GET">
        <input type="text" value="<?php echo $user;?>" placeholder="username" name="username">
        <input type="text" value="<?php echo $pass;?>" placeholder="password" name="password">
        <input type="text" value="<?php echo $email;?>" placeholder="email" name="email">
        <input type="number" value="<?php echo $rol;?>" placeholder="rol" name="rol">
        <input type="number" value="<?php echo $id;?>" placeholder="id" name="id">
        <input type="submit" value="editar">
    </form>
    </div>
</body>
</html>