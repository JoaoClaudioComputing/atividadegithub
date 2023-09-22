<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo "PHP - 6";


    $precoMacas = 2.50;
    $precoMelancia = 3.00;
    $precoLaranja = 1.20;
    $precoRepolho = 1.80;
    $precoCenoura = 2.10;
    $precoBatatinha = 2.50;


    $quantidadeMacas = 2;
    $quantidadeMelancia = 1.5;
    $quantidadeLaranja = 2;
    $quantidadeRepolho = 0.5;
    $quantidadeCenoura = 1;
    $quantidadeBatatinha = 1;


    $gastoMacas = $precoMacas * $quantidadeMacas;
    $gastoMelancia = $precoMelancia * $quantidadeMelancia;
    $gastoLaranja = $precoLaranja * $quantidadeLaranja;
    $gastoRepolho = $precoRepolho * $quantidadeRepolho;
    $gastoCenoura = $precoCenoura * $quantidadeCenoura;
    $gastoBatatinha = $precoBatatinha * $quantidadeBatatinha;


    $totalGasto = $gastoMacas + $gastoMelancia + $gastoLaranja + $gastoRepolho + $gastoCenoura + $gastoBatatinha;


    $dinheiroDisponivel = 50.00;


if ($totalGasto < $dinheiroDisponivel) {
    $saldo = $dinheiroDisponivel - $totalGasto;
    echo "<p style='color: blue;'>O valor da compra foi de R$ $totalGasto. Joãozinho ainda pode gastar R$ $saldo.</p>".PHP_EOL;
} elseif ($totalGasto > $dinheiroDisponivel) {
    $falta = $totalGasto - $dinheiroDisponivel;
    echo "<p style='color: red;'>Joãozinho ultrapassou o limite disponível em R$ $falta.</p>".PHP_EOL;
} else {
    echo "<p style='color: green;'>O saldo para compras foi esgotado.</p>".PHP_EOL;
}    
    ?>
</body>
</html>