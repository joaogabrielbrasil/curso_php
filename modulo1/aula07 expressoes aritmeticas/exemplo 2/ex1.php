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
        echo "Data: ". date("d/M/Y");
        echo "<br>";
        echo "Hora: ". date("G:i:s");
        echo "<br>";
        echo "<br>";

        $n1 = 100;
        $n2 = 10;
        echo "A soma de $n1 e $n2 é igual a ". $n1 + $n2;
        echo "<br>";
        echo "A diferença de $n1 e $n2 é igual a ". $n1 - $n2;
        echo "<br>";
        echo "A divisão de $n1 e $n2 é igual a ". $n1 / $n2;
        echo "<br>";
        echo "A multiplicação de $n1 e $n2 é igual a ". $n1 * $n2;
        echo "<br>";
        echo "A potenciação de $n1 e $n2 é igual a ". $n1 ** $n2;
        echo "<br>";
        echo "O modulo de $n1 e $n2 é igual a ". $n1 % $n2;
    ?>
</body>
</html>