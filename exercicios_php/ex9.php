<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo "PHP - 9";

    $capitalInicial = 4000;
    $taxaJurosInicial = 0.02;
    $prazos = [24, 36, 48, 60];

    foreach ($prazos as $prazo) {
    $taxaJurosMensal = $taxaJurosInicial + ($prazo - 24) * 0.003;
    $montante = $capitalInicial * pow(1 + $taxaJurosMensal, $prazo);
    $valorParcela = $montante / $prazo;
    echo "Para $prazo vezes: R$" . number_format($valorParcela, 2) . " por parcela\n";
}
    
    ?>
</body>
</html>