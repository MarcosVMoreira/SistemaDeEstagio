    <link rel="stylesheet" href="css/cadastro.css">
    <!-- CSS -->
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/css/mdb.min.css" rel="stylesheet"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- CSS Próprio -->
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS da Sidebar -->
    <link rel="stylesheet" href="css/sidebar.css">
    <!-- QUnit CSS -->
    <script src="https://code.jquery.com/qunit/qunit-2.9.2.css" integrity="sha256-toepOe5D+ddXgUOGsijnhymZna5bakJ0gwRC/3bK1b0=" crossorigin="anonymous"></script>

    <!-- JS -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <form action="cadastroValidar.php" method="POST" id="formCadastro" >
                <div class="card">
                    <div class="card-header">
                        Dados Pessoais
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputNome">Nome completo</label>
                                    <input name="nome" type="text" class="form-control" id="inputNome" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="inputCpf">CPF</label>
                                    <input name="cpf" type="text" class="form-control" id="inputCpf" required>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="inputRg">RG</label>
                                    <input name="rg" type="text" class="form-control" id="inputRg" required>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="inputTelefone">Telefone</label>
                                    <input name="telefone" type="text" class="form-control" id="inputTelefone" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="inputDataNascimento">Data de nascimento</label>
                                    <input name="dataNascimento" type="date" class="form-control" id="inputDataNascimento" required>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-8">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input name="email" type="email" class="form-control" id="inputEmail" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="inputCep">CEP</label>
                                    <input name="cep" type="text" class="form-control" id="inputCep" required>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-8">
                                <div class="form-group">
                                    <label for="inputEndereco">Endereço</label>
                                    <input name="endereco" type="text" class="form-control" id="inputEndereco" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="inputNumero">Número</label>
                                    <input name="numero" type="text" class="form-control" id="inputNumero" required>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-8">
                                <div class="form-group">
                                    <label for="inputComplemento">Complemento</label>
                                    <input name="complemento" type="text" class="form-control" id="inputComplemento">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="inputBairro">Bairro</label>
                                    <input name="bairro" type="text" class="form-control" id="inputBairro" required>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-2">
                                <div class="form-group">
                                    <label for="selectEstado">Estado</label>
                                    <select class="form-control" name="estado">
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
                                        <option value="MG">MG</option>
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
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="inputCidade">Cidade</label>
                                    <input name="cidade" type="text" class="form-control" id="inputCidade" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Dados Acadêmicos
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="inputRA">Matrícula (R.A.)</label>
                                    <input name="ra" type="text" class="form-control" id="inputRA" maxlength="11" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5">
                                <div class="form-group">
                                    <label for="selectCurso">Curso</label>
                                    <select class="form-control" id="selectCurso" name="curso">
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
                            <div class="col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="inputAno">Módulo/Ano</label>
                                    <input name="periodoAno" type="text" class="form-control" id="inputAno" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="selectCampus">Campus</label>
                                    <select class="form-control" id="selectCampus" name="campus">
                                            <option>Poços de Caldas</option>
                                            <option>Inconfidentes</option>
                                            <option>Machado</option>
                                            <option>Muzambinho</option>
                                            <option>Passos</option>
                                            <option>Pouso Alegre</option>
                                            <option>Carmo de Minas</option>
                                            <option>Três Corações</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="inputSenha">Senha</label>
                                    <input name="senha" type="password" class="form-control" id="inputSenha" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="inputConfirmarSenha">Confirmar Senha</label>
                                    <input type="password" class="form-control" id="inputConfirmarSenha" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col-sm-12">
                                <span id="mensagemErro"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-7">
                        <button class="btn btn-success" type="submit" id="botaoCriarConta">Criar Conta</button>
                        <button class="btn btn-danger" type="submit" id="botaoCancelar">Cancelar</button>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.mask.min.js"></script>
<script type="text/javascript" src="js/cadastro.js"></script>

<?php
    include("footer.html");
?>
