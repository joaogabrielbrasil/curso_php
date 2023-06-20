<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data e Horario de Brasília</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        $nome = "João Gabriel";
        $idade = 30;
        print "Meu nome é $nome e minha idade é $idade anos" . "<br>";
        echo "A data de hoje é " . date("d/M/Y") . "<br>";
        echo "O horário atual é " . date("G:i:s");
    ?>
</body>
</html>