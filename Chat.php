<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Chat</title>
</head>
<body>

    <?php
    
        include_once 'autenticacao/sessao.php';

    ?>

    <p id="idUser" style="display: none;"  >
      <?php        
        echo $idUsuarioSessao;
      ?>
    </p>

    <div class="container">
        
        <div class="container-sidechat">
            <nav>
                <ul>
                    <li>
                        <h1>Chat</h1>
                    </li>
                </ul>
                <ul>
                    <li>
                        <input type="search" >
                    </li>
                </ul>
                <ul id="lista-amigos">
                    <?php
                        include './buscarAmigos/buscarAmigos.php';
                    ?>
                </ul>
            </nav>
        </div>

        <div class="container-chat">



            <div id="chat">

               
            </div>
        

        </div>

    </div>

   
    <script src="js//jquery-3.7.1.js"></script>
    <script src="js/script.js"></script>

</body>
</html>

<?php 
    /*

    include 'autenticacao/sessao.php';

    echo $idUsuarioSessao;

    echo $nomeUsuarioSessao;
    echo $loginUsuarioSessao;
    echo $senhaUsuarioSessao;
    echo $createdAtUsuarioSessao;
    echo $deletedAtUsuarioSessao;

    */
        
?>




