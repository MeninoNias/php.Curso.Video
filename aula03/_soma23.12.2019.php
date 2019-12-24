<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="_css/estilo.css">

    <title>AULA 23/12/2019 (SOMA)</title>
</head>
<body>
    
    <div>

        <?php

            $n1 = $_GET["a"];
            $n2 = $_GET["b"];

            echo "$n1 x $n2 = ". ($n1 * $n2);
            echo "<br/>$n2 / $n1 = ". ($n2 / $n1);
            echo "<br/>$n1 + $n2 = ". ($n1 + $n2);
            echo "<br/>$n1 - $n2 = ". ($n1 - $n2);
            echo "<br/>O valor absoluto de $n1 e " . abs($n1);
            echo "<br/> $n1<sup>$n2</sup> = " . pow($n1, $n2);
            echo "<br/>A raiz de $n1 e " . sqrt($n1);
            echo "<br/>O valor de $n2 arredondado e " . round($n2); // ceil floor
            echo "<br/>A parte inteira de $n2 e " . intval($n2);
            echo "<br/>O valor de $n1 em moeda e R$" . number_format($n1,2,",", ".");


        ?>

    </div>


</body>
</html>