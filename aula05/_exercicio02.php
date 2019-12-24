<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="_css/estilo.css">
    
    <title>Aula 24/12/2019 (Media)</title>
</head>
<body>
    <div>
        <?php 
        
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        
        $media = ($nota1 + $nota2)/2;

        echo "1º nota: $nota1<br/>2º nota: $nota2<br/> MEDIA: $media<br/>SITUAÇÃO: ". ($media>=7?"APROVADO":"REPROVADO");
        
        ?>
    </div>
</body>
</html>