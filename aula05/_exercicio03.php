<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="_css/estilo.css">

    <title>Aula 24/12/2019 (Eleição)</title>
</head>
<body>
    <div>
        <?php
            $nome = $_GET["nome"];
            $ano = $_GET["ano"];
            $idade = 2019 - $ano;

            echo "Ano: 2019<br/>Nome: $nome<br/>Idade: $idade<br/>";

            echo "<br/>SITUAÇÃO DO VOTO: ". (($idade>18 and $idade<64)?"OBRIGATORIO":"NÃO OBRIGATORIO");



        ?>
    </div>
</body>
</html>