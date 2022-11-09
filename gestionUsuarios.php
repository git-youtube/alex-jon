<html>
    <body>
        <h1>Datos Usuarios</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                 <th>EMAIL</th>
                <th>CREATE</th>
                <th>LAST</th>
                <th>ACTIVE</th>
                  <th>NAME</th>
                    <th>LAST_NAME</th>
                      <th>ROL</th>
                         <th>ADMINISTRACION</th>
            </tr>



<?php
//Conexion a la BBDD
$mysqli = new mysqli("localhost", "root", "", "blog");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Sentencia para introducir a un usuario nuevo en la BBDD
$listado=$mysqli->query("SELECT * FROM  users");

while ($row = $listado->fetch_assoc()) {
    $concat.='<tr>';
    $concat.= '<td>'.$row["id"].'</td>';
    $concat.= '<td>' . $row["username"] . '</td>';
    $concat.= '<td>' .$row["password"].'</td>';
    $concat.= '<td>' .$row["email"].'</td>';
    $concat.= '<td>' .$row["created_on"].'</td>';
    $concat.= '<td>' .$row["last_login"].'</td>';
    $concat.= '<td>'.$row["active"].'</td>';
    $concat.= '<td>'.$row["first_name"].'</td>';
    $concat.= '<td>'.$row["last_name"].'</td>';
    $concat.= '<td>'.$row["rol"].'</td>';
    $concat.='<td> <a href="C_eliminarUsuario.php?id=' . $row['id'] .'"><button>'."BORRAR".'</button></a><a href="V_editarUsuario.php?username='. $row['username'] .'&password='. $row['password'].'&email='. $row['email'].'&rol='. $row['rol'].'&id='. $row['id'].'"><button>'."EDITAR".'</button></a></td>';
    $concat.= '</tr>';
}

echo $concat

?>

 </table>
    </body>
</html>