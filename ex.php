<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "1 - ";
    $var1 = 12;
$var2 = 8;
$var3 = 15;

$resultado = $var1 + $var2 + $var3;

if ($var1 > 10) {
    $cor = 'blue';
} elseif ($var2 < $var3) {
    $cor = 'green';
} elseif ($var3 < $var1 && $var3 < $var2) {
    $cor = 'red';
} else {
    $cor = 'black';
}

echo "
    <p>Valor 1: $var1 <br> </p>
    <p>Valor 2: $var2 <br> </p>
    <p>Valor 3: $var3 <br> </p>
    <p style='color: $cor;'>Resultado da Operação: $resultado</p>".PHP_EOL;


echo "2 - ";

$numero = 10;

if ($numero % 2 == 0) {
    echo "Valor divisível por 2";
} else {
    echo "O valor não é divisível por 2".PHP_EOL;
}

echo "<a href='../index.php'>Voltar</a>";

echo "3 - ";

$comprimentoLado = 3;

$areaQuadrado = $comprimentoLado * $comprimentoLado;

echo "A área do quadrado de lado $comprimentoLado metros é $areaQuadrado metros quadrados.".PHP_EOL;

echo "<a href='../index.php'>Voltar</a>";

echo "4 - ";

$ladoA = 3;
$ladoB = 2;

$areaRetangulo = $ladoA * $ladoB;

if ($areaRetangulo > 10) {
    echo "<h1>A área do retângulo de lados $ladoA e $ladoB metros é $areaRetangulo metros quadrados.</h1>".PHP_EOL;
} else {
    echo "<h3>A área do retângulo de lados $ladoA e $ladoB metros é $areaRetangulo metros quadrados.</h3>".PHP_EOL;
}

echo "<a href='../index.php'>Voltar</a>";


echo "5 - ";

$base = 6;
$altura = 4;

$areaTriangulo = ($base * $altura) / 2;

echo "A área do triângulo retângulo com base $base metros e altura $altura metros é $areaTriangulo metros quadrados.".PHP_EOL;

echo "<a href='../index.php'>Voltar</a>";


echo "6 - ";

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
} else 
    echo "<p style='color: green;'>O saldo para compras foi esgotado.</p>".PHP_EOL;
 
echo "7 - "

$valorAVista = 22500.00;

$valorParcela = 489.65;

$numeroParcelas = 60;

$valorTotalPago = $valorParcela * $numeroParcelas;

$jurosPagos = $valorTotalPago - $valorAVista;

echo "Maria pagará R$ $jurosPagos em juros em comparação ao valor a vista do carro de R$ $valorAVista.".PHP_EOL

echo "8 - "

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