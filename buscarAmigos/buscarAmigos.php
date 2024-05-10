<?php

    include './conn.php';
    include_once './autenticacao/sessao.php';

    try {
        
        $sql = $conn -> query('select * from Usuario join Amizade where ID_UserA = '.$idUsuarioSessao.' and ID_UserB = ID_Usuario or ID_UserA = ID_Usuario and ID_UserB = '.$idUsuarioSessao.' and Status_Amizade = "A" ');

        foreach($sql as $linha){

            echo '  

                        <li><p id="'.$linha[0].'"> <i class="bi bi-person-circle"></i> '  .$linha[1].'</p></li>

                   ';

        }


    } catch (\Throwable ) {
        
        
    }






?>

