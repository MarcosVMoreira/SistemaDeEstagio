<?php

session_start();
include_once("../conexao.php");

$query = "SELECT * FROM frequenciaestagio WHERE raAluno='" . $_SESSION['ra'] . "'";
    
$data = array();

$contador = 1;

if ($result = $conexao->query($query)) {
    while ($resultado = $result->fetch_assoc()) {
        if (empty($resultado)) {
            echo "-1";
        } else {

            $data = array_merge($data, array("data".$contador=>$resultado['data'], 
            "cargaHoraria".$contador=>$resultado['cargaHoraria'], "setor".$contador=>$resultado['setor'],
                "atividade".$contador=>$resultado['atividade']));   

        }
        $contador++;
    }
} 

$data = array_merge($data, array("quantidadeRegistros"=>($contador-1))); 

/*retorno as linhas da frequencia de estágio no formato JSon onde as chaves seguem o padrão dataX, 
cargaHorariaX, setorX e atividadeX onde X vai de 1 até o número de linhas presente referente aquele
aluno*/

echo json_encode($data);

?>
