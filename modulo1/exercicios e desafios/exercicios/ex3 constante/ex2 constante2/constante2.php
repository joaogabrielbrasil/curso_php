<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo 2 - Constante</h1>
    <?php
        $nome = "João Gabriel";
        const IDADE = 30;
        date_default_timezone_set("America/Sao_Paulo");
        echo "Data de hoje é " . date("d/M/Y") . "<br>";
        echo "Horário de Brasília " . date("G:i:s") . "<br>";
        echo "Meu nome é $nome minha idade é " . IDADE . " anos "; 
    ?>
</body>
</html>