<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.css">
    <title>chat</title>
</head>
<body>

    <?php

        include "autenticacao/autenticar.php";
        

      
    ?>

    <!-- Form Login -->

    <div class="container-form-login">
        <div class="container-form">
            <div>
                <h1>Wellcome</h1>
            </div>
            <form action="index.php" method="post">
                <label for="">Login</label>
                <input type="text" name="Login" id="Login">
                <label for="">Senha</label>
                <input type="text" name="Password" id="Password">
                <button type="submit" formaction="index.php" >ENTRAR</button>
            </form>
        </div>
    </div>




    <script src="bootstrap-5.3.3-dist/js/bootstrap.js"></script>

</body>
</html>