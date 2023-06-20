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

        echo 10 < 50 . "<br>";
        echo 100 <= 100 . "<br>";
        echo 24 < 80 . "<br>";
        echo 200 >= 201 . "<br>";
        echo 1000 == 1000 . "<br>";
        echo 2 != 3 . "<br>";
        echo 30 === 30 . "<br>";
        echo 70 !== 71 . "<br>";
        echo 30 <> 40;
    ?>
</body>
</html>