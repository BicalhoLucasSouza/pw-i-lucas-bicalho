<?php
function ContaPrimos($num1, $num2){
    $primos = array();
    $i = $num1;
    if($i < $num2){
        $i = $num1;
    }else{
        $i = $num2;
    }
    while($i <= $num1 &&  $i <= $num2){
         switch($i){
            case $i / $i == 0:
            $cont = 0;
            if($i / $i != 0){
                $primos[$cont] = $i;
                echo $primos[$cont];
                $cont++;
            }
            $i++;
        }
    }
} 
ContaPrimos($_POST["num1"], $_POST["num2"]);
?>