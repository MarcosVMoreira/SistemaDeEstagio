<?php
    include("header.html");
?>
<!-- CSS do Formulário -->
<link rel="stylesheet" href="css/cadastro.css">

<div class="container-fluid">
    <div class="row pt-5">
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
                                    <!-- <small id="ajudaNome" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
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
                                    <input name="ra" type="text" class="form-control" id="inputRA" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="selectCurso">Curso</label>
                                    <select class="form-control" id="selectCurso" name="curso">
                                        <optgroup label="Técnicos Integrados">
                                            <option>Técnico em Informática</option>
                                            <option>Técnico em Eletrotécnica</option>
                                        </optgroup>
                                        <optgroup label="Técnicos Subsequentes">
                                            <option>Técnico em Administração</option>
                                            <option>Técnico em Edificações</option>
                                            <option>Técnico em Eletrotécnica</option>
                                        </optgroup>
                                        <optgroup label="Superiores">
                                            <option>Ciências Biológicas</option>
                                            <option>Engenharia de Computação</option>
                                            <option>Geografia</option>
                                            <option>Gestão Ambiental</option>
                                            <option>Gestão Comercial</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="inputAno">Módulo/Ano</label>
                                    <input name="periodoAno" type="text" class="form-control" id="inputAno" required>
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
