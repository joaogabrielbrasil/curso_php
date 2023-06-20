<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tipos Primitivos</h1>
    <?php 
        $sobrenome = (integer) "Oliveira";
        $idade = (string) 30;
        $patrimonio = (double) 5000000.657845;
        $casado = (float) true;
        
        date_default_timezone_set("America/Sao_Paulo");
        echo "A data de hoje é " . date("d/M/Y");
        echo "<br>";
        echo "O horário de hoje é " . date("G:i:s");
        echo "<br>";
        echo "Essa variavel é do tipo "; var_dump($sobrenome);
        echo "<br>";
        echo "Essa variavel é do tipo "; var_dump($idade);
        echo "<br>";
        echo "Essa variavel é do tipo "; var_dump($patrimonio);
        echo "<br>";
        echo "Essa variavel é do tipo "; var_dump($casado);
    ?>
</body>
</html>