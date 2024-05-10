<?php

    include './conn.php';
    include './autenticacao/sessao.php';

    if ($_POST) {

        try {
                
                $sql = $conn->prepare('select * from Mensagem join Usuario where ID_Mensagem_UsuarioSender = '.$idUsuarioSessao.' and ID_Mensagem_UsuarioReceiver = '.$_POST['id'].' and ID_Usuario = '.$idUsuarioSessao.' or 
                ID_Mensagem_UsuarioReceiver = '.$idUsuarioSessao.' and ID_Mensagem_UsuarioSender = '.$_POST['id'].' and ID_Usuario = '.$_POST['id'].' ORDER BY Data_Mensagem ASC ');
                
                $sql->execute();
                
                echo json_encode($sql -> fetchAll(PDO::FETCH_ASSOC));

            } catch (PDOException $th) {
                //throw $th;
            }



    }

    

?>