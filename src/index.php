<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videoclub</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
        }

        h1 {
            color: #333;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .button {
            margin: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Videoclub</h1>

    <button class="button" onclick="cambiarPagina('./Actividades/Inicio.php')" >Actividades 321 - 322 - 323 - 324 - 325 -326 </button>
    <button class="button" onclick="cambiarPagina('./Actividades/Inicio2.php')" >Actividad 327 </button>

    <script>
        function cambiarPagina(ruta) {
            window.location.href = ruta;
        }
    </script>
    
</body>
=======
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hola IES MRE</title>
        <style>
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 80%;
            }
        </style>
    </head>
    <body>
        <img src="hello.gif" alt="Hola" class="center" style="width:20%;height:20%;">

        <h1><?php echo "Hola Mundo des del IES MRE"; ?></h1>
        <p>
        <?php
            echo "Hoy estamos a " . date("d/m/Y");
        ?>
        </p>
    </body>
>>>>>>> e7eba53 (prueba)
</html>
