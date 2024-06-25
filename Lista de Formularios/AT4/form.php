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
    $ano = $_POST['ano'];

    if(($ano%4) == 0 and ($ano % 100) !== 0){
        echo "É ano bissesto";
    }
    else{
        echo "Não é ano bissesto";
    }
    ?>
</body>
</html>