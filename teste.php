<?php
    session_start();
        include_once("conexao.php");
        $query = "SELECT * FROM supervisor WHERE idSupervisor='".$_SESSION['idSupervisor']."'";
    echo ("ID Supervisor: ").$_SESSION['idSupervisor'];
    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();
        
        if (empty($resultado)) {
            $_SESSION['erroFormulario'] = "Erro ao buscar informações do supervisor.";
        } else {

            $nomeSupervisor = $resultado["nome"];
            if ($nomeSupervisor == NULL) {
                $nomeSupervisor = "";
            }
            $cargoSupervisor = $resultado["cargo"];
            if ($cargoSupervisor == NULL) {
                $cargoSupervisor = "";
            }
            $emailSupervisor = $resultado["email"];
            if ($emailSupervisor == NULL) {
                $emailSupervisor = "";
            }
            $telefoneSupervisor = $resultado["telefone"];
            if ($telefoneSupervisor == NULL) {
                $telefoneSupervisor = "";
            }
            $cpfSupervisor = $resultado["cpf"];
            if ($cpfSupervisor == NULL) {
                $cpfSupervisor = "";
            }
            $cursoFormacaoSupervisor = $resultado["cursoFormacao"];
            if ($cursoFormacaoSupervisor == NULL) {
                $cursoFormacaoSupervisor = "";
            }
            $conselhoClasseSupervisor = $resultado["conselhoClasseProfissional"];
            if ($conselhoClasseSupervisor == NULL) {
                $conselhoClasseSupervisor = "";
            }
            $possuiExperienciaSupervisor = $resultado["possuiExperiencia"];
            if ($possuiExperienciaSupervisor == NULL) {
                $possuiExperienciaSupervisor = "";
            }
        }
    }
    /* close connection */
    $conexao->close();