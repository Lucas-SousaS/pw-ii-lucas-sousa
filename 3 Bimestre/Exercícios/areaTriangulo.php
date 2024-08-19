<?php
if (isset($_POST["base"]) && isset($_POST["altura"])) {
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    function Calcular($base, $altura)
    {
        return ($base * $altura)/2;
    }

    echo "<h2>A área do triangulo é: " . Calcular($base, $altura) . "</h2>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Triangulo</title>
</head>

<body>

    <form action="" method="POST">
        <div>
            <label for="base">Base</label>
            <input type="number" name="base" id="base">
        </div>

        <div>
            <label for="altura">Área</label>
            <input type="number" name="altura" id="altura">
        </div>

        <button type="submit">
            Calcular
        </button>
    </form>

</body>

</html>