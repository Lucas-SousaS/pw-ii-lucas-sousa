<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador email</title>
</head>

<body>
    <form method="post">
        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" placeholder="insira seu email">
        </div>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (isset($_POST["email"])) {
        $email = $_POST['email'];

        function verificarEmail($email){
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return "O e-mail é válido";
            }

            return "O e-mail é inválido";
        }

        echo "<h1>" . verificarEmail($email) . "</h1>";
        
    }
    ?>
</body>

</html>