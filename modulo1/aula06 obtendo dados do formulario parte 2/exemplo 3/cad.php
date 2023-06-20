<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        date_default_timezone_set("America/Sao_Paulo");
        print "Data " . date("d/M/Y");
        print "<br>";
        print "Hora: " . date("G:i:s");
        print "<br>";
        echo "Nome: $nome ; Sobrenome: $sobrenome";
        print "<br>";
        print var_dump($nome);
        print "<br>";
        print var_dump($sobrenome);
    ?>
</body>
</html>