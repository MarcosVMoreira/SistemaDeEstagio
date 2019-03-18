<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/css/mdb.min.css" rel="stylesheet"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- CSS Próprio -->
    <link rel="stylesheet" href="css/style.css">

    <title>Sistema de Estágio</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <form>
                    <div class="card">
                        <div class="card-header">
                            Dados Pessoais
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputNome">Nome completo</label>
                                        <input type="text" class="form-control" id="inputNome">
                                        <!-- <small id="ajudaNome" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCpf">CPF</label>
                                        <input type="text" class="form-control" id="inputCpf">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputRg">RG</label>
                                        <input type="text" class="form-control" id="inputRg">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputTelefone">Telefone</label>
                                        <input type="text" class="form-control" id="inputTelefone">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputDataNascimento">Data de nascimento</label>
                                        <input type="date" class="form-control" id="inputDataNascimento">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputEmail">Email</label>
                                        <input type="email" class="form-control" id="inputEmail">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCep">CEP</label>
                                        <input type="text" class="form-control" id="inputCep">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputEndereco">Endereço</label>
                                        <input type="text" class="form-control" id="inputEndereco">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputNumero">Número</label>
                                        <input type="text" class="form-control" id="inputNumero">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputComplemento">Complemento</label>
                                        <input type="text" class="form-control" id="inputComplemento">
                                    </div>
                                </div>
                            </div>  

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputBairro">Bairro</label>
                                        <input type="text" class="form-control" id="inputBairro">
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-2">
                                    <div class="form-group">
                                        <label for="selectEstado">Estado</label>
                                        <select class="form-control" name="selectEstado">
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
                                        <input type="text" class="form-control" id="inputCidade">
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
                                        <input type="text" class="form-control" id="inputRA">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="selectCurso">Curso</label>
                                        <select class="form-control" id="selectCurso">
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
                                        <input type="text" class="form-control" id="inputAno">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputSenha">Senha</label>
                                        <input type="password" class="form-control" id="inputSenha">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputConfirmarSenha">Confirmar Senha</label>
                                        <input type="password" class="form-control" id="inputConfirmarSenha">
                                    </div>
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
<?php
include("footer.html");
?>