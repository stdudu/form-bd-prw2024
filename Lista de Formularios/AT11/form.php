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
    $prontuario = $_POST['prontuario'];
    $nome = $_POST['nome'];
    $idade = floatval($_POST['idade']);

    $erro=0;

    if(empty($prontuario)){
        echo "O Prontuário não pode ficar em branco"."<br>";
        $erro = 1;
    }
    if(empty($prontuario)){
        echo "O Nome não pode ficar em branco"."<br>";
        $erro = 1;
    }
    if($erro==0){
        echo "Todos os dados foram digitados corretamente!"."<br>";
    }
    if($idade < 15 or $idade > 75){
        echo "idade deve ser maior do que 15 e menor do que 75 anos"."<br>";
        $erro = 1;
    }
    ?>
</body>
</html>