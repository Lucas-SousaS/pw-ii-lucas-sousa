<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci | Lucas Sousa </title>
</head>
<body>
    <ul>
    <?php 

        $valorAnt = 0;
        $valorAtual = 0;
        $i = 0;

        for($i = 0; $i<10; $i++){

            if ($i == 1) {
                $valorAtual = 1;
                $valorAnt = 0;
                echo "<li><h2>", $valorAtual, "</h2> </li>";
            } else {
                $valorAtual += $valorAnt;
                $valorAnt = $valorAtual - $valorAnt;
                echo "<li><h2>", $valorAtual, "</h2> </li>";
            }            
        
        }  

    ?>
    </ul>
</body>
</html>
