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
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $frequencia = $_POST['frequencia'];
    
    $media = ($nota1 + $nota2)/2;
    
    echo "Nome: $nome"."<br>";
    echo "Nota 1: $nota1"."<br>";
    echo "Nota 2: $nota2"."<br>";
    echo "Media: $media"."<br>";
    echo "Frequencia: $frequencia"."<br>";

    if($media < 5){
        echo "Reprova por nota";
    }
    else if($frequencia < 75){
        echo "Reprova por frequencia";
    }
    else{
        echo "Aprovado";
    }
    ?>
</body>
</html>