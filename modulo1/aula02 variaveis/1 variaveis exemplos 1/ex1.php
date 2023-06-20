<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        legend {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Variaveis</h1>
    <?php 
    date_default_timezone_set("America/Sao_Paulo");
    echo date("d/M/Y") . "<br>";
    echo "Horario de Brasília: " . date("G:i:s") , "<br><br>";
    ?>

    <?php
        $nome = "João Gabriel";
        $idade = 30;
        const ESTADO = "Brasilia DF";
        const PAIS = "Brasil";
        echo "Seja bem vindo $nome com idade de $idade anos, e do estado de " . ESTADO . "<br>";
        echo PAIS;
    ?>

    <form method="$_POST" action="mailto:jgjoaogabriel9@gmail.com">
        <fieldset>
            <legend><strong>Pegando dados do formulario com php</strong></legend>
            <p><label for="nome">nome</label> <input type="text" name="nome" id="nome" maxlength="40" size="40" placeholder="Seu nome"></p>

            <p><label for="idade">idade</label> <input type="number" name="idade" id="idade" min="0" max="100" value="0"></p>
        </fieldset>
    </form>
</body>
</html>