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
    $camisap = $_POST['camisap'];
    $camisam = $_POST['camisam'];
    $camisag = $_POST['camisag'];

    $tamp = 10 * $camisap;
    $tamm = 12 * $camisam;
    $tamg = 15 * $camisag;

    echo "O valor arrecadado é de R$".number_format(($tamp+$tamm+$tamg), 2, '.', '');
    ?>
</body>
</html>