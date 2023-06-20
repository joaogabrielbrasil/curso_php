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
        echo "Data ". date("d/M/Y"). "<br>";
        echo "Hora ". date("G:i:s"). "<br><br>";

        $numero = $_REQUEST["numero"];

        if($numero % 2 == 0) {
            echo "Você digitou o número: ". $numero . "<br>";
            echo "O numero é PAR";
        }else {
            echo "Você digitou o número: ". $numero . "<br>";
            echo "O númeo é IMPAR";
        }
    ?>
    <br><br>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>