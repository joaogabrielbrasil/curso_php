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
    <header><h1>Exercicio - Gerador de número aleatorio</h1></header>
    <section>
        <p>
            <?php
                $numAleatorio = mt_rand(0,100);
            ?>
        </p>
    </section>
    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <fieldset>
                    <legend><strong>Exercicio</strong></legend>
                    <p><input type="submit" value="Gerador de numero"></p>
                </fieldset>
            </form>
            <p>Gerando número aleatório entre 0 a 100........</p>
        </section>
        <?php 
            print "O número gerado foi <strong>$numAleatorio</strong>"
        ?>
    </main>
</body>
</html>