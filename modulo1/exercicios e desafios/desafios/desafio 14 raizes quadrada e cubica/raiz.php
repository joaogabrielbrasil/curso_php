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
    <?php
        $numero = $_GET["num"] ?? 1;
    ?>
    <header><h1>Exercicio - Calculo das Raizes</h1></header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <fieldset>
                <legend>Exercicio</legend>
                <label for="num">Informe um número</label>
                <p><input type="number" name="num" id="num" min="0" value="<?= $numero ?>"></p>
                <p><input type="submit" value="Calcular Raizes"></p>
            </fieldset>
        </form>
    </main>
    <h2>Resultado Final</h2>
    <p>
        <?php 
            echo "Analizando o número <strong>$numero</strong>, temo: ";
        ?>
        <ul>
            <li>
                <?php 
                    echo "A suja raiz quadrada é <strong>". number_format(sqrt($numero),3). "</strong>";
                ?>
            </li>
            <li>
                <?php
                    echo "A sua raiz cúbica é <strong>". number_format(($numero**(1/3)),3). "</strong>";
                ?>
            </li>
        </ul>
    </p>
</body>
</html>