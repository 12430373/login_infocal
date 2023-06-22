<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/style.css">
    <title>Personas</title>
    <style>
        input[type='email'],
        input[type='password'],
        input[type='text'],
        input[type='number'],
        input[type='date'] {
            outline: none;
            padding: 20px;
            display: block;
            width: 300px;
            border-radius: 5px;
            border: 2px solid #242b68;
            margin: 20px auto;
            background-color: rgb(81, 82, 92);
            color: white;
        }

        input[type='submit'] {
            padding: 10px;
            color: #ffffff;
            background-color: #1d1b31;
            width: 300px;
            margin: 20px auto;
            margin-top: 0;
            border: 0;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type='submit']:hover {
            background-color: #1f1d2e80;
            color: #aaa9b3d3;
        }

        a {
            text-decoration: none;
            color: #ffffff;
        }

        a:hover {
            color: #564e99;
        }
    </style>
</head>

<body>
    <h1>Registro</h1>
    <span>o <a href="index.php">Iniciar Sesion</a></span>
    <span>o <a href="Usuarios.php">Usuarios</a></span>
    <form action="controlador/ControladorPersonas.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="papellido" placeholder="Primer Apellido">
        <input type="text" name="sapellido" placeholder="Segundo Apellido">
        <input type="text" name="celular" placeholder="Numero de Celular">
        <input type="text" name="direccion" placeholder="Direccion">
        <input type="date" name="fechanac" placeholder="Fecha de Nacimiento">
        <input type="submit" name="bottomregistro" value="Enviar">
    </form>
</body>

</html>