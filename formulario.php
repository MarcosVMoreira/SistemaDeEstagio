<?php
    include("header.html");
?>
    <!-- CSS do Formulário -->
    <link rel="stylesheet" href="css/formulario.css">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <form>
                    <div class="card">
                        <div class="card-header">
                            Dados do aluno
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
                            Dados do orientador do estágio
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputNomeOrientador">Nome completo</label>
                                        <input type="text" class="form-control" id="inputNomeOrientador">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputTelefoneOrientador">Telefone</label>
                                        <input type="text" class="form-control" id="inputTelefoneOrientador">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="inputEmailOrientador">Email</label>
                                        <input type="text" class="form-control" id="inputEmailOrientador">
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
                                        <input type="text" class="form-control" id="inputNomeEmpresa">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCnpj">CNPJ</label>
                                        <input type="text" class="form-control" id="inputCnpj">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputEmailEmpresa">Email</label>
                                        <input type="text" class="form-control" id="inputEmailEmpresa">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputTelefoneEmpresa">Telefone</label>
                                        <input type="text" class="form-control" id="inputTelefoneEmpresa">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCepEmpresa">CEP</label>
                                        <input type="text" class="form-control" id="inputCepEmpresa">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputEnderecoEmpresa">Endereço</label>
                                        <input type="text" class="form-control" id="inputEnderecoEmpresa">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputNumeroEmpresa">Número</label>
                                        <input type="text" class="form-control" id="inputNumeroEmpresa">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputComplementoEmpresa">Complemento</label>
                                        <input type="text" class="form-control" id="inputComplementoEmpresa">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputBairroEmpresa">Bairro</label>
                                        <input type="text" class="form-control" id="inputBairroEmpresa">
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-2">
                                    <div class="form-group">
                                        <label for="selectEstadoEmpresa">Estado</label>
                                        <select class="form-control" name="selectEstadoEmpresa">
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
                                        <label for="inputCidadeEmpresa">Cidade</label>
                                        <input type="text" class="form-control" id="inputCidadeEmpresa">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputNomeRepresentante">Representante</label>
                                        <input type="text" class="form-control" id="inputNomeRepresentante">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCargoRepresentante">Cargo</label>
                                        <input type="text" class="form-control" id="inputCargoRepresentante">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputResponsavelAssTCE">Responsável pela assinatura do termo de compromisso</label>
                                        <input type="text" class="form-control" id="inputResponsavelAssTCE">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCargoResponsavelAssTCE">Cargo</label>
                                        <input type="text" class="form-control" id="inputCargoResponsavelAssTCE">
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
                                        <input type="text" class="form-control" id="inputNomeSupervisor">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCargoSupervisor">Cargo</label>
                                        <input type="text" class="form-control" id="inputCargoSupervisor">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputEmailSupervisor">Email</label>
                                        <input type="text" class="form-control" id="inputEmailSupervisor">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputTelefoneSupervisor">Telefone</label>
                                        <input type="text" class="form-control" id="inputTelefoneSupervisor">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCpfSupervisor">CPF</label>
                                        <input type="text" class="form-control" id="inputCpfSupervisor">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputCursoSupervisor">Curso de formação</label>
                                        <input type="text" class="form-control" id="inputCursoSupervisor">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputConselhoSupervisor">Conselho de Classe Profissional</label>
                                        <input type="text" class="form-control" id="inputConselhoSupervisor" placeholder="(opcional)">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="radioGroupPossuiExperiencia">O(A) supervisor(a) de estágio possui experiência profissional na área do estágio?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radioGroupPossuiExperiencia" id="radioPossuiExperiencia" value="sim">
                                            <label class="form-check-label" for="inlineRadio1">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radioGroupPossuiExperiencia" id="radioNaoPossuiExperiencia" value="nao">
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
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputDataInicioEstagio">Data de início</label>
                                        <input type="date" class="form-control" id="inputDataInicioEstagio">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputDataFimEstagio">Data de término</label>
                                        <input type="date" class="form-control" id="inputDataFimEstagio">
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="radioGroupPossuiExperiencia">Tipo de estágio</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radioGroupEstagio" id="radioNaoRemunerado" value="nao" checked>
                                            <label class="form-check-label" for="inlineRadio1">Estágio obrigatório</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radioGroupEstagio" id="radioRemunerado" value="sim">
                                            <label class="form-check-label" for="inlineRadio2">Estágio não obrigatório</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="inputHorasDiarias">Horário de entrada</label>
                                        <input type="time" class="form-control" id="inputHorasDiarias">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="inputHorasDiarias">Horário de saída</label>
                                        <input type="time" class="form-control" id="inputHorasDiarias">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="inputHorasDiarias">Horas diárias</label>
                                        <input type="time" class="form-control" id="inputHorasDiarias">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="inputHorasSemanais">Horas semanais</label>
                                        <input type="time" class="form-control" id="inputHorasSemanais">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="inputCompanhiaSeguro">Companhia de seguro</label>
                                        <input type="text" class="form-control" id="inputCompanhiaSeguro">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inputNumeroApolice">Número da apólice</label>
                                        <input type="text" class="form-control" id="inputNumeroApolice">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputAtividadesDesenvolvidas">Atividades a serem desenvolvidas no estágio</label>
                                        <textarea class="form-control" id="inputAtividadesDesenvolvidas" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputAreasConhecimento">Áreas de conhecimento envolvidas no estágio</label>
                                        <textarea class="form-control" id="inputAreasConhecimento" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputObjetivos">Objetivos a serem alcançados no estágio</label>
                                        <textarea class="form-control" id="inputObjetivos" rows="3"></textarea>
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

<?php
    include("footer.html");
?>