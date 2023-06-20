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
        $nome = $_GET["nome"] ?: "Não foi digitado";
        $sobrenome = $_GET["sobrenome"] ?: "Não foi digitado";

        date_default_timezone_set("America/Sao_Paulo");
        echo "Data: ". date("d/M/Y");
        echo "<br>";
        echo "Hora: ". date("G:i:s");
        echo "<br>";
        echo "<br>";

        echo "Nome: $nome";
        echo "<br>";
        echo "Sobrenome: $sobrenome";
    ?>
</body>
</html>