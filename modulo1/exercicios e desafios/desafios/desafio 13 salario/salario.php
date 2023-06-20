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
        echo "Data ". date("Y/m/d") . "<br>";
        echo "Hora ". date("G:i:s") . "<br><br>";
    ?>
    <header><h1>Informe o seu salário</h1></header>
    <?php 
        $salario2 = $_GET["salario"] ?? 0;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $qtd_salario = $salario2 / 1380;
        $diferenca = $salario2 % 1380;
    ?>
    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <fieldset>
                    <legend>Exercicio</legend>
                    <label for="salario (R$)"></label>
                    <p><input type="number" name="salario" id="salario" min="0" value="<?= $salario2 ?>"></p>
                    <p>Considerando o salário minimo de <strong>R$ 1.380,00</strong></p>
                    <p><input type="submit" value="Calcular"></p>
                </fieldset>
            </form>
            <p><h2>Resultado final</h2></p>
        </section>
    </main>
    <?php
        echo "Seu salário é <strong>". numfmt_format_currency($padrao,$salario2,"BRL"). "</strong><br>";
        echo  "Quem recebe um salário de <strong>". numfmt_format_currency($padrao,$salario2,"BRL") . "</strong> ganhar <strong>". intval($qtd_salario ). " salário minimos</strong> + <strong>" . numfmt_format_currency($padrao,$diferenca,"BRL") . "</strong>";
    ?>
</body>
</html>