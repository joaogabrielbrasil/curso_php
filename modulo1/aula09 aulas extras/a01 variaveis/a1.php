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
        echo "Hora ". date("G:i:s"). "<br><br>";

        $nome = "João Gabriel";
        $sobrenome = "Oliveira";
        $idade = (double) 30;
        $casado = false;
        echo "Meu nome é $nome e meu sobrenome é $sobrenome e minha idade é $idade". "<br>";
        echo var_dump($nome). "<br>";
        echo var_dump($idade). "<br>";
        echo $casado. "<br>";
    ?>
</body>
</html>