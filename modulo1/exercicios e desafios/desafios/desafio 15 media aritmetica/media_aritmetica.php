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
        echo "Data". date("Y/m/d"). "<br>";
        echo "Hora ". date("G:i:s"). "<br><br>";
    ?>
    <header><h1>Exercicio - Médias Aritmetica e Ponderada</h1></header>
    <?php
        $num1 = $_GET["num1"] ?? 0;
        $num2 = $_GET["num2"] ?? 1;
        $num3 = $_GET["num3"] ?? 0;
        $num4 = $_GET["num4"] ?? 1;
        $mediaSimples = ($num1+$num3)/2;
        $mediaPonderada = (($num1*$num2)+($num3*$num4))/($num2+$num4);
    ?>
    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <fieldset>
                    <legend>Exercicio</legend>
                    <label for="num1">1ª Valor</label>
                    <p><input type="number" name="num1" id="num1" value="<?= $num1 ?>"></p>
                    <label for="num2">1ª Peso</label>
                    <p><input type="number" name="num2" id="num2" value="<?= $num2 ?>"></p>
                    <label for="num3">2ª Valor</label>
                    <p><input type="number" name="num3" id="num3" value="<?= $num3 ?>"></p>
                    <label for="num4">2ª Peso</label>
                    <p><input type="number" name="num4" id="num4" value="<?= $num4 ?>"></p>
                    <p><input type="submit" value="Calcular Médias"></p>
                </fieldset>
            </form>
        </section>
    </main>
    <h2>Calculo das Médias</h2>
    <?php
        echo "Analizando os valores $num1 e $num3"; 
    ?>
    <ul>
        <li><?php 
            echo "A <strong>média aritmética simples</strong> entres os valores é igual a ". number_format($mediaSimples,2);
        ?></li>
        <li><?php 
            echo "A <strong>média aritmética ponderada</strong> com pesos $num2 e $num4 é igual a ". number_format($mediaPonderada,2);
        ?></li>
    </ul>
</body>
</html>