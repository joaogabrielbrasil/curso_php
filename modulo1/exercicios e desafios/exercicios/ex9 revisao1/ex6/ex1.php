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
    ?>

    <main>
        <section>
            <form action="ex1.php" method="post">
                <fieldset>
                    <legend>Exercicio</legend>
                    <label for="moeda">Digite quanto você tem na sua carteira</label>
                    <p><input type="text" name="moeda" id="moeda"></p>
                </fieldset>
                <p><input type="submit" value="Clique aqui"></p>
            </form>
        </section>
    </main>

    <?php 
        $moeda = $_REQUEST["moeda"];
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo numfmt_format_currency($padrao,$moeda,"BRL");
    ?>
</body>
</html>