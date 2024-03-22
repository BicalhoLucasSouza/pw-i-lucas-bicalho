<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Exercicio While</title>
    </head>
    <body>
        <?php
            // while sem break
            $i = 1;
            while($i < 6) {
                echo $i."<br>";
                $i++;
            }

            echo "<br>";

            // while com break
            $i = 1;
            while($i < 6) {
                if($i == 3) break;
                echo $i . "<br>";
                $i++;
            }
        ?>
    </body>
</html>