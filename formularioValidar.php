<?php

session_start();
include_once("conexao.php");

if (!((isset($_SESSION['ra']) && $_SESSION['ra'] != "") && (isset($_SESSION['nome']) && $_SESSION['nome'] != "") && (isset($_SESSION['senha']) && $_SESSION['senha'] != ""))) {
    header("Location: login.php");
} else {

    // Dados do aluno
    $raAluno = $_SESSION['ra'];
    $nomeAluno = $_POST['inputNome'];
    $cpfAluno = $_POST['inputCpf'];
    $rgAluno = $_POST['inputRg'];
    $telefoneAluno = $_POST['inputTelefone'];
    $dataNascimentoAluno = $_POST['inputDataNascimento'];
    $emailAluno = $_POST['inputEmail'];
    $cursoLabel = explode('-', $_POST["selectCurso"]);
    $cursoAluno = $cursoLabel[1];
    $modalidade = $cursoLabel[0];
    $moduloAluno = $_POST['inputAno'];
    $cepAluno = $_POST['inputCep'];
    $enderecoAluno = $_POST['inputEndereco'];
    $numeroAluno = $_POST['inputNumero'];
    $complementoAluno = $_POST['inputComplemento'];
    $bairroAluno = $_POST['inputBairro'];
    $cidadeAluno = $_POST['inputCidade'];
    $estadoAluno = $_POST['selectEstado'];

    $queryPt1 = 'UPDATE alunos SET ' .
        'nome="' . $nomeAluno . '", ' .
        'cpf="' . $cpfAluno . '", ' .
        'rg="' . $rgAluno . '", ' .
        'telefoneCelular="' . $telefoneAluno . '", ' .
        'dataNascimento="' . $dataNascimentoAluno . '", ' .
        'email="' . $emailAluno . '", ' .
        'curso="' . $cursoAluno . '", ' .
        'periodoAno="' . $moduloAluno . '", ' .
        'cep="' . $cepAluno . '", ' .
        'endereco="' . $enderecoAluno . '", ' .
        'numero="' . $numeroAluno . '", ' .
        'bairro="' . $bairroAluno . '", ' .
        'cidade="' . $cidadeAluno . '", ' .
        'uf="' . $estadoAluno . '", ' .
        'modalidade="' . $modalidade . '"';

    if($complementoAluno != '') {
        $queryPt1 = $queryPt1 . ', complemento="' . $complementoAluno . '"';
    }

    $queryPt2 = ' WHERE ra="' . $raAluno . '"';

    $query = $queryPt1 . $queryPt2;

    $_SESSION['rg'] = $rgAluno;
    $_SESSION['cpf'] = $cpfAluno;
    $_SESSION['nome'] = $nomeAluno;
    $_SESSION['cidade'] = $cidadeAluno;
    $_SESSION['uf'] = $estadoAluno;
    $_SESSION['cep'] = $cepAluno;
    $_SESSION['endereco'] = $enderecoAluno;
    $_SESSION['bairro'] = $bairroAluno;
    $_SESSION['numero'] = $numeroAluno;
    $_SESSION['curso'] = $cursoAluno;
    $_SESSION['telefoneCelular'] = $telefoneAluno;
    $_SESSION['email'] = $emailAluno;
    $dataNascimento = date("d/m/Y", strtotime($dataNascimentoAluno));
    $_SESSION['dataNascimento'] = $dataNascimento;
    $_SESSION['periodoAno'] = $moduloAluno;
    $_SESSION['complemento'] = $complementoAluno;

    if (!$conexao->query($query) === TRUE) {
        echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
        echo "Error updating record: " . $conexao->error;
        exit;
    }

    // Dados do orientador
    $nomeOrientador = $_POST['inputNomeOrientador'];
    $telefoneOrientador = $_POST['inputTelefoneOrientador'];
    $emailOrientador = $_POST['inputEmailOrientador'];

    $query = 'SELECT idOrientador FROM orientador';
    if ($resultado = $conexao->query($query)) {
        while($linha = $resultado->fetch_assoc()) {
            if($_SESSION['idOrientador'] != '') {
                if($_SESSION['idOrientador'] == $linha['idOrientador']) {
                    $queryPt1 = 'UPDATE orientador SET ' .
                    'nome="' . $nomeOrientador . '", ' .
                    'email="' . $emailOrientador . '", ' .
                    'telefone="' . $telefoneOrientador . '"';
                    $queryPt2 = ' WHERE idOrientador="' . $_SESSION['idOrientador'] . '"';

                    $query = $queryPt1 . $queryPt2;

                    if (!$conexao->query($query) === TRUE) {
                        echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
                        echo "Error updating record: " . $conexao->error;
                        exit;
                    }
                }
            } else {
                $query1 = "INSERT INTO orientador (nome, email, telefone) VALUES ('$nomeOrientador', '$emailOrientador', '$telefoneOrientador')";
                if (!$conexao->query($query1) === TRUE) {
                    echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
                    echo "Error updating record: " . $conexao->error;
                    exit;
                }
                $_SESSION['idOrientador'] = $conexao->insert_id;
                $query1 = "UPDATE alunos SET idOrientador = ".$_SESSION['idOrientador']." WHERE ra = ".$_SESSION['ra'].""; 
                if (!$conexao->query($query1) === TRUE) {
                    echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
                    echo "Error updating record: " . $conexao->error;
                    exit;
                }
            }
        }
    } if (!$conexao->query($query) === TRUE) {
        echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
        echo "Error updating record: " . $conexao->error;
        exit;
    }

    // Dados da Empresa
    $nomeEmpresa = $_POST['inputNomeEmpresa'];
    $cnpjEmpresa = $_POST['inputCnpj'];
    $emailEmpresa = $_POST['inputEmailEmpresa'];
    $telefoneEmpresa = $_POST['inputTelefoneEmpresa'];
    $cepEmpresa = $_POST['inputCepEmpresa'];
    $enderecoEmpresa = $_POST['inputEnderecoEmpresa'];
    $numeroEmpresa = $_POST['inputNumeroEmpresa'];
    $complementoEmpresa = $_POST['inputComplementoEmpresa'];
    $bairroEmpresa = $_POST['inputBairroEmpresa'];
    $cidadeEmpresa = $_POST['inputCidadeEmpresa'];
    $estadoEmpresa = $_POST['selectEstadoEmpresa'];
    $representanteEmpresa = $_POST['inputNomeRepresentante'];
    $representanteEmpresaCargo = $_POST['inputCargoRepresentante'];
    $responsavelEmpresa = $_POST['inputResponsavelAssTCE'];
    $responsavelEmpresaCargo = $_POST['inputCargoResponsavelAssTCE'];

    $query = 'SELECT idEmpresa FROM concedentes';
    if ($resultado = $conexao->query($query)) {
        while($linha = $resultado->fetch_assoc()) {
            if($_SESSION['idEmpresa'] != '') {
                if($_SESSION['idEmpresa'] == $linha['idEmpresa']) {
                    $queryPt1 = 'UPDATE concedentes SET ' .
                    'nome="' . $nomeEmpresa . '", ' .
                    'cnpjCpf="' . $cnpjEmpresa . '", ' .
                    'endereco="' . $enderecoEmpresa . '", ' .
                    'cep="' . $cepEmpresa . '", ' .
                    'responsavelTceNome="' . $responsavelEmpresa . '", ' .
                    'responsavelTceCargo="' . $responsavelEmpresaCargo . '", ' .
                    'representanteEmpresaNome="' . $representanteEmpresa . '", ' .
                    'representanteEmpresaCargo="' . $representanteEmpresaCargo . '", ' .
                    'email="' . $emailEmpresa . '", ' .
                    'telefone="' . $telefoneEmpresa . '", ' .
                    'uf="' . $estadoEmpresa . '", ' .
                    'cidade="' . $cidadeEmpresa . '", ' .
                    'bairro="' . $bairroEmpresa . '", ' .
                    'numero="' . $numeroEmpresa . '"';

                    if($complementoEmpresa != '') {
                        $queryPt1 = $queryPt1 . ', complemento="' . $complementoEmpresa . '"';
                    }

                    $queryPt2 = ' WHERE idEmpresa="' . $_SESSION['idEmpresa'] . '"';

                    $query2 = $queryPt1 . $queryPt2;

                    if (!$conexao->query($query2) === TRUE) {
                        echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
                        echo "Error updating record: " . $conexao->error;
                        exit;
                    }
                }
            } else {
                $query2 = "INSERT INTO concedentes (nome, cnpjCpf, endereco, cep, responsavelTceNome, responsavelTceCargo,representanteEmpresaNome, representanteEmpresaCargo, email, telefone, uf, cidade, bairro, numero";
                
                if($complementoEmpresa != '') {
                    $query2 = $query2 . ", complemento) VALUES ('$nomeEmpresa', '$cnpjEmpresa', '$enderecoEmpresa', '$cepEmpresa', '$responsavelEmpresa', '$responsavelEmpresaCargo', '$representanteEmpresa', '$representanteEmpresaCargo', '$emailEmpresa', '$telefoneEmpresa', '$estadoEmpresa', '$cidadeEmpresa', '$bairroEmpresa', '$numeroEmpresa', '$complementoEmpresa')";
                } else {
                    $query2 = $query2 . ") VALUES ('$nomeEmpresa', '$cnpjEmpresa', '$enderecoEmpresa', '$cepEmpresa', '$responsavelEmpresa', '$responsavelEmpresaCargo', '$representanteEmpresa', '$representanteEmpresaCargo', '$emailEmpresa', '$telefoneEmpresa', '$estadoEmpresa', '$cidadeEmpresa', '$bairroEmpresa', '$numeroEmpresa')";
                }

                if (!$conexao->query($query2) === TRUE) {
                    echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
                    echo "Error updating record: " . $conexao->error;
                    exit;
                }
                $_SESSION['idEmpresa'] = $conexao->insert_id;
                $query2 = "UPDATE alunos SET idEmpresa = ".$_SESSION['idEmpresa']." WHERE ra = ".$_SESSION['ra'].""; 
                if (!$conexao->query($query2) === TRUE) {
                    echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
                    echo "Error updating record: " . $conexao->error;
                    exit;
                }
            }
        }
    } if (!$conexao->query($query) === TRUE) {
        echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
        echo "Error updating record: " . $conexao->error;
        exit;
    }

    // Dados do Supervisor
    $nomeSupervisor = $_POST['inputNomeSupervisor'];
    $cargoSupervisor = $_POST['inputCargoSupervisor'];
    $emailSupervisor = $_POST['inputEmailSupervisor'];
    $telefoneSupervisor = $_POST['inputTelefoneSupervisor'];
    $cpfSupervisor = $_POST['inputCpfSupervisor'];
    $cursoSupervisor = $_POST['inputCursoSupervisor'];
    $conselhoClasse = $_POST['inputConselhoSupervisor'];
    $possuiExperiencia = $_POST['radioGroupPossuiExperiencia'];

    $query = 'SELECT idSupervisor FROM supervisor';
    if ($resultado = $conexao->query($query)) {
        while($linha = $resultado->fetch_assoc()) {
            if($_SESSION['idSupervisor'] != '') {
                if($_SESSION['idSupervisor'] == $linha['idSupervisor']) {
                    $queryPt1 = 'UPDATE supervisor SET ' .
                    'nome="' . $nomeSupervisor . '", ' .
                    'cpf="' . $cpfSupervisor . '", ' .
                    'email="' . $emailSupervisor . '", ' .
                    'telefone="' . $telefoneSupervisor . '", ' .
                    'possuiExperiencia="' . $possuiExperiencia . '", ' .
                    'cursoFormacao="' . $cursoSupervisor . '", ' .
                    'cargo="' . $cargoSupervisor . '"';

                    if($conselhoClasse != '') {
                        $queryPt1 = $queryPt1 . ', conselhoClasseProfissional="' . $conselhoClasse . '"';
                    }

                    $queryPt2 = ' WHERE idSupervisor="' . $_SESSION['idSupervisor'] . '"';

                    $query3 = $queryPt1 . $queryPt2;

                    if (!$conexao->query($query3) === TRUE) {
                        echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
                        echo "Error updating record: " . $conexao->error;
                        exit;
                    }
                }
            } else {
                $query3 = "INSERT INTO supervisor (nome, cpf, email, telefone, possuiExperiencia, cursoFormacao, cargo";
                
                if($conselhoClasse != '') {
                    $query3 = $query3 . ", conselhoClasseProfissional) VALUES ('$nomeSupervisor', '$cpfSupervisor', '$emailSupervisor', '$telefoneSupervisor', '$possuiExperiencia', '$cursoSupervisor', '$cargoSupervisor', '$conselhoClasse')";
                } else {
                    $query3 = $query3 . ") VALUES ('$nomeSupervisor', '$cpfSupervisor', '$emailSupervisor', '$telefoneSupervisor', '$possuiExperiencia', '$cursoSupervisor', '$cargoSupervisor')";
                }

                if (!$conexao->query($query3) === TRUE) {
                    echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
                    echo "Error updating record: " . $conexao->error;
                    exit;
                }
                $_SESSION['idSupervisor'] = $conexao->insert_id;
                $query3 = "UPDATE alunos SET idSupervisor = ".$_SESSION['idSupervisor']." WHERE ra = ".$_SESSION['ra'].""; 
                if (!$conexao->query($query3) === TRUE) {
                    echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
                    echo "Error updating record: " . $conexao->error;
                    exit;
                }
            }
        }
    } if (!$conexao->query($query) === TRUE) {
        echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
        echo "Error updating record: " . $conexao->error;
        exit;
    }

    // Dados do Estágio
    $tipoEstagio = $_POST['radioGroupEstagio'];
    $valorBolsa = $_POST['inputValorBolsa'];
    $beneficios = "";
    if(isset($_POST['checkboxValeTransporte'])) {
        $beneficios = $_POST['checkboxValeTransporte'];
    }
    if(isset($_POST['checkboxPlanoDeSaude'])) {
        if(empty($beneficios))
            $beneficios = $_POST['checkboxPlanoDeSaude'];
        else
            $beneficios = $beneficios . ", " . $_POST['checkboxPlanoDeSaude'];
    }
    if(isset($_POST['checkboxValeAlimentacao'])) {
        if(empty($beneficios))
            $beneficios = $_POST['checkboxValeAlimentacao'];
        else
            $beneficios = $beneficios . ", " . $_POST['checkboxValeAlimentacao'];
    }
    if(!empty($_POST['inputCargaHorariaMax']))
        $cargaHorariaTotal = $_POST['inputCargaHorariaMax'];
    else
        $cargaHorariaTotal = NULL;
    $tipoCargaHoraria = $_POST['radioGroupCargaHoraria'];
    $tipoCargaDiaria = $_POST['radioGroupCargaDiaria'];
    $dataInicio = $_POST['inputDataInicioEstagio'];
    $dataFim = $_POST['inputDataFimEstagio'];
    if(isset($_POST['checkSegunda'])) {
        $segunda = $_POST['horasSegunda'];
    }
    else
        $segunda = "";
    if(isset($_POST['checkTerca'])) {
        $terca = $_POST['horasTerca'];
    }
    else
        $terca = "";
    if(isset($_POST['checkQuarta'])) {
        $quarta = $_POST['horasQuarta'];
    }
    else
        $quarta = "";
    if(isset($_POST['checkQuinta'])) {
        $quinta = $_POST['horasQuinta'];
    }
    else
        $quinta = "";
    if(isset($_POST['checkSexta'])) {
        $sexta = $_POST['horasSexta'];
    }
    else
        $sexta = "";
    if(isset($_POST['checkSabado'])) {
        $sabado = $_POST['horasSabado'];
    }
    else
        $sabado = "";
    $atividadesDesenvolvidas = $_POST['inputAtividadesDesenvolvidas'];
    $areasConhecimento = $_POST['inputAreasConhecimento'];
    $objetivosAlcancados = $_POST['inputObjetivos'];
    if(isset($_POST['inputCompanhiaSeguro'])) {
        $nomeSeguradora = $_POST['inputCompanhiaSeguro'];
    }
    if(isset($_POST['inputNumeroApolice'])) {
        $numeroApolice = $_POST['inputNumeroApolice'];
    }

   $query = 'SELECT idEstagio FROM estagio';
    if ($resultado = $conexao->query($query)) {
        while($linha = $resultado->fetch_assoc()) {
            if($_SESSION['idEstagio'] != '') {
                if($_SESSION['idEstagio'] == $linha['idEstagio']) {
                    $queryPt1 = 'UPDATE estagio SET ' .
                    'tipoEstagio="' . $tipoEstagio . '", ' .
                    'valorBolsa="' . $valorBolsa . '", ' .
                    'dataInicial="' . $dataInicio . '", ' .
                    'dataFinal="' . $dataFim . '", ' .
                    'segunda="' . $segunda . '", ' .
                    'terca="' . $terca . '", ' .
                    'quarta="' . $quarta . '", ' .
                    'quinta="' . $quinta . '", ' .
                    'sexta="' . $sexta . '", ' .
                    'sabado="' . $sabado . '", ' .
                    'atividadesQueSeraoDesenvolvidas="' . $atividadesDesenvolvidas . '", ' .
                    'areasConhecimento="' . $areasConhecimento . '", ' .
                    'objetivos="' . $objetivosAlcancados . '", ' .
                    'tipoCargaHoraria="' . $tipoCargaHoraria . '", ' .
                    'tipoCargaDiaria="'. $tipoCargaDiaria . '", ' .
                    'cargaHorariaTotal="' . $cargaHorariaTotal . '", ' .
                    'beneficios="' . $beneficios . '"';

                    if(!empty($nomeSeguradora) && !empty($numeroApolice))
                        $queryPt1 = $queryPt1 . ', nomeSeguradora="' . $nomeSeguradora . '"' . ', numeroApolice="' . $numeroApolice . '"';

                    $queryPt2 = ' WHERE idEstagio="' . $_SESSION['idEstagio'] . '"';

                    $query3 = $queryPt1 . $queryPt2;

                    if (!$conexao->query($query3) === TRUE) {
                        echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
                        echo "Error updating record: " . $conexao->error;
                        exit;
                    }
                }
            } else {
                $query3 = "INSERT INTO estagio (tipoEstagio, valorBolsa, dataInicial, dataFinal, segunda, terca, quarta, quinta, sexta, sabado, atividadesQueSeraoDesenvolvidas, areasConhecimento, objetivos, tipoCargaHoraria, tipoCaraDiaria, cargaHorariaTotal, beneficios";
                
                if(!empty($nomeSeguradora) && !empty($numeroApolice)) {
                    $query3 = $query3 . ", nomeSeguradora, numeroApolice) VALUES ('$tipoEstagio', '$valorBolsa', '$dataInicio', '$dataFim', '$segunda', '$terca', '$quarta', '$quinta', '$sexta', '$sabado', '$atividadesDesenvolvidas', '$areasConhecimento', '$objetivosAlcancados', '$tipoCargaHoraria', '$tipoCargaDiaria', $cargaHorariaTotal', '$beneficios', '$nomeSeguradora', '$numeroApolice')";
                } else {
                    $query3 = $query3 . ") VALUES ('$tipoEstagio', '$valorBolsa', '$dataInicio', '$dataFim', '$segunda', '$terca', '$quarta', '$quinta', '$sexta', '$sabado', '$atividadesDesenvolvidas', '$areasConhecimento', '$objetivosAlcancados', '$tipoCargaHoraria', '$tipoCargaDiaria', '$cargaHorariaTotal', '$beneficios')";
                }

                if (!$conexao->query($query3) === TRUE) {
                    echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
                    echo "Error updating record: " . $conexao->error;
                    exit;
                }
                $_SESSION['idEstagio'] = $conexao->insert_id;
                $query3 = "UPDATE alunos SET idEstagio = ".$_SESSION['idEstagio']." WHERE ra = ".$_SESSION['ra'].""; 
                if (!$conexao->query($query3) === TRUE) {
                    echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
                    echo "Error updating record: " . $conexao->error;
                    exit;
                }
            }
        }
    }

    if (!$conexao->query($query) === TRUE) {
        echo "Ops, parece que ocorreu um erro! Por favor, contate o administrador.<br />";
        echo "Error updating record: " . $conexao->error;
        exit;
    } else {
        header("Location: home.php");
    }

    $conexao->close();
}