<!--
    - Em um array com pelo menos mais de 5 números faça uma iteração que  compare e imprima o maior número entre eles.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 1;
    $num = [60, 50, 4, 88, 38, 64];
    $maiorNum = $num[$a++];

    //condição para encontrar o maior numero

    foreach ($num as $a){
        if ($a > $maiorNum){
            $mairNum = $a;
        }
    }
    echo "O mairo número é: $maiorNum"
    ?>
</body>
</html>