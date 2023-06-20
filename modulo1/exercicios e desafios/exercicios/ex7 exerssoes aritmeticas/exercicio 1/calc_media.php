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
        echo "Hora ". date("G:i:s"). "<br>";

        $nome = (string) $_POST["nome"];
        $n1 = (float) $_POST["n1"];
        $n2 = (float) $_POST["n2"];
        $n3 = (float) $_POST["n3"];
        $media = ($n1+$n2+$n3)/3;
        echo "O $nome digitou os valores $n1, $n2 e $n3. E a média desses valores é: ". number_format($media,3);
    ?>
</body>
</html>