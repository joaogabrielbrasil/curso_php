<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <?php 
            date_default_timezone_set("America/Sao_Paulo");
            echo "Data ". date("d/M/Y") . "<br>";
            echo "Hora ". date("G:i:s") . "<br><br>";
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $moeda = $_REQUEST["moeda"];
            echo numfmt_format_currency($padrao, $moeda, "BRL");
            //echo "Valor que você digitou: R$ ". number_format($moeda,2, ",", ".");
        ?>
    </section>
</body>
</html>