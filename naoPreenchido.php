<?php
    include("header.php");
    
    $test = false; // Definir como true para rodar os testes

    if (!((isset($_SESSION['ra']) && $_SESSION['ra'] != "") &&  
	(isset($_SESSION['nome']) && $_SESSION['nome'] != "") && (isset($_SESSION['senha']) && $_SESSION['senha'] != ""))) {
        header("Location: login.php");
	} else {
    

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
                                    <input type="text" class="form-control" name="inputNome" id="inputNome" required>
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
                                    <label for="inputTelefone">Telefone</label>
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
                                    <input type="text" class="form-control" name="inputRA" id="inputRA" required>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="selectCurso">Curso</label>
                                    <select class="form-control" name="selectCurso" id="selectCurso" required>
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
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radioGroupEstagio" id="radioNaoRemunerado" value="nao" required>
                                        <label class="form-check-label" for="radioNaoRemunerado">Estágio obrigatório</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="radioGroupEstagio" id="radioRemunerado" value="sim">
                                        <label class="form-check-label" for="radioRemunerado">Estágio não obrigatório</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="inputValorBolsa">Valor da Bolsa</label>
                                    <input type="text" class="form-control" id="inputValorBolsa">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <label for="inputBeneficios">Benefícios</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="ValeTransporte" id="checkboxValeTransporte">
                                        <label class="form-check-label" for="checkboxValeTransporte">
                                            Vale Transporte
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="PlanoDeSaude" id="checkboxPlanoDeSaude">
                                        <label class="form-check-label" for="checkboxPlanoDeSaude">
                                            Plano de Saúde
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="ValeAlimentacao" id="checkboxValeAlimentacao">
                                        <label class="form-check-label" for="checkboxValeAlimentacao">
                                            Vale Alimentação
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        

                        <div class="row">
                            <div class="col-sm-12 col-md-6">Horas trabalhadas por dia</div>
                        </div>

                        


                        <!--
                        <div class="form-row" id="divHorarios">
                            <div id="horarioEntrada" class="col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="inputHorasDiarias">Horário de entrada</label>
                                    <input type="time" class="form-control" id="inputHorasDiarias">
                                </div>
                            </div>

                            <div id="horarioSaida" class="col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="inputHorasDiarias">Horário de saída</label>
                                    <input type="time" class="form-control" id="inputHorasDiarias">
                                </div>
                            </div>

                            <div id="horasDiarias" class="col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="inputHorasDiarias">Horas diárias</label>
                                    <input type="time" class="form-control" id="inputHorasDiarias">
                                </div>
                            </div>

                            <div id="horasSemanais" class="col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="inputHorasSemanais">Horas semanais</label>
                                    <input type="time" class="form-control" id="inputHorasSemanais">
                                </div>
                            </div>
                        </div>
                        -->

                        <div id="divSeguro1" class="form-row">

                        </div>

                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputAtividadesDesenvolvidas">Atividades a serem desenvolvidas no estágio</label>
                                    <textarea class="form-control" id="inputAtividadesDesenvolvidas" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputAreasConhecimento">Áreas de conhecimento envolvidas no estágio</label>
                                    <textarea class="form-control" id="inputAreasConhecimento" rows="2" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputObjetivos">Objetivos a serem alcançados no estágio</label>
                                    <textarea class="form-control" id="inputObjetivos" rows="3" required></textarea>
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
