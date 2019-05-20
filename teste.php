<?php
    session_start();
        include_once("conexao.php");
        echo "session = ".$_SESSION['idEstagio'];
        $query = "SELECT * FROM estagio WHERE idEstagio='".$_SESSION['idEstagio']."'";
        echo "part1";
    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();
        echo "part2";
        if (empty($resultado)) {

            $_SESSION['loginErro'] = "Usuário ou senha inválidos.";
            header("Location: login.php");
        } else {
            $objetivosAlcansados = $resultado["objetivosAlcancados"];
            if($objetivosAlcansados==NULL){
                $objetivosAlcansados = "";
            }
            $atividadesQueMelhorEmpenhou = $resultado["atividadesQueMelhorEmpenhou"];
            echo "print: ".$atividadesQueMelhorEmpenhou;
        }
    
    }echo "part3";
    /* close connection */
    $conexao->close();