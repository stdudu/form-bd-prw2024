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
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pasta = $_POST['pasta'];
        $numImagens = $_POST['numImagens'];

        echo "<table>";
        echo "<tr>";

        for($i = 1; $i <= $numImagens; $i++){
            echo "<td>";
            echo "<img src='http://localhost/$pasta/$i.jpg' width='150' height='100'>";
            echo "</td>";
        }

        echo "</tr>";
        echo "</table>";

    }
    ?>
</body>
</html>