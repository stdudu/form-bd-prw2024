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
    $estado = $_POST['estado'];
    $capital = '';

    if($estado == 'AC'){
        $capital = 'Rio Branco';
    }
    else if($estado == 'AL'){
        $capital = 'Maceio';
    }
    else if($estado == 'AM'){
        $capital = 'Manaus';
    }
    else if($estado == 'AP'){
        $capital = 'Macapa';
    }
    else if($estado == 'BA'){
        $capital = 'Salvador';
    }
    else if($estado == 'CE'){
        $capital = 'Fortaleza';
    }
    else if($estado == 'ES'){
        $capital = 'Vitoria';
    }
    else if($estado == 'GO'){
        $capital = 'Goiania';
    }
    else if($estado == 'MA'){
        $capital = 'Sao Luis';
    }
    else if($estado == 'MT'){
        $capital = 'Cuiaba';
    }
    else if($estado == 'MS'){
        $capital = 'Campo Grande';
    }
    else if($estado == 'PA'){
        $capital = 'Belem';
    }
    else if($estado == 'PB'){
        $capital = 'Joao Pessoa';
    }
    else if($estado == 'PE'){
        $capital = 'Recife';
    }
    else if($estado == 'PR'){
        $capital = 'Curitiba';
    }
    else if($estado == 'PI'){
        $capital = 'Teresina';
    }
    else if($estado == 'RJ'){
        $capital = 'Rio de Janeiro';
    }
    else if($estado == 'RN'){
        $capital = 'Natal';
    }
    else if($estado == 'RS'){
        $capital = 'Porto Alegre';
    }
    else if($estado == 'RO'){
        $capital = 'Porto Velho';
    }
    else if($estado == 'RR'){
        $capital = 'Boa Vista';
    }
    else if($estado == 'SC'){
        $capital = 'Florianopolis';
    }
    else if($estado == 'SE'){
        $capital = 'Aracaju';
    }
    else if($estado == 'SE'){
        $capital = 'Sao Paulo';
    }
    else if($estado == 'TO'){
        $capital = 'Palmas';
    }
    else if($estado == 'DF'){
        $capital = 'Goiania';
    }

    echo "Capital de $estado: ".$capital."<br>";
    ?>
</body>
</html>