<?php

if (isset($_POST["num1"]) && isset($_POST["num2"])) {
    
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    function menorNumero($num1, $num2)
    {
        if($num1 < $num2){
            return "o primeiro número (" . $num1 . ") é menor que o segundo (" . $num2 . ")";
        }

        return "o primeiro número (" . $num1 . ") é maior que o segundo (" . $num2 . ")";
    }

    echo "<h2>" . menorNumero($num1, $num2) . "</h2>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menor Número</title>
</head>
<body>
    

<form action="" method="POST">
        <div>
            <label for="num1">1° Número</label>
            <input type="number" name="num1" id="num1">
        </div>

        <div>
            <label for="num2">2° Número</label>
            <input type="number" name="num2" id="num2">
        </div>

        <button type="submit">
            descobrir
        </button>
    </form>

</body>
</html>