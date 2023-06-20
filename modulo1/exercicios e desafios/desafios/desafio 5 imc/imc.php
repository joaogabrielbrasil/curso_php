<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>IMC</h1>
    </header>
    <main>
        <section>
            <form action="" method="post">
                <fieldset>
                    <legend>IMC</legend>
                    <label for="altura">Digite a sua altura</label>
                    <p><input type="text" name="altura" id="altura"></p>

                    <label for="peso">Digite o seu peso</label>
                    <p><input type="text" name="peso" id="peso"></p>
                </fieldset>
                <p><input type="submit" value="Calcular IMC"></p>
            </form>

            <p>
                <?php 
                    $altura = $_REQUEST["altura"];
                    $peso = $_REQUEST["peso"];
                    $imc = $peso / pow($altura,2);

                    if(number_format($imc,0) < 17) {
                        echo "Seu imc é ". number_format($imc,0). " e está muito abaixo do peso";
                    }else if(number_format($imc,0) < 18.49) {
                        echo "Seu imc é ". number_format($imc,0). " e está abaixo do peso";
                    }else if(number_format($imc,0) < 24.99){
                        echo "Seu imc é ". number_format($imc,0). " e está normal. <br>";
                        echo "Parabens";
                    }else if(number_format($imc,0) < 29.99){
                        echo "Seu imc é ". number_format($imc,0). " e está acima do peso";
                    }else if(number_format($imc,0) < 34.99){
                        echo "Seu imc é ". number_format($imc,0). " e está com obsidade I";
                    }else if(number_format($imc,0) < 39.99){
                        echo "Seu imc é ". number_format($imc,0). " e está com obsidade severa";
                    }else{
                        echo "Seu imc é ". number_format($imc,0). " você está com obsidade mórbida";
                    }
                ?>
            </p>
        </section>
    </main>
</body>
</html>