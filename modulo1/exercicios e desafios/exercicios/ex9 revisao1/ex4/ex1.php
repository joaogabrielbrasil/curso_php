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
                <label for="valor">Digite um valor</label>
                <p><input type="text" name="valor" id="valor"></p>
                <input type="submit" value="Clique aqui">
            </form>
        </section>
        <br>
    </main>

    <?php 
        $valor = $_REQUEST["valor"];
        echo number_format($valor,2,",",".");
    ?>
</body>
</html>