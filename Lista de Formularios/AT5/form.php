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
    $altura = $_POST['altura'];
    $largura = $_POST['largura'];

    $area = $largura * $altura;
    echo "Area do terreno: $area";
    ?>
</body>
</html>