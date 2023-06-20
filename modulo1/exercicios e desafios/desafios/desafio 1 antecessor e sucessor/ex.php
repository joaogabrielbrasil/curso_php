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
        echo "Data ". date("d/M/Y") . "<br>";
        echo "Hora ". date("G:i:s") . "<br><br>";

        $n1 = $_POST["numero"];
        $antecessor = $n1 - 1;
        $sucessor = $n1 + 1;

        echo "O número digitado foi $n1". "<br>";
        echo "O antecessor de $n1 é ". $antecessor . "<br>";
        echo "O sucessor de $n1 é ". $sucessor;
    ?>
    <p>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </p>

    <p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </p>
</body>
</html>