<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Chat</title>
</head>
<body>

    <div class="container">
        <h1>Vhat</h1>

        <?php 

            include 'autenticacao/sessao.php';

            echo $idUsuarioSessao;

            echo $nomeUsuarioSessao;
            echo $loginUsuarioSessao;
            echo $senhaUsuarioSessao;
            echo $createdAtUsuarioSessao;
            echo $deletedAtUsuarioSessao;
                
        ?>

    </div>


</body>
</html>