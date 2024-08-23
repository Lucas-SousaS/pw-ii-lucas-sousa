<?php
if (isset($_POST["array"]) && isset($_POST["numero"])) {
    $input = $_POST['array'];
    $array = explode(',', $input); 
    $numero = $_POST['numero'];

    function acharNumero($numero, $array){

        $resposta = array_search($numero, $array);

        if ($resposta !== false) {
            echo "$numero foi encontrado no índice $resposta.";
        } else {
            echo "$numero não foi encontrado no array.";
        }
    }

    echo "<h2>" . acharNumero($numero, $array) . "</h2>";

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achar número</title>
</head>

<body>
    <form action="" method="POST">
        <div>
            <label for="array">Coloque números separados por vírgula:</label>
            <input type="text" name="array" id="array" placeholder="Ex: 1,2,3,4,5">
        </div>

        <div>
            <label for="numero">Digite o numero que quer achar: </label>
            <input type="number" name="numero" id="numero">
        </div>

        <button type="submit">Enviar</button>
    </form>

</body>

</html>