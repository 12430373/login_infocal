</html>
<?php
include "Menu.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/style.css">
    <title>Usuarios</title>
</head>

<body>
    <table class="box">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apeliido</th>
            <th>celular</th>
            <th>Direccion</th>
            <th>Fecha de Nacimiento</th>
        </tr>
        <?php
        require "conexion/conexionBase.php";
        $con = new conexionBase();
        // Consulta a la base de datos las personas que existen
        $con->CreateConnection();
        $sql = "SELECT idpersona,nombre,papellido,sapellido,celular,direccion,fechanac FROM persona";
        $resultado = $con->ExecuteQuery($sql);
        // Mostrar los datos en la tabla personas
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fila['idpersona'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $fila['papellido'] . "</td>";
                echo "<td>" . $fila['sapellido'] . "</td>";
                echo "<td>" . $fila['celular'] . "</td>";
                echo "<td>" . $fila['direccion'] . "</td>";
                echo "<td>" . $fila['fechanac'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay datos</td></tr>";
        }
        ?>
        <table class="box">
            <tr>
                <th>IdUsuario</th>
                <th>Nickname</th>
                <th>Password</th>
                <th>Idrol</th>
                <th>Idpersona</th>
            </tr>
            <?php
            $con = new conexionBase();
            // Consulta a la base de datos las personas que existen
            $con->CreateConnection();
            $sql = "SELECT idusuario,nick,pass,rol_idrol,persona_idpersona FROM usuario";
            $resultado = $con->ExecuteQuery($sql);
            // Mostrar los datos en la tabla personas
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['idusuario'] . "</td>";
                    echo "<td>" . $fila['nick'] . "</td>";
                    echo "<td>" . $fila['pass'] . "</td>";
                    echo "<td>" . $fila['rol_idrol'] . "</td>";
                    echo "<td>" . $fila['persona_idpersona'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No hay datos</td></tr>";
            }
            ?>
        </table>
        <div class="container mt-2 col-5">
                <form action="/controlador/controladorusuarios.php" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h2>Usuario</h2>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nick" class="form-label">nombre de usuario</label>
                                <input type="text" name="nick" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="pass1" class="form-label">Contraseña</label>
                                <input type="text" name="pass1" class="form-control"">
                </div>
                <div class=" mb-3">
                                <label for="idrol" class="form-label">Idrol</label>
                                <input type="text" name="idrol" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="idpersona" class="form-label">Idpersona</label>
                                <input type="text" name="idpersona" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Registrarse</button>
                            <a class="btn btn-secondary" href="/index.php">volver</a>
                        </div>
                    </div>
                </form>
            </div>
</body>

</html>