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
        print "Data ". date("Y/m/d"). "<br>";
        print "Hora ". date("G:i:s"). "<br><br>";
    ?>
    <header>
        <h1>Exercicio</h1>
    </header>
    <?php 
        $dinheiroReal = $_GET["real"] ?? 0;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <fieldset>
                <legend>Exercicio - Moeda Formatada</legend>
                <label for="real">Digite quanto você tem na sua carteira</label>
                <p><input type="number" name="real" id="real" value="<?= $dinheiroReal ?>"></p>
                <p><input type="submit" value="Clique aqui"></p>
            </fieldset>
        </form>
    </main>

    <p>
        <?php
            //$dinheiroReal = $_GET["real"] ?? 0;
            //$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            //echo number_format($dinheiroReal,2,",",".");
            echo numfmt_format_currency($padrao,$dinheiroReal,"BRL");
        ?>
    </p>
</body>
</html>