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
        echo "DATA: " . date("d/M/Y");
        echo "<br>";
        echo "HORA: " .date("G:i:s");
        echo "<br>";

        $nome = (float) "João Gabriel";
        $sobrenome = (integer) "Oliveira";
        $idade = (string) 30;
        const PESO = 89.99;

        echo "Meu nome é $nome $sobrenome " . " e minha idade é $idade anos" . " e meu peso é " . PESO;
        echo "<br>";
        echo "<br>";
        echo var_dump($nome);
        echo "<br>";
        echo var_dump($sobrenome);
        echo "<br>";
        echo var_dump($idade);
        echo "<br>";
        echo var_dump(PESO);
    ?>
</body>
</html>