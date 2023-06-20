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
        echo "Hora ". date("G:i:s") . "<br><br>";
        
        $n1 = 100;
        $n2 = 121;
        $n3 = 49;
        $n4 = 10;
        $n5 = 5;
        $n6 = 1;
        $n6 += 59;

        echo $n1 . " + ". $n2 . " + " . $n3 . " = ". $soma = $n1+$n2+$n3 . "<br>";
        echo $n1 . " x ". $n2 . " x " . $n3 . " = ". $multiplicacao = $n1*$n2*$n3 . "<br>";
        echo $n1 . " / ". $n2 . " / " . $n3 . " = ". number_format($divisao = $n1/$n2/$n3,3) . "<br>";
        echo $n1 . " - ". $n2 . " - " . $n3 . " = ". $diferenca = $n1-$n2-$n3 . "<br>";
        echo $n4 . " % " . $n5 . " = " . $modulo = $n4 % $n5 . "<br>";
        echo $n4 . " / " . $n5 . " = " . $divisao2 = $n4 / $n5 . "<br>";
        echo $n4 . " / " . $n5 . " = " . $potencia = $n4**$n5 . "<br>";
        echo "A raiz quadrada de $n3 é " . $raizQuadrada = $n3**(1/2) . "<br>";
        echo $n6 . "<br>";
    ?>
</html>