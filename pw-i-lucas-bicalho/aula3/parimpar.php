<!--
    - Faça um algoritmo no Php que pegue um intervalo entre dois números (ex: 25 e 60) e imprima cada 1 do intervalo classificando entre par e impar.
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
    $inicio =25;
    $ultimo =60;

    for ($x = $inicio; $x <= $ultimo; $x++){
        if ($x % 2 == 0){
            echo "$x é par <br>" . '<br>'; 
        }else{
            echo "$x é par <br>" . '<br>';
        }
    }


    ?>
    
</body>
</html>