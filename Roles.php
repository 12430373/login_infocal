<?php
include "Menu.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/style.css">
    <title>Roles</title>
</head>

<body>
    <table class="box">
        <h1>Roles</h1>
        <form action="controlador/controladorroles.php" method="post">
            <input type="text" name="rol" placeholder="Asigne un rol">
            <input type="submit" name="loginbuttom" value="Enviar">
        </form>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
        </tr>
        <?php
        require "conexion/conexionBase.php";
        $con = new conexionBase();
        // Consulta a la base de datos las personas que existen
        $con->CreateConnection();
        $sql = "SELECT idrol,nombre FROM rol";
        $resultado = $con->ExecuteQuery($sql);
        // Mostrar los datos en la tabla personas
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fila['idrol'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay datos</td></tr>";
        }
        ?>
    </table>

</body>

</html>