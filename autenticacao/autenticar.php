<?php

    include 'conn.php';

    if($_POST){

        try{

            $sql = $conn->query("
                select * from Usuario where
                Login_Usuario = '".$_POST['Login']."'
                and
                Senha_Usuario = '".$_POST['Password']."'

            ");

            if($sql->rowCount()==1){

                foreach($sql as $linha){

                    session_start();
                    $_SESSION['idUsuario'] = $linha[0];
                    $_SESSION['nomeUsuario'] = $linha[1];
                    $_SESSION['loginUsuario'] = $linha[2];
                    $_SESSION['senhaUsuario'] = $linha[3];
                    $_SESSION['createAtUsuario'] = $linha[4];
                    $_SESSION['deletedAtUsuario'] = $linha[5];
                    header('location:Chat.php');

                }

            } else {
                $msg = "ASASDASD";
            }

        }catch(PDOException $erro){

            $erro ->getMessage();

        }

    }

    

?>