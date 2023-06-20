<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Data ". date("Y/m/d"). "<br>";
        echo "Hora ". date("G:i:s"). "<br><br>";
    ?>
    <header>
        <h1>Formulario Retroalimentado</h1>
    </header>
    <?php 
        $num1 = $_GET['n1'] ?? 0;
        $num2 = $_GET['n2'] ?? 0;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <fieldset>
                <legend>Exercicio</legend>
                <fieldset>
                    <legend>Soma de dois número</legend>
                    <label for="num1">Digite o primeiro número</label>
                    <p><input type="number" name="n1" id="n1"  value="<?= $num1?>"></p>
                    <label for="num2">Digite o segundo número</label>
                    <p><input type="number" name="n2" id="n2"  value="<?= $num2?>"></p>
                    <p><input type="submit" value="Clique aqui"></p>
                </fieldset>
            </fieldset>
        </form>
    </main>
    <br>
    <?php
        echo "A soma de $num1 e $num2 é igual a ". $soma = $num1+$num2;     
    ?>
</body>
</html>