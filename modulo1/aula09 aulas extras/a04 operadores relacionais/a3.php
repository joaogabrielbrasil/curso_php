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

    <main>
        <section>
            <form action="a3.php" method="post">
                <fieldset>
                    <legend>Votação</legend>
                    <label for="">Digite seu nome</label>
                    <p><input type="text" name="nome" id="nome"></p>
                    <label for="">Digite o ano que você nasceu</label>
                    <p><input type="text" name="ano_nasc" id="ano_nasc"></p>
                    <p><input type="submit" value="Clique aqui"></p>
                </fieldset>
        </section>
            </form>
    </main>
    <br><br>
    <?php 
        $nome = $_REQUEST["nome"];
        $anoNasc = $_REQUEST["ano_nasc"];
        $anoAtual = date("Y");
        $idade = $anoAtual - $anoNasc;
        
        if($idade < 16){
            echo $nome . " você tem ". $idade . " anos. Você ainda não pode votar.";
        }else if($idade == 16 or $idade <= 17){
            echo $nome . " você tem ". $idade . " anos. Se você quiser , você pode votar.";
        }else if($idade >= 18 and $idade <= 64) {
            echo $nome . " você tem ". $idade . " anos. Você precisa votar.";
        }else {
            echo $nome . " você tem ". $idade . " anos. Você não precisa votar. Sua votação é opcional.";
        }
    ?>
</body>
</html>