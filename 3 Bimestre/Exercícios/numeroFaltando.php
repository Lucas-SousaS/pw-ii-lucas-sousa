<?php
if (isset($_POST["array"])) {
    $input = $_POST['array'];


    function verificarSequencia($input)
    {
        $array = explode(',', $input);


        $array = array_map('intval', $array);

        $menorElemento = min($array);
        $maiorElemento = max($array);

        $todosNumeros = range($menorElemento, $maiorElemento);
        $numerosAusentes = array_diff($todosNumeros, $array);
        if (empty($numerosAusentes)) {
            echo "O array contém todos os números";
        } else {
            echo "O(s) número(s) ausente(s) são: " . implode(', ', $numerosAusentes);
        }
    }

    echo "<h2>" . verificarSequencia($input) . "</h2>";

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Ausente</title>
</head>

<body>
    <form method="post">
        <label for="array">Coloque números separados por vírgula:</label>
        <input type="text" name="array" id="array" placeholder="Ex: 1,2,3,4,5">
        <button type="submit">Enviar</button>
    </form>

</body>

</html>