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
            $_SESSION['erroFormulario'] = "Erro ao buscar informações de aluno.";
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
            $modalidade = $resultado["modalidade"];
            if ($modalidade == NULL) {
                $modalidade = "";
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
            $_SESSION['erroFormulario'] = "Erro ao buscar informações de orientador.";
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

    $query = "SELECT * FROM concedentes WHERE idEmpresa='".$_SESSION['idEmpresa']."'";

    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();
        
        if (empty($resultado)) {
            $_SESSION['erroFormulario'] = "Erro ao buscar informações do Concedente.";
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
            $telefoneEmpresa = $resultado["telefone"];
            if ($telefoneEmpresa == NULL){
                $telefoneEmpresa = "";
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
            $cargoEmpresa = $resultado["representanteEmpresaCargo"];
            if ($cargoEmpresa == NULL) {
                $cargoEmpresa = "";
            }
            $responsavelEmpresa = $resultado["responsavelTceNome"];
            if ($responsavelEmpresa == NULL) {
                $responsavelEmpresa = "";
            }
            $tceCargoEmpresa = $resultado["responsavelTceCargo"];
            if ($tceCargoEmpresa == NULL) {
                $tceCargoEmpresa = "";
            }
        }
    }



    $query = "SELECT * FROM supervisor WHERE idSupervisor='".$_SESSION['idSupervisor']."'";
    echo $_SESSION['idSupervisor'];
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


    $query = "SELECT * FROM estagio WHERE idEstagio='".$_SESSION['idEstagio']."'";

    if ($result = $conexao->query($query)) {
        $resultado = $result->fetch_assoc();
        
        if (empty($resultado)) {
            $_SESSION['fomularioErro'] = "Erro ao buscar informações de estágio.";
        } else {

            $tipoEstagio = $resultado["tipoEstagio"];
            if ($tipoEstagio == NULL) {
                $tipoEstagio = "";
            }
            $valorBolsaEstagio = $resultado["valorBolsa"];
            if ($valorBolsaEstagio == NULL) {
                $valorBolsaEstagio = "";
            }
            $beneficiosEstagio = $resultado["beneficios"];
            if ($beneficiosEstagio == NULL) {
                $beneficiosEstagio = "";
            }
            $cargaHorariaTotalEstagio = $resultado["cargaHorariaTotal"];
            if ($cargaHorariaTotalEstagio == NULL) {
                $cargaHorariaTotalEstagio = "";
            }
            $tipoCargaHorariaEstagio = $resultado["tipoCargaHoraria"];
            if ($tipoCargaHorariaEstagio == NULL) {
                $tipoCargaHorariaEstagio = "";
            }
            $tipoCargaDiariaEstagio = $resultado["tipoCargaDiaria"];
            if ($tipoCargaDiariaEstagio == NULL) {
                $tipoCargaDiariaEstagio = "";
            }
            $dataInicioEstagio = $resultado["dataInicial"];
            if ($dataInicioEstagio == NULL) {
                $dataInicioEstagio = "";
            }
            $dataTerminoEstagio = $resultado["dataFinal"];
            if ($dataTerminoEstagio == NULL) {
                $dataTerminoEstagio = "";
            }
            $segundaEstagio = $resultado["segunda"];
            if ($segundaEstagio == NULL) {
                $segundaEstagio = "";
            }
            $tercaEstagio = $resultado["terca"];
            if ($tercaEstagio == NULL) {
                $tercaEstagio = "";
            }
            $quartaEstagio = $resultado["quarta"];
            if ($quartaEstagio == NULL) {
                $quartaEstagio = "";
            }
            $quintaEstagio = $resultado["quinta"];
            if ($quintaEstagio == NULL) {
                $quintaEstagio = "";
            }
            $sextaEstagio = $resultado["sexta"];
            if ($sextaEstagio == NULL) {
                $sextaEstagio = "";
            }
            $sabadoEstagio = $resultado["sabado"];
            if ($sabadoEstagio == NULL) {
                $sabadoEstagio = "";
            }
            $atividadesASeremDesenvolvidasEstagio = $resultado["nomeSeguradora"];
            if ($atividadesASeremDesenvolvidasEstagio == NULL) {
                $atividadesASeremDesenvolvidasEstagio = "";
            }
            $areasConhecimentoEstagio = $resultado["areasConhecimento"];
            if ($areasConhecimentoEstagio == NULL) {
                $areasConhecimentoEstagio = "";
            }
            $objetivosAlcancadosEstagio = $resultado["objetivos"];
            if ($objetivosAlcancadosEstagio == NULL) {
                $objetivosAlcancadosEstagio = "";
            }
            $companhiaSeguroEstagio = $resultado["nomeSeguradora"];
            if ($companhiaSeguroEstagio == NULL) {
                $companhiaSeguroEstagio = "";
            }
            $numeroApoliceEstagio = $resultado["numeroApolice"];
            if ($numeroApoliceEstagio == NULL) {
                $numeroApoliceEstagio = "";
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
                                        <input type="text" class="form-control" name="inputNome" value="<?php echo($nome);?>" id="inputNome" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCpf">CPF</label>
                                        <input type="text" class="form-control" name="inputCpf" value="<?php echo($cpf);?>" id="inputCpf" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputRg">RG</label>
                                        <input type="text" class="form-control" name="inputRg" value="<?php echo($rg);?>" id="inputRg" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputTelefone">Telefone celular</label>
                                        <input type="text" class="form-control" name="inputTelefone" value="<?php echo($telefoneCelular);?>" id="inputTelefone" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputDataNascimento">Data de nascimento</label>
                                        <input type="date" class="form-control" name="inputDataNascimento" value="<?php echo($dataNascimento);?>" id="inputDataNascimento" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputEmail">Email</label>
                                        <input type="email" class="form-control" name="inputEmail" value="<?php echo($email);?>" id="inputEmail" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputRA">Matrícula (R.A.)</label>
                                        <input type="text" class="form-control" name="inputRA" value="<?php echo($ra);?>" id="inputRA" disabled>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="selectCurso">Curso</label>
                                        <select class="form-control" name="selectCurso" id="selectCurso" required>
                                        
                                        <?php
                                        if($curso == "Técnico em Informática" && $modalidade == "Técnicos Integrados"){
                                            ?>
                                            <optgroup label="Técnicos Integrados">
                                                <option selected value="Técnicos Integrados-Técnico em Informática">Técnico em Informática</option>
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
                                            <?php
                                        }else if($curso == "Técnico em Eletrotécnica" && $modalidade == "Técnicos Integrados"){
                                            ?>
                                            <optgroup label="Técnicos Integrados">
                                                <option value="Técnicos Integrados-Técnico em Informática">Técnico em Informática</option>
                                                <option selected value="Técnicos Integrados-Técnico em Eletrotécnica">Técnico em Eletrotécnica</option>
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
                                            <?php
                                        } else if($curso == "Técnico em Administração" && $modalidade == "Técnicos Subsequentes"){
                                            ?>
                                            <optgroup label="Técnicos Integrados">
                                                <option value="Técnicos Integrados-Técnico em Informática">Técnico em Informática</option>
                                                <option value="Técnicos Integrados-Técnico em Eletrotécnica">Técnico em Eletrotécnica</option>
                                            </optgroup>
                                                <optgroup label="Técnicos Subsequentes">
                                                <option selected value="Técnicos Subsequentes-Técnico em Administração">Técnico em Administração</option>
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
                                            <?php
                                        }else if($curso == "Técnico em Edificações" && $modalidade == "Técnicos Subsequentes"){
                                            ?>
                                            <optgroup label="Técnicos Integrados">
                                                <option value="Técnicos Integrados-Técnico em Informática">Técnico em Informática</option>
                                                <option value="Técnicos Integrados-Técnico em Eletrotécnica">Técnico em Eletrotécnica</option>
                                            </optgroup>
                                                <optgroup label="Técnicos Subsequentes">
                                                <option value="Técnicos Subsequentes-Técnico em Administração">Técnico em Administração</option>
                                                <option selected value="Técnicos Subsequentes-Técnico em Edificações">Técnico em Edificações</option>
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
                                            <?php
                                        }else if($curso == "Técnico em Eletrotécnica" && $modalidade == "Técnicos Subsequentes"){
                                            ?>
                                            <optgroup label="Técnicos Integrados">
                                                <option value="Técnicos Integrados-Técnico em Informática">Técnico em Informática</option>
                                                <option value="Técnicos Integrados-Técnico em Eletrotécnica">Técnico em Eletrotécnica</option>
                                            </optgroup>
                                                <optgroup label="Técnicos Subsequentes">
                                                <option value="Técnicos Subsequentes-Técnico em Administração">Técnico em Administração</option>
                                                <option value="Técnicos Subsequentes-Técnico em Edificações">Técnico em Edificações</option>
                                                <option selected value="Técnicos Subsequentes-Técnico em Eletrotécnica">Técnico em Eletrotécnica</option>
                                            </optgroup>
                                            <optgroup label="Superiores">
                                                <option value="Superiores-Ciências Biológicas">Ciências Biológicas</option>
                                                <option value="Superiores-Engenharia de Computação">Engenharia de Computação</option>
                                                <option value="Superiores-Geografia">Geografia</option>
                                                <option value="Superiores-Gestão Ambiental">Gestão Ambiental</option>
                                                <option value="Superiores-Gestão Comercial">Gestão Comercial</option>
                                            </optgroup>
                                        </select>
                                            <?php
                                        }else if($curso == "Ciências Biológicas" && $modalidade == "Superiores"){
                                            ?>
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
                                                <option selected value="Superiores-Ciências Biológicas">Ciências Biológicas</option>
                                                <option value="Superiores-Engenharia de Computação">Engenharia de Computação</option>
                                                <option value="Superiores-Geografia">Geografia</option>
                                                <option value="Superiores-Gestão Ambiental">Gestão Ambiental</option>
                                                <option value="Superiores-Gestão Comercial">Gestão Comercial</option>
                                            </optgroup>
                                        </select>
                                            <?php
                                        }else if($curso == "Engenharia de Computação" && $modalidade == "Superiores"){
                                            ?>
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
                                                <option selected value="Superiores-Engenharia de Computação">Engenharia de Computação</option>
                                                <option value="Superiores-Geografia">Geografia</option>
                                                <option value="Superiores-Gestão Ambiental">Gestão Ambiental</option>
                                                <option value="Superiores-Gestão Comercial">Gestão Comercial</option>
                                            </optgroup>
                                        </select>
                                            <?php
                                        }else if($curso == "Geografia" && $modalidade == "Superiores"){
                                            ?>
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
                                                <option selected value="Superiores-Geografia">Geografia</option>
                                                <option value="Superiores-Gestão Ambiental">Gestão Ambiental</option>
                                                <option value="Superiores-Gestão Comercial">Gestão Comercial</option>
                                            </optgroup>
                                        </select>
                                            <?php
                                        } else if($curso == "Gestão Ambiental" && $modalidade == "Superiores"){
                                            ?>
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
                                                <option selected value="Superiores-Gestão Ambiental">Gestão Ambiental</option>
                                                <option value="Superiores-Gestão Comercial">Gestão Comercial</option>
                                            </optgroup>
                                        </select>
                                            <?php
                                        }else if($curso == "Gestão Comercial" && $modalidade == "Superiores"){
                                            ?>
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
                                                <option selected value="Superiores-Gestão Comercial">Gestão Comercial</option>
                                            </optgroup>
                                        </select>
                                            <?php
                                        }else{
                                            ?>
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
                                            <?php
                                        }?>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputAno">Módulo/Ano</label>
                                        <input type="text" class="form-control" name="inputAno" value="<?php echo($periodoAno);?>" id="inputAno" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCep">CEP</label>
                                        <input type="text" class="form-control" name="inputCep" value="<?php echo($cep);?>" id="inputCep" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputEndereco">Endereço</label>
                                        <input type="text" class="form-control" name="inputEndereco" value="<?php echo($endereco);?>" id="inputEndereco" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputNumero">Número</label>
                                        <input type="text" class="form-control" name="inputNumero" value="<?php echo($numero);?>" id="inputNumero" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputComplemento">Complemento</label>
                                        <input type="text" class="form-control" name="inputComplemento" value="<?php echo($complemento);?>" id="inputComplemento">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputBairro">Bairro</label>
                                        <input type="text" class="form-control" name="inputBairro" value="<?php echo($bairro);?>" id="inputBairro" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputCidade">Cidade</label>
                                        <input type="text" class="form-control" name="inputCidade" value="<?php echo($cidade);?>" id="inputCidade" required>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-2">
                                    <div class="form-group">
                                        <label for="selectEstado">Estado</label>
                                        <select class="form-control" name="selectEstado" required>
                                        <?php if($uf == "AC"){?>
                                            <option selected value="AC">AC</option>
                                        <?php } else{?>
                                            <option value="AC">AC</option>
                                        <?php } if($uf == "AL"){?>
                                            <option selected value="AL">AL</option>
                                        <?php } else{?>
                                            <option value="AL">AL</option>
                                        <?php } if($uf == "AP"){?>
                                            <option selected value="AP">AP</option>
                                        <?php } else{?>
                                                <option value="AP">AP</option>
                                        <?php } if($uf == "AM"){?>
                                            <option selected value="AM">AM</option>
                                        <?php } else{?>
                                            <option value="AM">AM</option>
                                        <?php } if($uf == "BA"){?>
                                            <option selected value="BA">BA</option>
                                        <?php } else{?>
                                            <option value="BA">BA</option>
                                        <?php } if($uf == "CE"){?>
                                            <option selected value="CE">CE</option>
                                        <?php } else{?>
                                            <option value="CE">CE</option>
                                        <?php } if($uf == "DF"){?>
                                            <option selected value="DF">DF</option>
                                        <?php } else{?>
                                            <option value="DF">DF</option>
                                        <?php } if($uf == "ES"){?>
                                            <option selected value="ES">ES</option>
                                        <?php } else{?>
                                            <option value="ES">ES</option>
                                        <?php } if($uf == "GO"){?>
                                            <option selected value="GO">GO</option>
                                        <?php } else{?>
                                            <option value="GO">GO</option>
                                        <?php } if($uf == "MA"){?>
                                            <option selected value="MA">MA</option>
                                        <?php } else{?>
                                            <option value="MA">MA</option>
                                        <?php } if($uf == "MT"){?>
                                            <option selected value="MT">MT</option>
                                        <?php } else{?>
                                                <option value="MT">MT</option>
                                        <?php } if($uf == "MS"){?>
                                            <option selected value="MS">MS</option>
                                        <?php } else{?>
                                            <option value="MS">MS</option>
                                        <?php } if($uf == "MG"){?>
                                            <option selected value="MG">MG</option>
                                        <?php } else{?>
                                            <option value="MG">MG</option>
                                        <?php } if($uf == "PA"){?>
                                            <option selected value="PA">PA</option>
                                        <?php } else{?>
                                            <option value="PA">PA</option>
                                        <?php } if($uf == "PB"){?>
                                            <option selected value="PB">PB</option>
                                        <?php } else{?>
                                            <option value="PB">PB</option>
                                        <?php } if($uf == "PR"){?>
                                            <option selected value="PR">PR</option>
                                        <?php } else{?>
                                            <option value="PR">PR</option>
                                        <?php } if($uf == "PE"){?>
                                            <option selected value="PE">PE</option>
                                        <?php } else{?>
                                            <option value="PE">PE</option>
                                        <?php } if($uf == "PI"){?>
                                            <option selected value="PI">PI</option>
                                        <?php } else{?>
                                            <option value="PI">PI</option>
                                        <?php } if($uf == "RJ"){?>
                                            <option selected value="RJ">RJ</option>
                                        <?php } else{?>
                                            <option value="RJ">RJ</option>
                                        <?php } if($uf == "RN"){?>
                                            <option selected value="RN">RN</option>
                                        <?php } else{?>
                                            <option value="RN">RN</option>
                                        <?php } if($uf == "RS"){?>
                                            <option selected value="RS">RS</option>
                                        <?php } else{?>
                                            <option value="RS">RS</option>
                                        <?php } if($uf == "RO"){?>
                                            <option selected value="RO">RO</option>
                                        <?php } else{?>
                                            <option value="RO">RO</option>
                                        <?php } if($uf == "RR"){?>
                                            <option selected value="RR">RR</option>
                                        <?php } else{?>
                                            <option value="RR">RR</option>
                                        <?php } if($uf == "SC"){?>
                                            <option selected value="SC">SC</option>
                                        <?php } else{?>
                                            <option value="SC">SC</option>
                                        <?php } if($uf == "SP"){?>
                                            <option selected value="SP">SP</option>
                                        <?php } else{?>
                                            <option value="SP">SP</option>
                                        <?php } if($uf == "SE"){?>
                                            <option selected value="SE">SE</option>
                                        <?php } else{?>
                                            <option value="SE">SE</option>
                                        <?php } if($uf == "TO"){?>
                                            <option selected value="TO">TO</option>
                                        <?php } else{?>
                                            <option value="TO">TO</option>
                                        <?php }?>
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
                                        <input type="text" class="form-control" name="inputNomeOrientador" value="<?php echo($nomeOrientador);?>" id="inputNomeOrientador" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputTelefoneOrientador">Telefone</label>
                                        <input type="text" class="form-control" name="inputTelefoneOrientador" value="<?php echo($telefoneOrientador);?>" id="inputTelefoneOrientador" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputEmailOrientador">Email</label>
                                        <input type="email" class="form-control" name="inputEmailOrientador" value="<?php echo($emailOrientador);?>" id="inputEmailOrientador" required>
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
                                        <input type="text" class="form-control" name="inputNomeEmpresa" value="<?php echo($nomeEmpresa);?>" id="inputNomeEmpresa" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCnpj">CNPJ</label>
                                        <input type="text" class="form-control" name="inputCnpj" value="<?php echo($cnpjEmpresa);?>" id="inputCnpj" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputEmailEmpresa">Email</label>
                                        <input type="email" class="form-control" name="inputEmailEmpresa" value="<?php echo($emailEmpresa);?>" id="inputEmailEmpresa" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputTelefoneEmpresa">Telefone</label>
                                        <input type="text" class="form-control" name="inputTelefoneEmpresa" value="<?php echo($telefoneEmpresa);?>" id="inputTelefoneEmpresa" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCepEmpresa">CEP</label>
                                        <input type="text" class="form-control" name="inputCepEmpresa" value="<?php echo($cepEmpresa);?>" id="inputCepEmpresa" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputEnderecoEmpresa">Endereço</label>
                                        <input type="text" class="form-control" name="inputEnderecoEmpresa" value="<?php echo($enderecoEmpresa);?>" id="inputEnderecoEmpresa" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputNumeroEmpresa">Número</label>
                                        <input type="text" class="form-control" name="inputNumeroEmpresa" value="<?php echo($numeroEmpresa);?>" id="inputNumeroEmpresa" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputComplementoEmpresa">Complemento</label>
                                        <input type="text" class="form-control" name="inputComplementoEmpresa" value="<?php echo($complementoEmpresa);?>" id="inputComplementoEmpresa">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputBairroEmpresa">Bairro</label>
                                        <input type="text" class="form-control" name="inputBairroEmpresa" value="<?php echo($bairroEmpresa);?>" id="inputBairroEmpresa" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputCidadeEmpresa">Cidade</label>
                                        <input type="text" class="form-control" name="inputCidadeEmpresa" value="<?php echo($cidadeEmpresa);?>" id="inputCidadeEmpresa" required>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-2">
                                    <div class="form-group">
                                        <label for="selectEstadoEmpresa">Estado</label>
                                        <select class="form-control" name="selectEstadoEmpresa" required>
                                        <?php if($estadoEmpresa == "AC"){?>
                                            <option selected value="AC">AC</option>
                                        <?php } else{?>
                                            <option value="AC">AC</option>
                                        <?php } if($estadoEmpresa == "AL"){?>
                                            <option selected value="AL">AL</option>
                                        <?php } else{?>
                                            <option value="AL">AL</option>
                                        <?php } if($estadoEmpresa == "AP"){?>
                                            <option selected value="AP">AP</option>
                                        <?php } else{?>
                                                <option value="AP">AP</option>
                                        <?php } if($estadoEmpresa == "AM"){?>
                                            <option selected value="AM">AM</option>
                                        <?php } else{?>
                                            <option value="AM">AM</option>
                                        <?php } if($estadoEmpresa == "BA"){?>
                                            <option selected value="BA">BA</option>
                                        <?php } else{?>
                                            <option value="BA">BA</option>
                                        <?php } if($estadoEmpresa == "CE"){?>
                                            <option selected value="CE">CE</option>
                                        <?php } else{?>
                                            <option value="CE">CE</option>
                                        <?php } if($estadoEmpresa == "DF"){?>
                                            <option selected value="DF">DF</option>
                                        <?php } else{?>
                                            <option value="DF">DF</option>
                                        <?php } if($estadoEmpresa == "ES"){?>
                                            <option selected value="ES">ES</option>
                                        <?php } else{?>
                                            <option value="ES">ES</option>
                                        <?php } if($estadoEmpresa == "GO"){?>
                                            <option selected value="GO">GO</option>
                                        <?php } else{?>
                                            <option value="GO">GO</option>
                                        <?php } if($estadoEmpresa == "MA"){?>
                                            <option selected value="MA">MA</option>
                                        <?php } else{?>
                                            <option value="MA">MA</option>
                                        <?php } if($estadoEmpresa == "MT"){?>
                                            <option selected value="MT">MT</option>
                                        <?php } else{?>
                                                <option value="MT">MT</option>
                                        <?php } if($estadoEmpresa == "MS"){?>
                                            <option selected value="MS">MS</option>
                                        <?php } else{?>
                                            <option value="MS">MS</option>
                                        <?php } if($estadoEmpresa == "MG"){?>
                                            <option selected value="MG">MG</option>
                                        <?php } else{?>
                                            <option value="MG">MG</option>
                                        <?php } if($estadoEmpresa == "PA"){?>
                                            <option selected value="PA">PA</option>
                                        <?php } else{?>
                                            <option value="PA">PA</option>
                                        <?php } if($estadoEmpresa == "PB"){?>
                                            <option selected value="PB">PB</option>
                                        <?php } else{?>
                                            <option value="PB">PB</option>
                                        <?php } if($estadoEmpresa == "PR"){?>
                                            <option selected value="PR">PR</option>
                                        <?php } else{?>
                                            <option value="PR">PR</option>
                                        <?php } if($estadoEmpresa == "PE"){?>
                                            <option selected value="PE">PE</option>
                                        <?php } else{?>
                                            <option value="PE">PE</option>
                                        <?php } if($estadoEmpresa == "PI"){?>
                                            <option selected value="PI">PI</option>
                                        <?php } else{?>
                                            <option value="PI">PI</option>
                                        <?php } if($estadoEmpresa == "RJ"){?>
                                            <option selected value="RJ">RJ</option>
                                        <?php } else{?>
                                            <option value="RJ">RJ</option>
                                        <?php } if($estadoEmpresa == "RN"){?>
                                            <option selected value="RN">RN</option>
                                        <?php } else{?>
                                            <option value="RN">RN</option>
                                        <?php } if($estadoEmpresa == "RS"){?>
                                            <option selected value="RS">RS</option>
                                        <?php } else{?>
                                            <option value="RS">RS</option>
                                        <?php } if($estadoEmpresa == "RO"){?>
                                            <option selected value="RO">RO</option>
                                        <?php } else{?>
                                            <option value="RO">RO</option>
                                        <?php } if($estadoEmpresa == "RR"){?>
                                            <option selected value="RR">RR</option>
                                        <?php } else{?>
                                            <option value="RR">RR</option>
                                        <?php } if($estadoEmpresa == "SC"){?>
                                            <option selected value="SC">SC</option>
                                        <?php } else{?>
                                            <option value="SC">SC</option>
                                        <?php } if($estadoEmpresa == "SP"){?>
                                            <option selected value="SP">SP</option>
                                        <?php } else{?>
                                            <option value="SP">SP</option>
                                        <?php } if($estadoEmpresa == "SE"){?>
                                            <option selected value="SE">SE</option>
                                        <?php } else{?>
                                            <option value="SE">SE</option>
                                        <?php } if($estadoEmpresa == "TO"){?>
                                            <option selected value="TO">TO</option>
                                        <?php } else{?>
                                            <option value="TO">TO</option>
                                        <?php }?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputNomeRepresentante">Representante</label>
                                        <input type="text" class="form-control" name="inputNomeRepresentante" value="<?php echo($representanteEmpresa);?>" id="inputNomeRepresentante" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCargoRepresentante">Cargo</label>
                                        <input type="text" class="form-control" name="inputCargoRepresentante" value="<?php echo($cargoEmpresa);?>" id="inputCargoRepresentante" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputResponsavelAssTCE">Responsável pela assinatura do termo de compromisso</label>
                                        <input type="text" class="form-control" name="inputResponsavelAssTCE" value="<?php echo($responsavelEmpresa);?>" id="inputResponsavelAssTCE" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCargoResponsavelAssTCE">Cargo</label>
                                        <input type="text" class="form-control" name="inputCargoResponsavelAssTCE" value="<?php echo($tceCargoEmpresa);?>" id="inputCargoResponsavelAssTCE" required>
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
                                        <input type="text" class="form-control" name="inputNomeSupervisor" value="<?php echo($nomeSupervisor);?>" id="inputNomeSupervisor" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCargoSupervisor">Cargo</label>
                                        <input type="text" class="form-control" name="inputCargoSupervisor" value="<?php echo($cargoSupervisor);?>" id="inputCargoSupervisor" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputEmailSupervisor">Email</label>
                                        <input type="email" class="form-control" name="inputEmailSupervisor" value="<?php echo($emailSupervisor);?>" id="inputEmailSupervisor" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputTelefoneSupervisor">Telefone</label>
                                        <input type="text" class="form-control" name="inputTelefoneSupervisor" value="<?php echo($telefoneSupervisor);?>" id="inputTelefoneSupervisor" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCpfSupervisor">CPF</label>
                                        <input type="text" class="form-control" name="inputCpfSupervisor" value="<?php echo($cpfSupervisor);?>" id="inputCpfSupervisor" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCursoSupervisor">Curso de formação</label>
                                        <input type="text" class="form-control" name="inputCursoSupervisor" value="<?php echo($cursoFormacaoSupervisor);?>" id="inputCursoSupervisor" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputConselhoSupervisor">Conselho de Classe Profissional</label>
                                        <input type="text" class="form-control" name = "inputConselhoSupervisor" value="<?php echo($conselhoClasseSupervisor);?>" id="inputConselhoSupervisor" placeholder="(opcional)">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="radioGroupPossuiExperiencia">O(A) supervisor(a) de estágio possui experiência profissional na área do estágio?</label>
                                        <div class="form-check form-check-inline">
                                            <?php
                                                if($possuiExperienciaSupervisor == "Sim"){
                                            ?> 
                                                <input class="form-check-input" type="radio" name="radioGroupPossuiExperiencia" id="radioPossuiExperiencia" value="Sim" checked>
                                                <label class="form-check-label" for="inlineRadio1">Sim</label>
                                            <?php
                                                } else{
                                            ?>
                                                    <input class="form-check-input" type="radio" name="radioGroupPossuiExperiencia" id="radioPossuiExperiencia" value="Sim">
                                                    <label class="form-check-label" for="inlineRadio1">Sim</label>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <?php
                                                if($possuiExperienciaSupervisor == "Não"){
                                            ?> 
                                                <input class="form-check-input" type="radio" name="radioGroupPossuiExperiencia" id="radioNaoPossuiExperiencia" value="Não" checked>
                                                <label class="form-check-label" for="inlineRadio2">Não</label>
                                            <?php
                                                } else{
                                            ?>
                                                    <input class="form-check-input" type="radio" name="radioGroupPossuiExperiencia" id="radioNaoPossuiExperiencia" value="Não">
                                            <label class="form-check-label" for="inlineRadio2">Não</label>
                                            <?php
                                                }
                                            ?>
                                            
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
                                        <?php
                                                if($tipoEstagio == "Estágio Obrigatório"){
                                            ?>
                                                <input class="form-check-input" type="radio" name="radioGroupEstagio" id="radioNaoRemunerado" value="Estágio Obrigatório" checked>
                                            <label class="form-check-label" for="radioNaoRemunerado">Estágio obrigatório</label>
                                            <?php
                                                } else{ 
                                            ?>
                                                <input class="form-check-input" type="radio" name="radioGroupEstagio" id="radioNaoRemunerado" value="Estágio Obrigatório">
                                            <label class="form-check-label" for="radioNaoRemunerado">Estágio obrigatório</label>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <?php
                                                if($tipoEstagio == "Estágio não Obrigatório"){
                                            ?>
                                                <input class="form-check-input" type="radio" name="radioGroupEstagio" id="radioRemunerado" value="Estágio não Obrigatório" checked>
                                                <label class="form-check-label" for="radioRemunerado">Estágio não obrigatório</label>
                                            <?php
                                                } else{ 
                                            ?>
                                                <input class="form-check-input" type="radio" name="radioGroupEstagio" id="radioRemunerado" value="Estágio não Obrigatório">
                                                <label class="form-check-label" for="radioRemunerado">Estágio não obrigatório</label>
                                            <?php
                                                }
                                            ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="inputValorBolsa">Valor da Bolsa</label>
                                        <input type="text" class="form-control" name="inputValorBolsa" value="<?php echo($valorBolsaEstagio);?>" id="inputValorBolsa">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-9">
                                    <label for="inputBeneficios">Benefícios</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <?php
                                                $beneficio = array();
                                                $beneficio = explode(",", $beneficiosEstagio);
                                                $valeTransporte = 1;
                                                $planoDeSaude = 1;
                                                $valeAlimentacao = 1;
                                                for($i = 0; $i < sizeof($beneficio); $i++){
                                                    if($beneficio[$i] == "Vale Transporte" && $valeTransporte == 1 ){
                                                        $valeTransporte = 2;
                                                    } else if($beneficio[$i] == "Plano de Saúde" && $planoDeSaude == 1){
                                                        $planoDeSaude = 2;
                                                    } else if($beneficio[$i] == "Vale Alimentação" && $valeAlimentacao == 1){
                                                        $valeAlimentacao = 2;
                                                    }
                                                }
                                                if($valeTransporte == 2){
                                            ?>
                                                    <input class="form-check-input" type="checkbox" name="checkboxValeTransporte" id="checkboxValeTransporte" value="Vale Transporte" checked>
                                                    <label class="form-check-label" for="checkboxValeTransporte">
                                                        Vale Transporte
                                                    </label>
                                            <?php } else{
                                            ?>
                                                    <input class="form-check-input" type="checkbox" name="checkboxValeTransporte" id="checkboxValeTransporte" value="Vale Transporte">
                                                    <label class="form-check-label" for="checkboxValeTransporte">
                                                        Vale Transporte
                                                    </label>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <?php
                                                if($planoDeSaude == 2){
                                            ?>
                                                    <input class="form-check-input" type="checkbox" name="checkboxPlanoDeSaude" id="checkboxPlanoDeSaude" value="Plano de Saúde" checked>
                                                    <label class="form-check-label" for="checkboxPlanoDeSaude">
                                                        Plano de Saúde
                                                    </label>
                                            <?php 
                                                } else{
                                            ?>
                                                    <input class="form-check-input" type="checkbox" name="checkboxPlanoDeSaude" id="checkboxPlanoDeSaude" value="Plano de Saúde">
                                                    <label class="form-check-label" for="checkboxPlanoDeSaude">
                                                        Plano de Saúde
                                                    </label>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <?php
                                                if($valeAlimentacao == 2){
                                            ?>
                                                <input class="form-check-input" type="checkbox" name="checkboxValeAlimentacao" id="checkboxValeAlimentacao" value="Vale Alimentação" checked>
                                                <label class="form-check-label" for="checkboxValeAlimentacao">
                                                    Vale Alimentação
                                                </label>
                                            <?php 
                                                } else{
                                            ?>
                                                 <input class="form-check-input" type="checkbox" name="checkboxValeAlimentacao" id="checkboxValeAlimentacao" value="Vale Alimentação">
                                                <label class="form-check-label" for="checkboxValeAlimentacao">
                                                    Vale Alimentação
                                                </label>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="inputCargaHorariaMax">Carga horária total</label>
                                        <input type="text" class="form-control" name="inputCargaHorariaMax" value="<?php echo($cargaHorariaTotalEstagio);?>" id="inputCargaHorariaMax">
                                        <small class="help-block text-muted"><a href="https://portal.pcs.ifsuldeminas.edu.br/extensao-menu-campus/estagio-e-emprego/tudo-sobre-estagio" target="_blank">Consulte aqui</a></small>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <label for="radioGroupCargaHoraria">Tipo de carga horária</label>
                                    <div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                <?php
                                                    if($tipoCargaHorariaEstagio == "Carga Horária Fixa"){
                                                ?>
                                                        <input class="form-check-input" type="radio" name="radioGroupCargaHoraria" id="radioFixa" value="Carga Horária Fixa" checked>
                                                        <label class="form-check-label" for="radioFixa">Carga horária fixa</label>
                                                <?php
                                                    } else{
                                                ?>
                                                        <input class="form-check-input" type="radio" name="radioGroupCargaHoraria" id="radioFixa" value="Carga Horária Fixa">
                                                        <label class="form-check-label" for="radioFixa">Carga horária fixa</label>
                                                <?php
                                                    }
                                                ?>
                                                    
                                                </div>
                                                <div class="form-check form-check-inline">

                                                <?php
                                                    if($tipoCargaHorariaEstagio == "Carga Horária Variável"){
                                                ?>
                                                        <input class="form-check-input" type="radio" name="radioGroupCargaHoraria" id="radioVariavel" value="Carga Horária Variável" checked>
                                                        <label class="form-check-label" for="radioVariavel">Carga horária variável</label>
                                                <?php
                                                    } else{
                                                ?>
                                                        <input class="form-check-input" type="radio" name="radioGroupCargaHoraria" id="radioVariavel" value="Carga Horária Variável">
                                                        <label class="form-check-label" for="radioVariavel">Carga horária variável</label>
                                                <?php
                                                    }
                                                ?>
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
                                        <input type="date" class="form-control" name="inputDataInicioEstagio" value="<?php echo($dataInicioEstagio);?>" id="inputDataInicioEstagio" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="inputDataFimEstagio">Data de término</label>
                                        <input type="date" class="form-control" name="inputDataFimEstagio" value="<?php echo($dataTerminoEstagio);?>" id="inputDataFimEstagio" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="radioGroupCargaDiaria">Carga Diária Máxima</label>
                                    <div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                <?php
                                                    if($tipoCargaDiariaEstagio == "6h"){
                                                ?>
                                                        <input class="form-check-input" type="radio" name="radioGroupCargaDiaria" id="radio6h" value="6h" checked>
                                                        <label class="form-check-label" for="radio6h">6h</label>
                                                <?php
                                                    } else{
                                                ?>
                                                        <input class="form-check-input" type="radio" name="radioGroupCargaDiaria" id="radio6h" value="6h">
                                                        <label class="form-check-label" for="radio6h">6h</label>
                                                <?php
                                                    }
                                                ?>
                                                    
                                                </div>
                                                <div class="form-check form-check-inline">

                                                <?php
                                                    if($tipoCargaDiariaEstagio == "8h"){
                                                ?>
                                                        <input class="form-check-input" type="radio" name="radioGroupCargaDiaria" id="radio8h" value="8h" checked>
                                                        <label class="form-check-label" for="radio8h">8h</label>
                                                <?php
                                                    } else{
                                                ?>
                                                        <input class="form-check-input" type="radio" name="radioGroupCargaDiaria" id="radio8h" value="8h">
                                                        <label class="form-check-label" for="radio8h">8h</label>
                                                <?php
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-row col-sm-12 col-md-12" id="campoCargaHoraria">

                                <div class="col-sm-12 col-md-3" id="divDiasTrabalhados">
                                    <div class="row">Dias trabalhados</div>
                                    <div class="form-check" style="margin-bottom: 10px; margin-top: 10px;">
                                    <?php
                                        if($segundaEstagio != NULL){
                                    ?>
                                            <input class="form-check-input" type="checkbox" value="" name="checkSegunda" id="checkSegunda" checked>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Segunda-feira
                                            </label>
                                    <?php
                                        } else{
                                    ?>
                                            <input class="form-check-input" type="checkbox" value="" name="checkSegunda" id="checkSegunda">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Segunda-feira
                                            </label>
                                    <?php
                                        }
                                    ?> 
                                    </div>
                                    <div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">
                                    <?php
                                        if($tercaEstagio != NULL){
                                    ?>
                                            <input class="form-check-input" type="checkbox" value="" name="checkTerca" id="checkTerca" checked>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Terça-feira
                                            </label>
                                    <?php
                                        } else{
                                    ?>
                                            <input class="form-check-input" type="checkbox" value="" name="checkTerca" id="checkTerca">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Terça-feira
                                            </label>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                    <div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">
                                    <?php
                                        if($quartaEstagio != NULL){
                                    ?>
                                            <input class="form-check-input" type="checkbox" value="" name="checkQuarta" id="checkQuarta" checked>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Quarta-feira
                                            </label>
                                    <?php
                                        } else{
                                    ?>
                                            <input class="form-check-input" type="checkbox" value="" name="checkQuarta" id="checkQuarta">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Quarta-feira
                                            </label>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                    <div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">
                                    <?php
                                        if($quintaEstagio != NULL){
                                    ?>
                                            <input class="form-check-input" type="checkbox" value="" name="checkQuinta" id="checkQuinta" checked>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Quinta-feira
                                            </label>
                                    <?php
                                        } else{
                                    ?>
                                            <input class="form-check-input" type="checkbox" value="" name="checkQuinta" id="checkQuinta">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Quinta-feira
                                            </label>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                    <div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">
                                    <?php
                                        if($sextaEstagio != NULL){
                                    ?>
                                            <input class="form-check-input" type="checkbox" value="" name="checkSexta" id="checkSexta" checked>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Sexta-feira
                                            </label>
                                    <?php
                                        } else{
                                    ?>
                                            <input class="form-check-input" type="checkbox" value="" name="checkSexta" id="checkSexta">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Sexta-feira
                                            </label>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                    <div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">
                                    <?php
                                        if($sabadoEstagio != NULL){
                                    ?>
                                            <input class="form-check-input" type="checkbox" value="" name="checkSabado" id="checkSabado" checked>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Sábado
                                            </label>
                                    <?php
                                        } else{
                                    ?>
                                            <input class="form-check-input" type="checkbox" value="" name="checkSabado" id="checkSabado">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Sábado
                                            </label>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-2" id="divHorasTrabalhadas">
                                    <div class="row">Horas trabalhadas</div>
                                    <div id="horarioEntrada">
                                        <div class="form-group">
                                        <?php
                                            if($segundaEstagio != NULL){
                                        ?>
                                                <input type="time" class="form-control" name="horasSegunda" id="horasSegunda" value=<?php echo $segundaEstagio ?> required>
                                        <?php
                                            } else{
                                        ?>
                                                <input type="time" class="form-control" name="horasSegunda" id="horasSegunda" disabled>
                                        <?php
                                            }
                                        ?>
                                        </div>
                                        <div class="form-group">
                                        <?php
                                            if($tercaEstagio != NULL){
                                        ?>
                                                <input type="time" class="form-control" name="horasTerca" id="horasTerca" value=<?php echo $tercaEstagio ?> required>
                                        <?php
                                            } else{
                                        ?>
                                                <input type="time" class="form-control" name="horasTerca" id="horasTerca" disabled>
                                        <?php
                                            }
                                        ?>
                                        </div>
                                        <div class="form-group">
                                        <?php
                                            if($quartaEstagio != NULL){
                                        ?>
                                                <input type="time" class="form-control" name="horasQuarta" id="horasQuarta" value=<?php echo $quartaEstagio ?> required>
                                        <?php
                                            } else{
                                        ?>
                                                <input type="time" class="form-control" name="horasQuarta" id="horasQuarta" disabled>
                                        <?php
                                            }
                                        ?>
                                        </div>
                                        <div class="form-group">
                                        <?php
                                            if($quintaEstagio != NULL){
                                        ?>
                                                <input type="time" class="form-control" name="horasQuinta" id="horasQuinta" value=<?php echo $quintaEstagio ?> required>
                                        <?php
                                            } else{
                                        ?>
                                                <input type="time" class="form-control" name="horasQuinta" id="horasQuinta" disabled>
                                        <?php
                                            }
                                        ?>
                                        </div>
                                        <div class="form-group">
                                        <?php
                                            if($sextaEstagio != NULL){
                                        ?>
                                                <input type="time" class="form-control" name="horasSexta" id="horasSexta" value=<?php echo $sextaEstagio ?> required>
                                        <?php
                                            } else{
                                        ?>
                                                <input type="time" class="form-control" name="horasSexta" id="horasSexta" disabled>
                                        <?php
                                            }
                                        ?>
                                        </div>
                                        <div class="form-group">
                                        <?php
                                            if($sabadoEstagio != NULL){
                                        ?>
                                                <input type="time" class="form-control" name="horasSabado" id="horasSabado" value=<?php echo $sabadoEstagio ?> required>
                                        <?php
                                            } else{
                                        ?>
                                                <input type="time" class="form-control" name="horasSabado" id="horasSabado" disabled>
                                        <?php
                                            }
                                        ?>
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
                                        <textarea class="form-control" name="inputAtividadesDesenvolvidas" value="<?php echo($atividadesASeremDesenvolvidasEstagio);?>" id="inputAtividadesDesenvolvidas" rows="3" maxlength="500" required></textarea>
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
                                        <textarea class="form-control" name="inputAreasConhecimento" value="<?php echo($areasConhecimentoEstagio);?>" id="inputAreasConhecimento" rows="2" maxlength="500" required></textarea>
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
                                        <textarea class="form-control" name="inputObjetivos" value="<?php echo($objetivosAlcancadosEstagio);?>" id="inputObjetivos" rows="3" maxlength="500" required></textarea>
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