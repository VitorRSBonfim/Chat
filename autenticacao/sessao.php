
<?php

 session_start();

    if(isset($_SESSION['idUsuario'])){

        $idUsuarioSessao = $_SESSION['idUsuario'];
        $nomeUsuarioSessao = $_SESSION['nomeUsuario'];
        $loginUsuarioSessao = $_SESSION['loginUsuario'];
        $senhaUsuarioSessao = $_SESSION['senhaUsuario'];
        $createdAtUsuarioSessao = $_SESSION['createAtUsuario'];
        $deletedAtUsuarioSessao = $_SESSION['deletedAtUsuario'];

    }else{

        header('Location:index.php');

    }

?>

