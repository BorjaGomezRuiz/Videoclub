<!DOCTYPE html>
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
</html>
