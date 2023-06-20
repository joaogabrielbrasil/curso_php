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
        echo "Hora ".date("G:i:s"). "<br><br>";
    ?>
    <?php 
        $saque = $_GET["valor"] ?? 0;
        $resto = $saque;

        $tot100 = floor($resto/100);
        $resto %= 100;

        $tot50 = floor($resto/50);
        $resto %= 50;

        $tot10 = floor($resto/10);
        $resto %= 10;

        $tot5 = floor($resto/5);
        $resto %= 5;
    ?>
    <header><h1>Caixa Eletrônico</h1></header>
    <main>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <fieldset>
                    <legend>Exercicios</legend>
                    <label for="valor"><strong>Qual valor você deseja sacar? (R$)</strong></label>
                    <p><input type="number" name="valor" id="valor" value="<?=$saque?>"  step="5"></p>
                    <ul>
                        <li>Notas disponiveis: <strong>R$100,00</strong> , <strong>R$50,00</strong> , <strong>R$10,00</strong> e <strong>R$5,00</strong></li>
                    </ul>
                    <p><input type="submit" value="Sacar"></p>
                </fieldset>
            </form>
        </section>
        <p><strong>O caixa eletrônico vai te entregar as seguintes notas:</strong></p>
        <p>
            <ul>
                <li><img src="img/100-reais.jpg" alt="">
                    <?php
                        echo "x". $tot100;
                    ?>
                </li>
                <li><img src="img/50-reais.jpg" alt="">
                    <?php
                        echo "x". $tot50; 
                    ?>
                </li>
                <li><img src="img/10-reais.jpg" alt="">
                    <?php
                        echo "x". $tot10;
                    ?>
                </li>
                <li><img src="img/5-reais.jpg" alt="">
                    <?php
                        echo "x". $tot5;
                    ?>
                </li>
            </ul>
        </p>
    </main>
</body>
</html>