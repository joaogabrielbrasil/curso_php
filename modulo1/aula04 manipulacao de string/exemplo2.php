<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Manipulação de String - Exemplo 2</h1>
    <?php 
        const ESTADO = "Distrito Federal";
        date_default_timezone_set("America/Sao_Paulo");
        print "A data de hoje é " . date("d/M/Y");
        print "<br>";
        print "A hora atual é " . date("G:i:s");
        print "<br>";
        print "Eu moro no " . ESTADO;
        print date(" Y");
    ?>
</body>
</html>