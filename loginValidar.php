<?php
    session_start();
    $login = $_POST['ra'];
    $senha = $_POST['password'];
    include_once("conexao.php");
    $query = "SELECT * FROM alunos WHERE ra='$login' AND senha= MD5('$senha')";
    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();
        
        if (empty($resultado)) {
            $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
            header("Location: login.php");
        } else {
            $_SESSION['senha'] = $resultado["senha"];
            $_SESSION['ra'] =  $resultado["ra"];
            $_SESSION['nome'] = $resultado["nome"];
            $_SESSION['curso'] = $resultado["curso"];
            $_SESSION['email'] = $resultado["email"];
            header("Location: home.php");
        }
    }
    /* close connection */
    $conexao->close();
?>