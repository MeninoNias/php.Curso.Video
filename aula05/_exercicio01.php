<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="_css/estilo.css">
    
    <title>Aula 24/12/2019</title>
</head>
<body>
<div>
    <?php

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];

        $tipo = $_GET["op"];

        echo "Valores passado: $n1, $n2, $tipo";

        $r = $tipo == 1 ? $n1+$n2:$n1-$n2;

        echo "<br/>Resultado é $r"


        //lembre que igual é diferente de identico, no caso == =! identico


    ?>
</div>
</body>
</html>