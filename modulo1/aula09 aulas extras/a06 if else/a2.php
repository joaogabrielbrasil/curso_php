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
        <head>
            <h1>Exercicio - Media do Aluno</h1>
        </head>

        <section>
            <form action="a2.php" method="post">
                <fieldset>
                    <legend>Exercicio</legend>
                    <label for="nome">Nome do Aluno</label>
                    <p><input type="text" name="nome" id="nome"></p>
                    <label for="nota1">Primeira nota do aluno</label>
                    <p><input type="text" name="nota1" id="nota1"></p>
                    <label for="nota2">Segunda nota do aluno</label>
                    <p><input type="text" name="nota2" id="nota2"></p>
                    <label for="nota3">Terceira nota do aluno</label>
                    <p><input type="text" name="nota3" id="nota3"></p>
                    <label for="nota4">Quarta nota do aluno</label>
                    <p><input type="text" name="nota4" id="nota4"></p>
                    <p><input type="submit" value="Clique aqui"></p>
                </fieldset>
            </form>
        </section>
    </main>
    <br><br>
    <?php
        $nome = isset($_REQUEST["nome"]) ? $_REQUEST["nome"] : "[Nome não informado]";
        $nota1 = isset($_REQUEST["nota1"]) ? $_REQUEST["nota1"] : "[Nota 1 não informado]";
        $nota2 = isset($_REQUEST["nota2"]) ? $_REQUEST["nota2"] : "[Nota 2 não informado]"; 
        $nota3 = isset($_REQUEST["nota3"]) ? $_REQUEST["nota3"] : "[Nota 3 não informado]";
        $nota4 = isset($_REQUEST["nota4"]) ? $_REQUEST["nota4"] : "[Nota 4 não informado]"; 
        $mediaAluno = ($nota1+$nota2+$nota3+$nota4)/4;

        if($mediaAluno < 4) {
            echo "$nome com média de $mediaAluno , está reprovado";
        }else {
            if ($mediaAluno >= 4 and $mediaAluno < 6) {
                echo "$nome com média de $mediaAluno , está em recuperação";
            }else {
                echo "$nome com média de $mediaAluno , está aprovado";
            }
        }
    ?>
</body>
</html>