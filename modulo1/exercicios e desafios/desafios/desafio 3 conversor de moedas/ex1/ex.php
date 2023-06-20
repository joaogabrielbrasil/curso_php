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
        echo "Hora ". date("G:i:s") . "<br><br><br>";

        $meuDinheiro = $_REQUEST["dinheiro"];
        $cotacao_dolar = $_REQUEST["cotacao_dolar"];
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $dolar = $meuDinheiro / $cotacao_dolar;

        echo "A cotação do dolar atual no Brasil é R$". $cotacao_dolar . "<br>";
        //echo "Dinheiro que tenho na carteia R$". number_format($meuDinheiro,2, ",",".") . "<br>";
        //echo "Meu dinheiro convertido para dolar US$". number_format($dolar,2, ",", ".");
        echo "Dinheiro que tenho na carteira". numfmt_format_currency($padrao, $meuDinheiro, "BRL") . "<br>";
        echo "Meu dinheiro convertido para dolar ". numfmt_format_currency($padrao, $dolar, "USD"). "<br>";
    ?>  
    <br><br>
    <button onclick="javascript:history.go(-1)">Voltar</button> 
</body>
</html>