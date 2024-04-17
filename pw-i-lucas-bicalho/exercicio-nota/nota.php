<?php
function nota($n1 = 0.00, $n2 = 0.00){
    $resultado = ($n1 + $n2) / 2;

    if ($resultado >= 6.00){
        echo "Aprovado!!!";
    }
    else if($resultado >= 4.00){
        echo "Recuperação";
    }
    else{   
        echo "Reprovado";
    }
}?>
<?php nota($_POST["n1"], $_POST["n2"]); ?><br>