<?php
function nota($f1 = 0.00, $f2 = 0.00){
    $result = ($f1 + $f2) / 2;
    switch($result){
        case $result >= 6.00:
            echo "Aluno Aprovado";
        break;
        case $result >= 4.00:
            echo "Aluno em Recuperação";
        break;
        case $result >= 0.00:
            echo "Aluno Reprovado";
        break;
        default:
        echo "Nota inválida";  
    }
}?>
<?php nota($_POST["nota1"], $_POST["nota2"]); ?><br>