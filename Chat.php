<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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

    <div class="container" >
        <div class="container-sidechat" id="menuSide">
            <nav>
                <ul class="ul-img">
                    <li>
                        <div class="profile">
                            
                        </div>
                    </li>
                    <li>
                        <input type="search" placeholder="Search" >
                    </li>
                </ul>
                <ul>
                   
                </ul>
                
            </nav>

            <div style="border: solid 1px white; margin-left: 2px; margin-right: 2px;"></div>
                
            <nav>
                <ul class="ul-friends" id="lista-amigos">
                    <?php 
                        include_once "./buscarAmigos/buscarAmigos.php";
                    ?>
                </ul>
                <ul>
                   
                </ul>
                
            </nav>

        </div>

        <div class="container-chat">

            <div>
                
            </div>

            <div class="container-chatwith">
                <div style="border-bottom: 1px solid white;" >
                    <h1 id="nome">

                    </h1>
                </div>
            </div>

            <div id="chat" class="chat">

               
            </div>

            <div class="container-msg">
                <form id="form-msg" action="">

                    <input type="text" class="frm-msg" name="msg" id="msg">

                    <button style="cursor: pointer; " >SEND</button>

                </form>
            </div>
        

        </div>

    </div>

   
    <script src="js/jquery-3.7.1.js"></script>
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




