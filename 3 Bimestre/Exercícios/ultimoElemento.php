<?php

if (isset($_POST["lista"])) {
    $lista = $_POST["lista"];
    $delimiter = ",";
    $array = explode($delimiter, $lista);

    function ultimoElemento( $array)
    {
        $ultimoElemento = end($array);
        return "$ultimoElemento";
    }

    echo "<h2>" . ultimoElemento($array) . "</h2>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultimo elemento</title>
</head>

<body>

    <form action="" method="POST">
        <div >
            <label for="lista">Array:</label>
            <input style=" width:300px;" type="text" name="lista" id="lista" placeholder="Digite os elementos separados por virgula">
        </div>

        <button type="submit">
            Verificar
        </button>
    </form>

</body>

</html>