<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <?php 
          date_default_timezone_set("America/Sao_Paulo");
          echo "Data ". date("d/M/Y") . "<br>";
          echo "Hora ". date("G:i:s") . "<br>";
    ?>
        <h1>Sorteador de números</h1>
    </header>
    <main>
        <form action="ex.php" method="post">
            <fieldset>
                <legend>Exercicio</legend>
                Digite seu número na caixa abaixo e tente a sorte....
                <p><input type="text" name="numero" id="numero"></p>
                <p><input type="submit" value="Gerador de número"></p>
            </fieldset>
        </form>
    </main>

    <?php
       $numero = $_REQUEST["numero"];
       $numeroSorteado = mt_rand(0,10);
       echo "Gerando números aleatórios entre 0 e 10....". "<br><br>";
       echo "Número gerado ". $numeroSorteado . "<br>";

       if($numero == $numeroSorteado) {
            echo " Parabens! Você acertou.". "<br>";
            echo " Número digitado foi ". $numero;
       }else {
            echo " Infelizmento você não acertou.";
            echo " Número digitado foi ". $numero;
       }
    ?>
</body>
</html>