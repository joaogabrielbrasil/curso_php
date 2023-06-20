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
        <header>
            <h1>Exercicio - Você pode votar ? </h1>
        </header>

        <form action="a1.php" method="post">
            <fieldset>
                <legend>Exercicio</legend>
                <label for="nome">Qual seu nome? </label>
                <p><input type="text" name="nome" id="nome"></p>
                <label for="anoNasc">Qual o ano que você nasceu? </label>
                <p><input type="text" name="anoNasc" id="anoNasc"></p>
                <fieldset>
                    <legend>Genero</legend>
                    <label for="masc">Masculino</label><input type="radio" name="gen" id="masc" value="Masculino" checked>  <label for="fem">Feminino</label> <input type="radio" name="gen" id="fem" value="Feminino">
                </fieldset>
                <p><input type="submit" value="Clique aqui"></p>
            </fieldset>
        </form>
    </main>

    <?php
        $nome = isset($_REQUEST["nome"]) ? $_REQUEST["nome"] : "[Nome não informado]";
        $anoNasc = isset($_REQUEST["anoNasc"]) ? $_REQUEST["anoNasc"] : "[Ano de nascimento não informado]";
        $genero = isset($_REQUEST["gen"]) ? $_REQUEST["gen"] : "[Genero não informado]";
        $anoAtual = date("Y");
        $idade = $anoAtual - $anoNasc;

        if($idade < 16) {
            echo "O $nome do genero: $genero , com idade de $idade anos , não pode votar.";
        }else if(($idade >= 16 && $idade < 18) or $idade > 65){
            echo "O $nome do genero: $genero , com idade de $idade anos , seu voto é opcional.";
        }else{
            echo "O $nome do genero: $genero , com idade de $idade anos , seu voto é obrigatório.";
        }
    ?>
</body>
</html>