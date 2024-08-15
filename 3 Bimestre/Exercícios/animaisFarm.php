<?php

    if(isset($_POST["galinha"]) || isset($_POST["vaca"]) || isset($_POST["porco"])){
            $galinha = $_POST['galinha'];
            $vaca = $_POST['vaca'];
            $porco = $_POST['porco'];

            $soma = ($galinha * 2) + ($vaca * 4) + ($porco * 4);

            echo "a soma das patas é igual a: " . $soma;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais na Fazenda</title>
</head>
<body>
    
    <form action="" method="POST">
        
        <h1>Animais na fazenda</h1>

        <div>
            <label for="galinha">Galinha</label>
            <input type="number" name="galinha" id="galinha">
        </div>

        <div>
            <label for="vaca">Vaca</label>
            <input type="number" name="vaca" id="vaca">
        </div>

        <div>
            <label for="porco">Porco</label>
            <input type="number" name="porco" id="porco">
        </div>

        <button type="submit">Calcular</button>
    </form>

</body>
</html>