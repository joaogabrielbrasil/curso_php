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
        <h1>Resultado do Processamento</h1>
   </header>
   <main>
        <?php 
            $nome = $_REQUEST["nome"];
            $sobrenome = $_REQUEST["sobrenome"];
            echo "O nome e o sobrenome digitado no formulario foi Nome: $nome ; Sobrenome: $sobrenome";
        ?>
   </main>
</body>
</html>