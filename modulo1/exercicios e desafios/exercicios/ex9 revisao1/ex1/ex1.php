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
        $maiorNumero = max(2,2000,4,5,7,800000,100000000000000);
        $menorNumero = min(1,2,6,4,80,400,4,2,655,44444,0.1);
        $raizQuadrada = sqrt(121);
        $arredondamentoAcima = ceil(59.7777777);
        $arredondamentoAbaixo = floor(53.9999999);
        $numAleatorio1 = rand(0,100);
        $numAleatorio2 = mt_rand(0,100);
        $numAleatorio3 = random_int(0,100);
        $numeroPI1 = pi();
        const PI = M_PI;
        $numeroABS = abs(-193);
        $divisaoInteira = intdiv(304,5);
        $numeroArredondado = round(56.777777777);
        $potencia = pow(10,2);
        echo "[2,2000,4,5,7,800000,100000000000000]" . "<br>";
        echo "O maior números é ". $maiorNumero . "<br>";
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>";
        echo "[1,2,6,4,80,400,4,2,655,44444,0.1]". "<br>";
        echo "O menor número é ". $menorNumero. "<br>" ;
        echo "-=-=-=-=-=.-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>";
        echo "A raiz quadrada de 121 é ". $raizQuadrada. "<br>";
        echo "-=-=-=-=-=.-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>";
        echo "Arredondando para cima o número 59.7777777 é igual a ". $arredondamentoAcima. "<br>";
        echo "-=-=-=-=-=.-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>";
        echo "Arredondando para baixo o número 53.4444 é igual a ". $arredondamentoAbaixo ."<br>";
        echo "-=-=-=-=-=.-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>";
        echo "O número aleatorio de 0 a 100 ". $numAleatorio1 . "<br>";
        echo "-=-=-=-=-=.-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>";
        echo "O número aleatorio de 0 a 100 ". $numAleatorio2 . "<br>";
        echo "-=-=-=-=-=.-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>";
        echo "O número aleatorio de 0 a 100 ". $numAleatorio3 . "<br>";
        echo "-=-=-=-=-=.-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>";
        echo "O número PI é ". $numeroPI1. "<br>";
        echo "-=-=-=-=-=.-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>";
        echo "O número PI é ". PI. "<br>";
        echo "-=-=-=-=-=.-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>";
        echo "O número absoluto de -193 é igual a ". $numeroABS. "<br>";
        echo "-=-=-=-=-=.-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>";
        echo "O divisão inteira de 304 por 5 é igual a ". $divisaoInteira. "<br>";
        echo "-=-=-=-=-=.-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>";
        echo "O número 56.777777777 arredondado é igual a ". $numeroArredondado. "<br>";
        echo "-=-=-=-=-=.-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>";
        echo "A potência de 10 por 2 é igual a ". $potencia . "<br>";
        echo "-=-=-=-=-=.-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-";
    ?>
</body>
</html>