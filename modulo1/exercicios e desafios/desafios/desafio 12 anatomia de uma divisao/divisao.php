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
        $dividendo2 = $_GET["dividendo"] ?? 0;
        $divisor2 = $_GET["divisor"] ?? 0;
        //$quociente = $dividendo2 / $divisor2;
        
    ?>
    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <fieldset>
                    <legend>Exercicio</legend>
                    <label for="dividendo">Dividendo</label>
                    <p><input type="text" name="dividendo" id="dividendo" value="<?= $dividendo2 ?>"></p>
                    <label for="">Divisor</label>
                    <p><input type="text" name="divisor" id="divisor" value="<?= $divisor2 ?>"></p>
                    <p><input type="submit" value="Analisar"></p>
                </fieldset>
            </form>
        </section>
    </main>
    <br>
    <?php 
        echo "O dividendo é $dividendo2 ". "<br>";
        echo "O divisor é $divisor2 ". "<br>";
        //echo "O resultado da divisão é ". $quociente = $dividendo2 / $divisor2 . "<br>";
        //echo "O resto da divisão é ". $restoDaDivisao = $dividendo2 % $divisor2;
        if($dividendo2 == 0 or $divisor2 == 0) {
            echo "Não há resultados com o zero";
        }else {
            echo "O resultado da divisão é ". intdiv($dividendo2,$divisor2) . "<br>";
            echo "O resto da divisão é ". $restoDaDivisao = $dividendo2 % $divisor2;
        }
    ?>
</body>
</html>