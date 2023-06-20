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
        date_default_timezone_set("America/Sao_Paulo");
        echo "Data: " . date("d/M/Y");
        echo "<br>";
        echo "Hora: " . date("G:i:s");
        echo "<br>";

        $nome = $_POST["nome"] ?: "Não foi digitado";
        $anoAtual = $_POST["anoAtual"];
        $anoNasc = $_POST["anoNasc"];
        $idade = $anoAtual - $anoNasc;
        echo $idade;
        echo "<br>";
        echo var_dump($idade);
    ?>
</body>
</html>