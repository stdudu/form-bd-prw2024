<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
    $nome = $_POST['nome'];
    $idade = $_POST['age'];

    
    $days = $idade * 365;
    
    echo "Nome: $nome"."<br>";
    echo "Idade: $idade"."<br>";
    echo "Dias de vida: $days"."<br>";


    ?>
</body>
</html>