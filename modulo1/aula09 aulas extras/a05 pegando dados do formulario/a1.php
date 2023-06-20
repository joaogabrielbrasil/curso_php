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
        <header>
            <h1>Raiz Quadrada</h1>
        </header>

        <section>
            <form action="a1.php" method="post">
                <fieldset>
                    <legend>Exercicio</legend>
                    <label for="">Digite qualquer número de 0 a 1000000 </label>
                    <p><input type="text" name="num" id="num"></p>
                    <p><input type="submit" value="Clique aqui"></p>
                </fieldset>
            </form>
        </section>
    </main>

    <?php 
        $num = isset($_REQUEST["num"]) ? $_REQUEST["num"] : "[Número não informado]";
        echo "A raiz quadrada de ". $num . " é ". number_format(sqrt($num), 3) ;
    ?>
</body>
</html>