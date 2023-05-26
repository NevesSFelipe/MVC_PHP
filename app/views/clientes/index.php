<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>

        body {
            background-color: #68d8a2 ;
        }

        h1, p {
            text-align: center;
        }

    </style>

    <h1>Clientes</h1>

    <?php

        foreach($clientes as $cliente) {
            
            echo "<p> {$cliente['nome']} </p>";

        }

    ?>
    
</body>
</html>