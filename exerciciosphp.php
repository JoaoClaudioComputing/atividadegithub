<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<h2>Ex. 1</h2><br>'
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
    
    ?>
</body>
</html>