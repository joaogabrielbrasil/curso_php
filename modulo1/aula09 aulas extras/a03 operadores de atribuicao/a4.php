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

    <main>
        <section>
            <form action="a4.php" method="post">
                <fieldset>
                    <legend>Exercicio</legend>
                    <label for="produto">Digite o nome do produto que você quer comprar</label>
                    <p><input type="text" name="produto" id="produto"></p>
                    <label for="">Digite o valor do produto</label>
                    <p><input type="text" name="preco" id="preco"></p>
                    <p><input type="submit" value="Calcular"></p>
                </fieldset>
            </form>
        </section>
    </main>
    
    <?php 
        $produto = $_REQUEST["produto"];
        $preco = $_REQUEST["preco"];
        $desconto = ($preco *10) / 100; 
        $novoPreco = $preco - $desconto;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Produto ". $produto. "<br>";
        echo "Preço do produto ". numfmt_format_currency($padrao,$preco,"BRL") . "<br>";
        echo "10% de desconto ". numfmt_format_currency($padrao,$desconto,"BRL") . "<br>";
        echo "Preço que você vai pagar com desconto ". numfmt_format_currency($padrao,$novoPreco,"BRL");
    ?>
</body>
</html>