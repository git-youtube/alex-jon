<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="C_insertPosts.php" method="GET">
        <input type="text" name="title" placeholder="title" required>
       <input type="text" name="brief" placeholder="brief" required>
       <textarea name="content" placeholder="content"></textarea>
       <input type="text" name="image" placeholder="image" required>
       <input type="number" name="status" placeholder="status">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>