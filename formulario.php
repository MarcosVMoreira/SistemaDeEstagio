<?php
session_start();

$test = false; // Definir como true para rodar os testes

if (!((isset($_SESSION['ra']) && $_SESSION['ra'] != "") && (isset($_SESSION['nome']) && $_SESSION['nome'] != "") && (isset($_SESSION['senha']) && $_SESSION['senha'] != ""))) {
    header("Location: login.php");
} else {
    include("header.php");

    include_once("conexao.php");

    /* ja peguei todos os valores do banco de dados. Agora é setar eles
    nos seus respectivos campos quando a página for aberta */

    $query = "SELECT * FROM alunos WHERE ra='".$_SESSION['ra']."'";

    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();
        
        if (empty($resultado)) {
            $_SESSION['loginErro'] = "Erro ao buscar informações de aluno.";
        } else {
            $nome = $resultado["nome"];
            if ($nome == NULL) {
                $nome = "";
            }
            $cpf = $resultado["cpf"];
            if ($cpf == NULL) {
                $cpf = "";
            }
            $rg = $resultado["rg"];
            if ($rg == NULL) {
                $rg = "";
            }
            $telefoneCelular = $resultado["telefoneCelular"];
            if ($telefoneCelular == NULL) {
                $telefoneCelular = "";
            }
            $dataNascimento = $resultado["dataNascimento"];
            if ($dataNascimento == NULL) {
                $dataNascimento = "";
            }
            $email = $resultado["email"];
            if ($email == NULL) {
                $email = "";
            }
            $ra =  $resultado["ra"];
            if ($ra == NULL) {
                $ra = "";
            }
            $curso = $resultado["curso"];
            if ($curso == NULL) {
                $curso = "";
            }
            $periodoAno = $resultado["periodoAno"];
            if ($periodoAno == NULL) {
                $periodoAno = "";
            }
            $cep = $resultado["cep"];
            if ($cep == NULL) {
                $cep = "";
            }
            $endereco = $resultado["endereco"];
            if ($endereco == NULL) {
                $endereco = "";
            }
            $numero = $resultado["numero"];
            if ($numero == NULL) {
                $numero = "";
            }
            $complemento = $resultado["complemento"];
            if ($complemento == NULL) {
                $complemento = "";
            }
            $bairro = $resultado["bairro"];
            if ($bairro == NULL) {
                $bairro = "";
            }
            $cidade = $resultado["cidade"];
            if ($cidade == NULL) {
                $cidade = "";
            }
            $uf = $resultado["uf"];
            if ($uf == NULL) {
                $uf = "";
            }
        }
    }

    $query = "SELECT * FROM orientador WHERE idOrientador='".$_SESSION['idOrientador']."'";

    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();
        
        if (empty($resultado)) {
            $_SESSION['loginErro'] = "Erro ao buscar informações de orientador.";
        } else {

            $nomeOrientador = $resultado["nome"];
            if ($nomeOrientador == NULL) {
                $nomeOrientador = "";
            }
            $emailOrientador = $resultado["email"];
            if ($emailOrientador == NULL) {
                $emailOrientador = "";
            }
            $telefoneOrientador = $resultado["telefone"];
            if ($telefoneOrientador == NULL) {
                $telefoneOrientador = "";
            }

        }
    }

    $query = "SELECT * FROM concendentes WHERE idEmpresa='".$_SESSION['idEmpresa']."'";

    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();
        
        if (empty($resultado)) {
            $_SESSION['loginErro'] = "Erro ao buscar informações de concedentes.";
        } else {

            $nomeEmpresa = $resultado["nome"];
            if ($nomeEmpresa == NULL) {
                $nomeEmpresa = "";
            }
            $cnpjEmpresa = $resultado["cnpjCpf"];
            if ($cnpjEmpresa == NULL) {
                $cnpjEmpresa = "";
            }
            $emailEmpresa = $resultado["email"];
            if ($emailEmpresa == NULL) {
                $emailEmpresa = "";
            }
            $cepEmpresa = $resultado["cep"];
            if ($cepEmpresa == NULL) {
                $cepEmpresa = "";
            }
            $enderecoEmpresa = $resultado["endereco"];
            if ($enderecoEmpresa == NULL) {
                $enderecoEmpresa = "";
            }
            $numeroEmpresa = $resultado["numero"];
            if ($numeroEmpresa == NULL) {
                $numeroEmpresa = "";
            }
            $complementoEmpresa = $resultado["numero"];
            if ($complementoEmpresa == NULL) {
                $complementoEmpresa = "";
            }
            $bairroEmpresa = $resultado["numero"];
            if ($bairroEmpresa == NULL) {
                $bairroEmpresa = "";
            }
            $cidadeEmpresa = $resultado["numero"];
            if ($cidadeEmpresa == NULL) {
                $cidadeEmpresa = "";
            }
            $estadoEmpresa = $resultado["numero"];
            if ($estadoEmpresa == NULL) {
                $estadoEmpresa = "";
            }
            $representanteEmpresa = $resultado["numero"];
            if ($representanteEmpresa == NULL) {
                $representanteEmpresa = "";
            }
            $cargoEmpresa = $resultado["numero"];
            if ($cargoEmpresa == NULL) {
                $cargoEmpresa = "";
            }
            $responsavelEmpresa = $resultado["numero"];
            if ($responsavelEmpresa == NULL) {
                $responsavelEmpresa = "";
            }
            $cargoEmpresa = $resultado["numero"];
            if ($cargoEmpresa == NULL) {
                $cargoEmpresa = "";
            }
        }
    }


    $query = "SELECT * FROM concendentes WHERE idEmpresa='".$_SESSION['idEmpresa']."'";

    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();
        
        if (empty($resultado)) {
            $_SESSION['loginErro'] = "Erro ao buscar informações de concedentes.";
        } else {

            $nomeEmpresa = $resultado["nome"];
            if ($nomeEmpresa == NULL) {
                $nomeEmpresa = "";
            }
            $cnpjEmpresa = $resultado["cnpjCpf"];
            if ($cnpjEmpresa == NULL) {
                $cnpjEmpresa = "";
            }
            $emailEmpresa = $resultado["email"];
            if ($emailEmpresa == NULL) {
                $emailEmpresa = "";
            }
            $cepEmpresa = $resultado["cep"];
            if ($cepEmpresa == NULL) {
                $cepEmpresa = "";
            }
            $enderecoEmpresa = $resultado["endereco"];
            if ($enderecoEmpresa == NULL) {
                $enderecoEmpresa = "";
            }
            $numeroEmpresa = $resultado["numero"];
            if ($numeroEmpresa == NULL) {
                $numeroEmpresa = "";
            }
            $complementoEmpresa = $resultado["complemento"];
            if ($complementoEmpresa == NULL) {
                $complementoEmpresa = "";
            }
            $bairroEmpresa = $resultado["bairro"];
            if ($bairroEmpresa == NULL) {
                $bairroEmpresa = "";
            }
            $cidadeEmpresa = $resultado["cidade"];
            if ($cidadeEmpresa == NULL) {
                $cidadeEmpresa = "";
            }
            $estadoEmpresa = $resultado["uf"];
            if ($estadoEmpresa == NULL) {
                $estadoEmpresa = "";
            }
            $representanteEmpresa = $resultado["representanteEmpresaNome"];
            if ($representanteEmpresa == NULL) {
                $representanteEmpresa = "";
            }
            $cargorepresentanteEmpresa = $resultado["representanteEmpresaCargo"];
            if ($cargorepresentanteEmpresa == NULL) {
                $cargorepresentanteEmpresa = "";
            }
            $responsavelEmpresa = $resultado["responsavelTceNome"];
            if ($responsavelEmpresa == NULL) {
                $responsavelEmpresa = "";
            }
            $cargoResponsavelEmpresa = $resultado["responsavelTceCargo"];
            if ($cargoResponsavelEmpresa == NULL) {
                $cargoResponsavelEmpresa = "";
            }
        }
    }

    $query = "SELECT * FROM supervisor WHERE idSupervisor='".$_SESSION['idSupervisor']."'";

    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();
        
        if (empty($resultado)) {
            $_SESSION['loginErro'] = "Erro ao buscar informações de concedentes.";
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


    $query = "SELECT * FROM estagio WHERE idEstagio='".$_SESSION['idEstagio']."'";

    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();
        
        if (empty($resultado)) {
            $_SESSION['loginErro'] = "Erro ao buscar informações de estágio.";
        } else {

            $tipoEstagio = $resultado["tipoEstagio"];
            if ($nomeSupervisor == NULL) {
                $nomeSupervisor = "";
            }
            $valorBolsaEstagio = $resultado["valorBolsa"];
            if ($cargoSupervisor == NULL) {
                $cargoSupervisor = "";
            }
            $beneficiosEstagio = $resultado["beneficios"];
            if ($emailSupervisor == NULL) {
                $emailSupervisor = "";
            }
            $cargaHorariaTotalEstagio = $resultado["cargaHorariaTotal"];
            if ($telefoneSupervisor == NULL) {
                $telefoneSupervisor = "";
            }
            $tipoCargaHorariaEstagio = $resultado["tipoCargaHoraria"];
            if ($cpfSupervisor == NULL) {
                $cpfSupervisor = "";
            }
            $dataInicioEstagio = $resultado["dataInicial"];
            if ($cursoFormacaoSupervisor == NULL) {
                $cursoFormacaoSupervisor = "";
            }
            $dataTerminoEstagio = $resultado["dataFinal"];
            if ($conselhoClasseSupervisor == NULL) {
                $conselhoClasseSupervisor = "";
            }
            $segundaEstagio = $resultado["segunda"];
            if ($possuiExperienciaSupervisor == NULL) {
                $possuiExperienciaSupervisor = "";
            }
            $tercaEstagio = $resultado["terca"];
            if ($possuiExperienciaSupervisor == NULL) {
                $possuiExperienciaSupervisor = "";
            }
            $quartaEstagio = $resultado["quarta"];
            if ($possuiExperienciaSupervisor == NULL) {
                $possuiExperienciaSupervisor = "";
            }
            $quintaEstagio = $resultado["quinta"];
            if ($possuiExperienciaSupervisor == NULL) {
                $possuiExperienciaSupervisor = "";
            }
            $sextaEstagio = $resultado["sexta"];
            if ($possuiExperienciaSupervisor == NULL) {
                $possuiExperienciaSupervisor = "";
            }
            $sabadoEstagio = $resultado["sabado"];
            if ($possuiExperienciaSupervisor == NULL) {
                $possuiExperienciaSupervisor = "";
            }
            $atividadesASeremDesenvolvidasEstagio = $resultado["nomeSeguradora"];
            if ($possuiExperienciaSupervisor == NULL) {
                $possuiExperienciaSupervisor = "";
            }
            $areasConhecimentoEstagio = $resultado["areasConhecimento"];
            if ($possuiExperienciaSupervisor == NULL) {
                $possuiExperienciaSupervisor = "";
            }
            $objetivosAlcancadosEstagio = $resultado["objetivos"];
            if ($possuiExperienciaSupervisor == NULL) {
                $possuiExperienciaSupervisor = "";
            }
            $companhiaSeguroEstagio = $resultado["nomeSeguradora"];
            if ($possuiExperienciaSupervisor == NULL) {
                $possuiExperienciaSupervisor = "";
            }
            $numeroApoliceEstagio = $resultado["numeroApolice"];
            if ($possuiExperienciaSupervisor == NULL) {
                $possuiExperienciaSupervisor = "";
            }
        }
    }


    /* close connection */
    $conexao->close();

    ?>

    <!-- CSS do Formulário -->
    <link rel="stylesheet" href="css/formulario.css">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <form id="formCadastro" method="post" action="formularioValidar.php">
                    <div class="card">
                        <div class="card-header">
                            Dados do aluno
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputNome">Nome completo</label>
                                        <input type="text" class="form-control" name="inputNome" value="<?php echo($nome);?>"id="inputNome" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCpf">CPF</label>
                                        <input type="text" class="form-control" name="inputCpf" id="inputCpf" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputRg">RG</label>
                                        <input type="text" class="form-control" name="inputRg" id="inputRg" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputTelefone">Telefone celular</label>
                                        <input type="text" class="form-control" name="inputTelefone" id="inputTelefone" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputDataNascimento">Data de nascimento</label>
                                        <input type="date" class="form-control" name="inputDataNascimento" id="inputDataNascimento" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputEmail">Email</label>
                                        <input type="email" class="form-control" name="inputEmail" id="inputEmail" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputRA">Matrícula (R.A.)</label>
                                        <input type="text" class="form-control" name="inputRA" id="inputRA" disabled>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="selectCurso">Curso</label>
                                        <select class="form-control" name="selectCurso" id="selectCurso" required>
                                        <optgroup label="Técnicos Integrados">
                                            <option value="Técnicos Integrados-Técnico em Informática">Técnico em Informática</option>
                                            <option value="Técnicos Integrados-Técnico em Eletrotécnica">Técnico em Eletrotécnica</option>
                                        </optgroup>
                                        <optgroup label="Técnicos Subsequentes">
                                            <option value="Técnicos Subsequentes-Técnico em Administração">Técnico em Administração</option>
                                            <option value="Técnicos Subsequentes-Técnico em Edificações">Técnico em Edificações</option>
                                            <option value="Técnicos Subsequentes-Técnico em Eletrotécnica">Técnico em Eletrotécnica</option>
                                        </optgroup>
                                        <optgroup label="Superiores">
                                            <option value="Superiores-Ciências Biológicas">Ciências Biológicas</option>
                                            <option value="Superiores-Engenharia de Computação">Engenharia de Computação</option>
                                            <option value="Superiores-Geografia">Geografia</option>
                                            <option value="Superiores-Gestão Ambiental">Gestão Ambiental</option>
                                            <option value="Superiores-Gestão Comercial">Gestão Comercial</option>
                                        </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputAno">Módulo/Ano</label>
                                        <input type="text" class="form-control" name="inputAno" id="inputAno" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCep">CEP</label>
                                        <input type="text" class="form-control" name="inputCep" id="inputCep" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputEndereco">Endereço</label>
                                        <input type="text" class="form-control" name="inputEndereco" id="inputEndereco" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputNumero">Número</label>
                                        <input type="text" class="form-control" name="inputNumero" id="inputNumero" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputComplemento">Complemento</label>
                                        <input type="text" class="form-control" name="inputComplemento" id="inputComplemento">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputBairro">Bairro</label>
                                        <input type="text" class="form-control" name="inputBairro" id="inputBairro" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputCidade">Cidade</label>
                                        <input type="text" class="form-control" name="inputCidade" id="inputCidade" required>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-2">
                                    <div class="form-group">
                                        <label for="selectEstado">Estado</label>
                                        <select class="form-control" name="selectEstado" required>
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AP">AP</option>
                                            <option value="AM">AM</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MT">MT</option>
                                            <option value="MS">MS</option>
                                            <option selected value="MG">MG</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PR">PR</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RS">RS</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="SC">SC</option>
                                            <option value="SP">SP</option>
                                            <option value="SE">SE</option>
                                            <option value="TO">TO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Dados do orientador do estágio
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputNomeOrientador">Nome completo</label>
                                        <input type="text" class="form-control" name="inputNomeOrientador" id="inputNomeOrientador" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputTelefoneOrientador">Telefone</label>
                                        <input type="text" class="form-control" name="inputTelefoneOrientador" id="inputTelefoneOrientador" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputEmailOrientador">Email</label>
                                        <input type="email" class="form-control" name="inputEmailOrientador" id="inputEmailOrientador" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Dados da empresa
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputNomeEmpresa">Nome da empresa</label>
                                        <input type="text" class="form-control" name="inputNomeEmpresa" id="inputNomeEmpresa" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCnpj">CNPJ</label>
                                        <input type="text" class="form-control" name="inputCnpj" id="inputCnpj" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputEmailEmpresa">Email</label>
                                        <input type="email" class="form-control" name="inputEmailEmpresa" id="inputEmailEmpresa" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputTelefoneEmpresa">Telefone</label>
                                        <input type="text" class="form-control" name="inputTelefoneEmpresa" id="inputTelefoneEmpresa" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCepEmpresa">CEP</label>
                                        <input type="text" class="form-control" name="inputCepEmpresa" id="inputCepEmpresa" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputEnderecoEmpresa">Endereço</label>
                                        <input type="text" class="form-control" name="inputEnderecoEmpresa" id="inputEnderecoEmpresa" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputNumeroEmpresa">Número</label>
                                        <input type="text" class="form-control" name="inputNumeroEmpresa" id="inputNumeroEmpresa" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputComplementoEmpresa">Complemento</label>
                                        <input type="text" class="form-control" name="inputComplementoEmpresa" id="inputComplementoEmpresa">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputBairroEmpresa">Bairro</label>
                                        <input type="text" class="form-control" name="inputBairroEmpresa" id="inputBairroEmpresa" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputCidadeEmpresa">Cidade</label>
                                        <input type="text" class="form-control" name="inputCidadeEmpresa" id="inputCidadeEmpresa" required>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-2">
                                    <div class="form-group">
                                        <label for="selectEstadoEmpresa">Estado</label>
                                        <select class="form-control" name="selectEstadoEmpresa" required>
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AP">AP</option>
                                            <option value="AM">AM</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MT">MT</option>
                                            <option value="MS">MS</option>
                                            <option selected  value="MG">MG</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PR">PR</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RS">RS</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="SC">SC</option>
                                            <option value="SP">SP</option>
                                            <option value="SE">SE</option>
                                            <option value="TO">TO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputNomeRepresentante">Representante</label>
                                        <input type="text" class="form-control" name="inputNomeRepresentante" id="inputNomeRepresentante" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCargoRepresentante">Cargo</label>
                                        <input type="text" class="form-control" name="inputCargoRepresentante" id="inputCargoRepresentante" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputResponsavelAssTCE">Responsável pela assinatura do termo de compromisso</label>
                                        <input type="text" class="form-control" name="inputResponsavelAssTCE" id="inputResponsavelAssTCE" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCargoResponsavelAssTCE">Cargo</label>
                                        <input type="text" class="form-control" name="inputCargoResponsavelAssTCE" id="inputCargoResponsavelAssTCE" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Dados do supervisor de estágio
                        </div>
                        <div class="card-body">

                            <div class="form-row">
                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputNomeSupervisor">Nome completo</label>
                                        <input type="text" class="form-control" name="inputNomeSupervisor" id="inputNomeSupervisor" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCargoSupervisor">Cargo</label>
                                        <input type="text" class="form-control" name="inputCargoSupervisor" id="inputCargoSupervisor" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputEmailSupervisor">Email</label>
                                        <input type="email" class="form-control" name="inputEmailSupervisor" id="inputEmailSupervisor" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputTelefoneSupervisor">Telefone</label>
                                        <input type="text" class="form-control" name="inputTelefoneSupervisor" id="inputTelefoneSupervisor" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCpfSupervisor">CPF</label>
                                        <input type="text" class="form-control" name="inputCpfSupervisor" id="inputCpfSupervisor" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCursoSupervisor">Curso de formação</label>
                                        <input type="text" class="form-control" name="inputCursoSupervisor" id="inputCursoSupervisor" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputConselhoSupervisor">Conselho de Classe Profissional</label>
                                        <input type="text" class="form-control" name = "inputConselhoSupervisor" id="inputConselhoSupervisor" placeholder="(opcional)">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="radioGroupPossuiExperiencia">O(A) supervisor(a) de estágio possui experiência profissional na área do estágio?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radioGroupPossuiExperiencia" id="radioPossuiExperiencia" checked>
                                            <label class="form-check-label" for="inlineRadio1">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radioGroupPossuiExperiencia" id="radioNaoPossuiExperiencia">
                                            <label class="form-check-label" for="inlineRadio2">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Dados do estágio
                        </div>
                        <div class="card-body">



                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="radioGroupPossuiExperiencia">Tipo de estágio</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group" id="divRemunerado">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radioGroupEstagio" id="radioNaoRemunerado" checked>
                                            <label class="form-check-label" for="radioNaoRemunerado">Estágio obrigatório</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radioGroupEstagio" id="radioRemunerado" >
                                            <label class="form-check-label" for="radioRemunerado">Estágio não obrigatório</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="inputValorBolsa">Valor da Bolsa</label>
                                        <input type="text" class="form-control" name="inputValorBolsa" id="inputValorBolsa">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-9">
                                    <label for="inputBeneficios">Benefícios</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="checkboxValeTransporte" id="checkboxValeTransporte">
                                            <label class="form-check-label" for="checkboxValeTransporte">
                                                Vale Transporte
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="checkboxPlanoDeSaude" id="checkboxPlanoDeSaude">
                                            <label class="form-check-label" for="checkboxPlanoDeSaude">
                                                Plano de Saúde
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="checkboxValeAlimentacao" id="checkboxValeAlimentacao">
                                            <label class="form-check-label" for="checkboxValeAlimentacao">
                                                Vale Alimentação
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="inputCargaHorariaMax">Carga horária total</label>
                                        <input type="text" class="form-control" name="inputCargaHorariaMax" id="inputCargaHorariaMax">
                                        <small class="help-block text-muted"><a href="https://www.google.com/" target="_blank">Consulte aqui</a></small>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <label for="radioGroupCargaHoraria">Tipo de carga horária</label>
                                    <div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="radioGroupCargaHoraria" id="radioFixa" checked>
                                                    <label class="form-check-label" for="radioFixa">Carga horária fixa</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="radioGroupCargaHoraria" id="radioVariavel">
                                                    <label class="form-check-label" for="radioVariavel">Carga horária variável</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="inputDataInicioEstagio">Data de início</label>
                                        <input type="date" class="form-control" name="inputDataInicioEstagio" id="inputDataInicioEstagio" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="inputDataFimEstagio">Data de término</label>
                                        <input type="date" class="form-control" name="inputDataFimEstagio" id="inputDataFimEstagio" required>
                                    </div>
                                </div>
                            </div>



                            <div class="form-row col-sm-12 col-md-12" id="campoCargaHoraria">

                                <div class="col-sm-12 col-md-3" id="divDiasTrabalhados">
                                    <div class="row">Dias trabalhados</div>
                                    <div class="form-check" style="margin-bottom: 10px; margin-top: 10px;">
                                        <input class="form-check-input" type="checkbox" value="" name="checkSegunda" id="checkSegunda">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Segunda-feira
                                        </label>
                                    </div>
                                    <div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">
                                        <input class="form-check-input" type="checkbox" value="" name="checkTerca" id="checkTerca">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Terça-feira
                                        </label>
                                    </div>
                                    <div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">
                                        <input class="form-check-input" type="checkbox" value="" name="checkQuarta" id="checkQuarta">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Quarta-feira
                                        </label>
                                    </div>
                                    <div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">
                                        <input class="form-check-input" type="checkbox" value="" name="checkQuinta" id="checkQuinta">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Quinta-feira
                                        </label>
                                    </div>
                                    <div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">
                                        <input class="form-check-input" type="checkbox" value="" name="checkSexta" id="checkSexta">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Sexta-feira
                                        </label>
                                    </div>
                                    <div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">
                                        <input class="form-check-input" type="checkbox" value="" name="checkSabado" id="checkSabado">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Sábado
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-2" id="divHorasTrabalhadas">
                                    <div class="row">Horas trabalhadas</div>
                                    <div id="horarioEntrada">
                                        <div class="form-group">
                                            <input type="time" class="form-control" name="horasSegunda" id="horasSegunda" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="time" class="form-control" name="horasTerca" id="horasTerca" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="time" class="form-control" name="horasQuarta" id="horasQuarta" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="time" class="form-control" name="horasQuinta" id="horasQuinta" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="time" class="form-control" name="horasSexta" id="horasSexta" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="time" class="form-control" name="horasSabado" id="horasSabado" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div id="divSeguro1" class="form-row">

                            </div>

                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputAtividadesDesenvolvidas">Atividades a serem desenvolvidas no estágio</label>
                                        <textarea class="form-control" name="inputAtividadesDesenvolvidas" id="inputAtividadesDesenvolvidas" rows="3" maxlength="500" required></textarea>
                                        <small id="maxcaracter" class="form-text text-muted">
                                            Máximo 500 caracteres.
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputAreasConhecimento">Áreas de conhecimento envolvidas no estágio</label>
                                        <textarea class="form-control" name="inputAreasConhecimento" id="inputAreasConhecimento" rows="2" maxlength="500" required></textarea>
                                        <small id="maxcaracter" class="form-text text-muted">
                                            Máximo 500 caracteres.
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputObjetivos">Objetivos a serem alcançados no estágio</label>
                                        <textarea class="form-control" name="inputObjetivos" id="inputObjetivos" rows="3" maxlength="500" required></textarea>
                                        <small id="maxcaracter" class="form-text text-muted">
                                            Máximo 500 caracteres.
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-4 offset-md-4">
                            <button class="btn btn-success" type="submit" id="botaoConfirmar">Confirmar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JS das máscaras -->
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="js/formulario.js"></script>


<?php
}
include("footer.html");
?>