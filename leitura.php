<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitura</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <?php
        session_start();
        echo "<h3>Leitura</h3>";
        $nome = $_SESSION["nome"];
        $email = $_SESSION["email"];
        $niver = $_SESSION["niver"];

        echo "<strong>Nome: </strong>" .$nome;
        echo "<br>";
        echo "<strong>E-mail: </strong>" .$email;
        echo "<br>";
        echo "<strong>Aniversário: </strong>".$niver;
    ?>
    <p><a href="index.html"><input type="button" value="Voltar"></p>
    </center>
</body>
</html>