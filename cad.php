<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista corretores</title>
</head>
<body>
    <header>
        <h1>Lista de Corretores</h1>
    </header>
    <main>
        <?php 
            $cpf = $_POST["cpf"];
            $creci = $_POST["creci"];
            $nome = $_POST["nome"];
            echo "Corretor cadastrado".$cpf."".$creci."".$nome."";

        ?>
    </main>
</body>
</html>