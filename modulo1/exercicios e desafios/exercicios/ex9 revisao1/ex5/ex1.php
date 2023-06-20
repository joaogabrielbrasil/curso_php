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
        echo "Data ". date("Y/m/d"). "<br>";
        echo "Data ". date("G:i:s"). "<br><br>";

        $valorMenor = min(2,3,4,-1,4,67,89);
        $valorMaior =  max(10,100,34,67,1000);
        $raizQuadrada = sqrt(121);
        $valorAbsoluto = abs(-45);
        $arredondamentoAcima = ceil(56.11111);
        $arredondamentoAbaixo = floor(53.88888);
        $arredondamento = round(56.1111111);
        $numAleatorio = rand(0,100);
        $numAleatorio2 = mt_rand(100,1000);
        $numAleatorio3 = random_int(0,50);
        $moedaFormatada = number_format(1000000000,2,",",".");
        $potencia = pow(25,2);
        $divisaoInteira = intdiv(37,2);

        echo $valorMenor . "<br>";
        echo $valorMaior. "<br>";
        echo $raizQuadrada. "<br>";
        echo $valorAbsoluto. "<br>";
        echo $arredondamentoAcima. "<br>";
        echo $arredondamentoAbaixo. "<br>";
        echo $arredondamento. "<br>";
        echo $numAleatorio. "<br>";
        echo $numAleatorio2. "<br>";
        echo $numAleatorio3. "<br>";
        echo $moedaFormatada. "<br>";
        echo $potencia. "<br>";
        echo $divisaoInteira;
    ?>
</body>
</html>