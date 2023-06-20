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
        $segundos = $_GET["segundos"] ?? 0;
        $cal_segundos = $segundos;
        $cal_minutos = $segundos / 60;
        $cal_horas = $segundos / 3600;
        $cal_dias = $segundos / 86400;
        $cal_semanas = $segundos / 604800;
    ?>
    <header><h1>Calculadora de Tempo</h1></header>
    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <fieldset>
                    <legend>Exercicio</legend>
                    <label for="">Qual o total de segundos? </label>
                    <p><input type="number" name="segundos" id="segundos" <?= $cal_segundos ?>></p>
                    <p><input type="submit" value="Calcular"></p>
                </fieldset>
            </form>
        </section>
        <h2>Totalizando tudo</h2>
    </main>  
    <p>
    <?php
            echo "Analizando o valor que você digitou, $cal_segundos segundos, equivalem a um total de: ". "<br>";
    ?>
        <ul>
            <li>
                <?php 
                    echo intval($cal_semanas) . "semanas."
                ?>
            </li>
            <li>
                <?php 
                    echo intval($cal_dias) . " dias."
                ?>
            </li>
            <li>
                <?php
                    echo intval($cal_horas) . " horas." 
                ?>
            </li>
            <li>
                <?php 
                    echo intval($cal_minutos) . " minutos."
                ?>
            </li>
            <li>
                <?php
                    echo intval($cal_segundos)  . " segundos." 
                ?>
            </li>
        </ul>
    </p>
</body>        
</html>