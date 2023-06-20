<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data de hoje</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "A data de hoje é " . date("d/M/Y") . "<br>";
        echo "O horario de hoje é " . date("G:i:s");
    ?>
</body>
</html>