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
        echo "Data ". date("d/M/Y") . "<br>";
        echo "Hora ". date("G:i:s"). "<br>";

        $real = $_REQUEST["real"];
        $cotacao_dolar = $_REQUEST["cotacao_dolar"];
        $dolar = $real / $cotacao_dolar;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        //echo "Na minha carteira tem ". number_format($real,2, ",", "."). " reais". "<br>";
        //echo "Agora que meu dinheiro foi convertido par dolar, agora terei ". number_format($dolar,2, ",", "."). " dolares";
        
        echo "Na minha carteira tem ". numfmt_format_currency($padrao, $real, "BRL") . "<br>";
        echo "Agora que meu dinheiro foi convertido para dolar, agora terei ". numfmt_format_currency($padrao, $dolar, "USD") ;
    ?>
    <br><br>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    <br>
    <a href="index.html" rel="previous" rel="noopener noreferrer">Anterior</a>
</body>
</html>