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
    $tabuada = $_POST['tabuada'];
    $i = 1;

    echo "Tabuada do $tabuada"."<br><br>";

    while($i<11){
        $r = ($tabuada*$i);
        echo "$tabuada x $i = $r<br>";
        $i++;
    }
    


    ?>
</body>
</html>