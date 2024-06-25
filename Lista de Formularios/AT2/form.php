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
    $text = $_POST['text'];
    $textarea = $_POST['textarea'];
    $checkbox = $_POST['checkbox'];
    $radio = $_POST['radio'];
    $select = $_POST['select'];

    echo "<h2>$text</h2>";
    echo "<h2>$textarea</h2>";
    echo "<h2>$checkbox</h2>";
    echo "<h2>$radio</h2>";
    echo "<h2>$select</h2>";
    ?>
</body>
</html>