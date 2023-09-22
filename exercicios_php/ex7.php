<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo "PHP - 7";

    $valorAVista = 22500.00;

    $valorParcela = 489.65;

    $numeroParcelas = 60;

    $valorTotalPago = $valorParcela * $numeroParcelas;

    $jurosPagos = $valorTotalPago - $valorAVista;

    echo "Maria pagará R$ $jurosPagos em juros em comparação ao valor a vista do carro de R$ $valorAVista.".PHP_EOL;
        
    ?>
</body>
</html>