<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natal</title>
</head>

<body>
    <form method="POST">
        <h1>verifique se hoje é Natal</h1>

        <?php
        if (isset($_POST["data"])) {
        $data = $_POST["data"];

        function verificarNatal($data){
            $dataEscolhida = date('m-d', strtotime($data));

            if ($dataEscolhida == '12-25') {
                return "A data escolhida é Natal!";
            }  
            
            return "A data escolhida não é Natal.";
            
        }

        echo "<h1>" . verificarNatal($data) . "</h1>";

    }
        ?>

        <div>
            <label for="data">data</label>
            <input type="date" name="data" id="data" required>
        </div>
        <button type="submit">verificar</button>
    </form>

</body>

</html>