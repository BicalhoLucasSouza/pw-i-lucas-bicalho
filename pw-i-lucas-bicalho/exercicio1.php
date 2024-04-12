<?php
function soma($num1 = 0, $num2 = 0){
    $result = $num1 + $num2;
    if($result < 0){
        $result = 0;
    }
    echo "$num1 + $num2 = $result";
}?>

A soma é <?php soma($_POST["num1"], $_POST["num2"]); ?><br>