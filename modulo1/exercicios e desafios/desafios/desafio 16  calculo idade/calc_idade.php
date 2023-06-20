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
        $anoNasc = $_GET["num1"] ?? 2000;
        $ano = $_GET["num2"] ?? 2023;
        $calculoIdade = $ano - $anoNasc;
    ?>
    <header><h1>Exercicio - Calculo da Idade</h1></header>
    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <fieldset>
                    <legend>Exercicio</legend>
                    <label for="num1">Em que ano você nasceu ?</label>
                    <p><input type="number" name="num1" id="num1" min="1900" max="<?=$ano?>" value="<?= $anoNasc ?>"></p>
                    <label for="num2">Quer saber sua idade em que ano? (Atualmente estamos em <strong>2023</strong>)</label>
                    <p><input type="number" name="num2" id="num2" value="<?= $ano ?>"></p>
                    <p><input type="submit" value="Qual será minha idade? "></p>
                </fieldset>
            </form>
            <p><h2>Resuldado Final</h2></p>
        </section>
    </main>
    <?php 
        echo "Quem nasceu em $anoNasc vai ter <strong>$calculoIdade anos</strong> em $ano.";
    ?>
</body>
</html>