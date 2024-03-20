<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício IMC</title>
    <style>
        *{
            font-family:Arial;
        }
        div{
            position:absolute;
            left:50%;
            top:50%;
            transform:translate(-50%,-50%);
  
        }
    </style>
</head>
<body>

    <div>
        <?php 
            $peso = 97;
            $altura = 1.75;
            $imc = $peso / $altura**2;

            echo "<h2> Peso: $peso Kg</h2> <br>";
            echo "<h2> Altura: $altura </h2> <br>";
            echo "<h2> IMC: $imc </h2> <br>";  

            if ($imc <  18.5) {
                echo "<h3>Baixo peso </h3>";
            }
            elseif ($imc < 25) {
                echo "<h3>Peso adequado </h3>";
            }
            elseif ($imc <= 30) {
                echo "<h3>Sobre peso </h3>";
            }
            elseif ($imc <= 35) {
                echo "<h3>Obesidade grau I </h3>";
            }
            elseif ($imc <= 40) {
                echo "<h3>Obesidade grau II </h3>";
            }
            else{
                echo "<h3>Obesidade extrema </h3>";
            }

        ?>    
    </div>
</body>
</html>