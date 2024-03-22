<!--
    - Sequência de Fibonacci -> 0 1 1 2 3 5 8 13 21...
Vão fazer um arquivo na pasta aula03 chamado fibonacci.php e 
imprimam os 10 primeiros números. Façam isso utilizando pelo menos 2 métodos de loop.
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

    //variaveis -->
    $n1 = 0;
    $n2 = 1;

    //os 3 primeiros da sequencia

    echo $n1 . " " . $n2 . " ";
    $count = 2

    //loop
    while ($count <10){
        $n3 = $n1 + $n2;
        echo $n3 . " ";
    

    //atualizando os valores das variaveis
    $n1 = $n2;
    $n2 = $n3;
    $count++;
}
    

?>
    
    </body>
</html>