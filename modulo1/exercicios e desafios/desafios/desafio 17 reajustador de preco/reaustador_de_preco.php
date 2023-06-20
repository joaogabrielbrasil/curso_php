<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"). "<br>";
        echo "Data ". date("Y/m/d"). "<br>";
        echo "Hora ". date("G:i:s"). "<br><br>";
    ?>
    <?php 
        $precoProduto = $_GET["preco"] ?? 0; 
        $percentualProduto = $_GET["percentual"];
        $percentualAumento = ($percentualProduto / 100) * $precoProduto;
        $novoPrecoProduto = $precoProduto + $percentualAumento;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main> 
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <fieldset>
                    <legend>Exercicio</legend>
                    <label for="preco">Preço do produto (R$)</label>
                    <p><input type="number" name="preco" id="preco" <?=$precoProduto?> ></p>
                    <label for="percentual">Qual será o percentual de reajuste (<strong id="result">0</strong>%)</label>
                    <p><input type="range" name="percentual" id="percentual" min="0" max="100" step="1" oninput="mudaValor()"></p>
                    <script>
                        mudaValor();
                        function mudaValor() {
                            result.innerText = percentual.value;
                        }
                    </script>
                    <p><input type="submit" value="Reajustar preço"></p>
                </fieldset>
            </form>
            <h2>Resultado Final</h2>
        </section>
        <p>
            <?php
                echo "O produto que custava ". numfmt_format_currency($padrao,$precoProduto,"BRL"). ", com <strong>". $percentualProduto. "% de aumento</strong>, vai passar a custar <strong>". numfmt_format_currency($padrao,$novoPrecoProduto,"BRL"). "</strong> a partir de agora.";
            ?>
        </p>
    </main>
</body>
</html>