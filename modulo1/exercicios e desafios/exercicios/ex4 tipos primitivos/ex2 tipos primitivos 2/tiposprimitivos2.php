<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tpos Primitivos</h1>
    <?php 
        $nomeCompleto = "Marcos Silva de Andrade";
        $idade = 40;
        $casado = true;
        const PESO = 78;
        $patrimonio = 50000.5643;

        date_default_timezone_set("America/Sao_Paulo");
        print "A data de hoje é " . date("d/M/Y");
        print "<br>";
        print "O horário de Brasília é " . date("G:i:s");
        print "<br>";
        print "Essa variavel é do tipo "; var_dump($nomeCompleto);
        print "<br>";
        print "Essa variavel é do tipo "; var_dump($idade);
        print "<br>";
        print "Essa variavel é do tipo "; var_dump($casado);
        print "<br>";
        print "Essa variavel é do tipo "; var_dump(PESO);
        print "<br>";
        print "Essa variavel é do tipo "; var_dump($patrimonio);
    ?>
</body>
</html>