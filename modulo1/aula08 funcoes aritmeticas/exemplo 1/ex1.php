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
        print "Data: ". date("d/M/Y");
        print "<br>";
        print "Hora: ". date("G:i:s");
        print "<br>";
        print "<br>";
        print "<br>";

        $valorABS = abs(-100);
        $raizQuadrada = sqrt(121);
        $potencia = pow(100,2);
        $valorAcima = ceil(58.8);
        $valorAbaixo = floor(49.8);
        $valorAleatorio = rand(0,100);
        $valorAritmetico = round(65.4);
        $divisaoInteira = intdiv(100,5);
        $numeroMaximo = max(2,0,7,8,9,45,1000,1001);
        $numeroMinimo = min(2,3,5,500,10,8,8000,1.3);
        $numeroPI = pi();
        $numeroPI2 = M_PI;
        $numeroFormatado = number_format($numeroPI,2);

        print "$valorABS  <br>";
        print "$raizQuadrada <br>";
        print "$potencia <br>";
        print "$valorAcima <br>";
        print "$valorAbaixo <br>";
        print "$valorAleatorio <br>";
        print "$valorAritmetico <br>";
        print "$divisaoInteira <br>";
        print "$numeroMaximo <br>";
        print "$numeroMinimo <br>";
        print "$numeroPI <br>";
        print "$numeroPI2 <br>";
        print "$numeroFormatado <br>";
    ?> 
</body>
</html>