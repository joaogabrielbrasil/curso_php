<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Constante Primeiro Exemplo</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "A data de hoje é <mark>" . date("d/M/Y") . "</mark><br>";
        echo "O horário de Brasília é <mark>" . date("G:i:s") . "</mark><br>";
        $nomeCompleto = "Joao Gabriel de Angola";
        const IDADE = 30;
        echo "Meu nome é " . $nomeCompleto . " e minha idade é " . IDADE . " anos ";
    ?>
</body>
</html>