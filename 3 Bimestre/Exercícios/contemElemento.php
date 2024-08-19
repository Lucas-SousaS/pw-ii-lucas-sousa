<?php

if (isset($_POST["lista"]) && isset($_POST["elemento"])) {
    $lista = $_POST["lista"];
    $elemento = $_POST["elemento"];
    $delimiter = ",";
    $array = explode($delimiter, $lista);

    function contemElemento($elemento, $array)
    {
        if(!in_array($elemento, $array)){
            return "O elemento não pertence ao array";
        }

        return "O elemento pertence ao array";
    }

    echo "<h2>" . contemElemento($elemento, $array) . "</h2>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contém elemento</title>
</head>

<body>

    <form action="" method="POST">
        <div>
            <label for="elemento">Elemento</label>
            <input type="text" name="elemento" id="elemento">
        </div>

        <div>
            <label for="lista">Array:</label>
            <input type="text" name="lista" id="lista" placeholder="Digite os elementos separados por virgula">
        </div>

        <button type="submit">
            Verificar
        </button>
    </form>

</body>

</html>