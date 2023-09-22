<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo "PHP - 8"

    $valorAVista = 8654.00;

    $taxaJuros = 1.5;

    $opcoesParcelamento = [24, 36, 48, 60];

    foreach ($opcoesParcelamento as $parcelas) {
    $taxaJurosDecimal = $taxaJuros / 100;

    $valorParcela = ($valorAVista * (1 + ($taxaJurosDecimal * $parcelas))) / $parcelas;

    echo "<p>Para $parcelas vezes, o valor da parcela é R$ " . number_format($valorParcela, 2, ',', '.') . "</p>";

    $taxaJuros += 0.5;
}
    
    ?>
</body>
</html>