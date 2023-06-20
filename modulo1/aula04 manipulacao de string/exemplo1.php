<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Manipulaçaõ de String - Primeiro Exemplo</h1>
    <?php 
        $nome = 'João Gabriel';
        $sobrenome = 'Oliveira';

        date_default_timezone_set("America/Sao_Paulo");
        print "A data de hoje é " . date("d/M/Y");
        print "<br>";
        print "O horário atual é " . date("G:i:s");
        print "<br>";
        print "<br>";
        print var_dump($nome);
        print "<br>";
        print var_dump($sobrenome);
        print "<br>";
        print "$nome " . "$sobrenome";
        print "<br>";
    ?>
</body>
</html>