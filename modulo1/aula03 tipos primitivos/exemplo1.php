<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tipos primitivos Escalares</h1>
    <?php 
        $num = 200;
        $num2 = (integer) 500.999;
        $num3 = (double) 6000.4444;
        $nome = "João Gabriel";
        $media = 8.555;
        $patrimonio = 8000000.756323;
        $casado = false;
        date_default_timezone_set("America/Sao_Paulo");
        echo "A data de hoje é " . date("d/M/Y");
        echo "<br>";
        echo "O horário de Brasília é " . date("G:i:s");
        echo "<br>";
        echo $num;
        echo "<br>";
        echo "essa variavel é do tipo "; var_dump($num);
        echo "<br>";
        echo "essa variavel é do tipo: "; var_dump($nome);
        echo "<br>";
        echo "Essa variavel é do tipo: "; var_dump($media);
        echo "<br>";
        echo "Essa variavel é do tipo "; var_dump($patrimonio);
        echo "<br>";
        echo "Essa variavel é do tipo "; var_dump($num2);
        echo "<br>";
        echo "Essa variavel é do tipo "; var_dump($num3);
        echo "<br>";
        echo "Essa variavel é do tipo "; var_dump($casado);
     ?>
</body>
</html>