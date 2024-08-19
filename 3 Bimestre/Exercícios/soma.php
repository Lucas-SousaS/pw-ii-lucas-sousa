<?php

if (isset($_POST["num1"]) && isset($_POST["num2"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    function somar($num1, $num2)
    {
        return $num1 + $num2;
    }

    echo "<h2>A soma dos números é igual a: " . somar($num1, $num2) . "</h2>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>

<body>

    <form action="" method="POST">
        <div>
            <label for="num1">Primeiro número:</label>
            <input type="number" name="num1" id="num1">
        </div>

        <div>
            <label for="num2">Segundo número:</label>
            <input type="number" name="num2" id="num2">
        </div>

        <button type="submit">
            Somar
        </button>
    </form>

</body>

</html>