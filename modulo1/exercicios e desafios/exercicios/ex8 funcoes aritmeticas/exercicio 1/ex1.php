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

        $n1 = 10;
        $n2 = 3;
        $n3 = -20;
        $n4 = 121;

        echo intdiv($n1,$n2) . "<br>";
        echo " $n1 ".  " / " . " $n2 " . " = " . number_format($divisao = $n1/$n2,3) . "<br>";
        echo sqrt($n4) . "<br>";
        echo max(2,3,33,400,6,0,6000000,21,1000000000) . "<br>";
        echo min(1,1.2,22,4,67,55,0.2) . "<br>";
        echo abs($n3) . "<br>";
        echo ceil(48.77) . "<br>";
        echo floor(35.66) . "<br>";
        echo round(56.33) . "<br>";
        echo pow(10,2) . "<br>";
        echo rand(-10,30) . "<br>";
        echo number_format(pi(),3) . "<br>";
        echo number_format(M_PI,3) . "<br>";
    ?>
</body>
</html>