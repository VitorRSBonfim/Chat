<?php 



    include './conn.php';
    include './autenticacao/sessao.php';

    if ($_POST) {

        $msg = $_POST['msg'];
        $id = $_POST['id'];

        try {
            
            $sql = $conn -> prepare('
            insert into mensagem (
                ID_Mensagem_UsuarioSender, ID_Mensagem_UsuarioReceiver, mensagem
            ) values (
                :ID_Mensagem_UsuarioSender, :ID_Mensagem_UsuarioReceiver, :mensagem
            )
            ');

            $sql -> execute(array(
                ':ID_Mensagem_UsuarioSender' => $idUsuarioSessao,
                ':ID_Mensagem_UsuarioReceiver' => $id,
                ':mensagem' => $msg,
            ));



        } catch (PDOException $error) {

            $error -> getMessage();

        }



    }


?>