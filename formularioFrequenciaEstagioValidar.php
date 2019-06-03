<?php /** @noinspection ALL */

session_start();
include_once("conexao.php");

if (!((isset($_SESSION['ra']) && $_SESSION['ra'] != "") && (isset($_SESSION['nome']) && $_SESSION['nome'] != "") && (isset($_SESSION['senha']) && $_SESSION['senha'] != ""))) {
    header("Location: login.php");
} else {
    // Dados do aluno
    $raAluno = $_SESSION['ra'];
    $idEstagio = $_SESSION['idEstagio'];
    $qtdLinhas = $_POST['qtdLinhas'];
    $cargaHorariaTotal = $_POST['CargaHorariaTotal'];

    //caso tipo de estagio seja n obrigaorio salva o valor da carga horaria total de frequencia de estagio.
    $query = "SELECT * FROM estagio WHERE idEstagio='" . $idEstagio . "'";
    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();
        
            if ($resultado["tipoEstagio"] == "Estágio não Obrigatório") { 
                echo "oi";
                $query2 = "UPDATE estagio SET cargaHorariaTotal='" . $cargaHorariaTotal . "' WHERE idEstagio='" . $idEstagio . "'";
                $conexao->query($query2);
            } 
    }
    
    $query = "SELECT data FROM frequenciaestagio WHERE raAluno='" . $raAluno . "'";

    for ($i = 0; $i < $qtdLinhas; $i++) {
        // Percorrendo todos os campos para verificar se algum já está no banco.

        $data = $_POST['inputData' . $i];

        if ($resultado = $conexao->query($query)) {
            $flag = 0;

            while ($linha = $resultado->fetch_assoc()) {
                if ($data == $linha['data']) {
                    /* Se a data do campo que está sendo verificado for igual a alguma data contida no banco relacionada ao RA da session,
                    * então o registro do banco deverá ser atualizado.
                    */
                    $flag = 1;
                }
            }

            $cargaHoraria = $_POST['inputCargaHoraria' . $i];
            $setor = $_POST['inputSetor' . $i];
            $atividade = $_POST['inputAtividade' . $i];

            if ($flag != 1) {
                /* Nenhuma data contida no banco relacionada ao RA da session é igual à data do campo que está sendo verificado,
                * portanto deve-se inserir o registro no banco.
                */

                if ($setor != '') {
                    $query2 = "INSERT INTO frequenciaestagio (raAluno, data, cargaHoraria, setor, atividade) VALUES ('$raAluno', '$data',
                        '$cargaHoraria', '$setor', '$atividade')";
                } else {
                    $query2 = "INSERT INTO frequenciaestagio (raAluno, data, cargaHoraria, atividade) VALUES ('$raAluno', '$data',
                        '$cargaHoraria', '$atividade')";
                }

                if (!$conexao->query($query2) === TRUE) {

                    echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador. (1)<br />";
                    echo "Error updating record: " . $conexao->error;
                    exit;
                }
            } else {
                /* Foi encontrada uma data no banco relacionada ao RA da session igual à data do campo que está sendo verificado,
                * portanto o registro do banco deve ser atualizado.
                */

                if ($setor != '') {
                    $query2 = "UPDATE frequenciaestagio SET cargaHoraria='" . $cargaHoraria . "', setor='" . $setor . "', atividade='" . $atividade . "' WHERE raAluno='" . $raAluno . "' AND data='" .$data. "'";
                } else {
                    $query2 = "UPDATE frequenciaestagio SET cargaHoraria='" . $cargaHoraria . "', atividade='" . $atividade . "' WHERE raAluno='" . $raAluno . "' AND data='" .$data. "'";
                }

                if (!$conexao->query($query2) === TRUE) {
                    echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador. (2)<br />";
                    echo "Error updating record: " . $conexao->error;
                    exit;
                }

            }
        } else {
            echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador. (3)<br />";
            echo "Error updating record: " . $conexao->error;
            exit;
        }
    }

    $conexao->close();
}
?>
