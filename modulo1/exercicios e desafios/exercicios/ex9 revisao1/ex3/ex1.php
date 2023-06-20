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
        echo "Data ". date("G:i:s"). "<br><br>";
    ?>

    <main>
        <section>
            <form action="ex1.php" method="post">
                <fieldset>
                    <legend>Exercicio</legend>
                    <label for="n1">Digite o primeiro número</label>
                    <p><input type="text" name="n1" id="n1"></p>

                    <label for="n2">Digite o segundo número</label>
                    <p><input type="text" name="n2" id="n2"></p>
                </fieldset>
                <input type="submit" value="Calcular">
            </form>
        </section>
        <?php 
            $num1 = $_REQUEST["n1"] ?: "Não foi digitado nenhum valor";
            $num2 = $_REQUEST["n2"] ?: "Não foi digitado nenhum valor";
            $soma = $num1 + $num2;
            echo "A soma de $num1 e $num2 é igual a ". $soma;
        ?>
    </main>
</body>
</html>