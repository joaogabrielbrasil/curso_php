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
        print "Data ". date("Y/m/d"). "<br>";
        print "Hora ". date("G:i:s"). "<br><br>";
    ?>
    <header><h1>Exercicio - Antecessor e Sucessor</h1></header>
    <?php 
        $numero = $_GET["num"] ?? 0;
    ?>
    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <fieldset>
                    <legend>Exercicio</legend>
                    <label for="num">Digite um número</label>
                    <p><input type="number" name="num" id="num" min="0" max="1000" value="<?= $numero ?>"></p>
                    <p><input type="submit" value="Clique aqui"></p>
                </fieldset>
            </form>
        </section>
    </main>    
    <p>
        <?php
             print "O sucessor de $numero é ". $numero + 1 . "<br>";
             print "O antecessor de $numero é ". $numero - 1;
        ?>
    </p>
</body>
</html>