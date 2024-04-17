<?php
function soma($num1 = 0, $num2 = 0){

    $result = $num1 + $num2;

    echo "A soma é : $result";
}?>

<?php soma($_POST["num1"], $_POST["num2"]); ?><br>