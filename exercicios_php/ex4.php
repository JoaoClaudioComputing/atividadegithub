<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo "PHP - 4";

    $ladoA = 3;
    $ladoB = 2;

    $areaRetangulo = $ladoA * $ladoB;

    if ($areaRetangulo > 10) {
        echo "<h1>A área do retângulo de lados $ladoA e $ladoB metros é $areaRetangulo metros quadrados.</h1>".PHP_EOL;
    } else {
        echo "<h3>A área do retângulo de lados $ladoA e $ladoB metros é $areaRetangulo metros quadrados.</h3>".PHP_EOL;
    }

    echo "<a href='../index.php'>Voltar</a>";
    
    
    ?>
</body>
</html>