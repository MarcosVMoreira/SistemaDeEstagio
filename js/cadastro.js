function validaSenha(senha) {

    if (senha.length < 8) {

        $('#inputSenha').addClass('form-invalido');

        tooltip($('#inputSenha'), 'A senha deve possuir mais de oito dígitos.');

        return false;

    } else {
        $('#inputSenha').removeClass('form-invalido');

        $('#inputSenha').tooltip('disable');

        return true;
    }
}

function validaConfirmacaoSenha(senha, senhaConfirmada) {

    if (senhaConfirmada != senha) {

        $('#inputSenha').addClass('form-invalido');
        $('#inputConfirmarSenha').addClass('form-invalido');

        tooltip($('#inputConfirmarSenha'), 'A confirmação de senha deve ser igual à senha.');

        return false;

    } else {
        $('#inputConfirmarSenha').removeClass('form-invalido');
        $('#inputSenha').removeClass('form-invalido');

        $('#inputConfirmarSenha').tooltip('disable');
        $('#inputSenha').tooltip('disable');

        return true;
    }
}

$(document).ready(function () {

    $('#inputCpf').mask('000.000.000-00').focusout(function (e) {

        if (!validaCpf($(e.target).val())) {
            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'CPF inválido.');

        } else {
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');

            return true;
        }
    });

    $('#inputDataNascimento').change(function (e) {
        
        dataC = document.getElementById('inputDataNascimento')
        dataCampo = dataC.value
        dataAtual = new Date()

        if(Date.parse(dataAtual) < Date.parse(dataCampo)){
            $(e.target).addClass('form-invalido');
            tooltip($(e.target), 'Digite uma data válida.');
        }else{
            $(e.target).removeClass('form-invalido');
            $(e.target).tooltip('disable');
            return true;
        }
    });

    $("#inputDataNascimento").focusout(function (e) {

        if ($(e.target).val() == "") {
            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'Por favor digite a cidade.');

        } else {
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');

            return true;
        }

    });
    
    $('#inputRg').focusout(function (e) {

        if ($(e.target).val() == "") {
            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'Por favor digite o RG.');

        } else {
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');

            return true;
        }

    });

    $('#inputRA').mask('00000000000').focusout(function(e){
        if(!validaRA($(e.target).val())){
            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'RA inválido.');
        } else {
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');

            return true;
        }
    });

    $('#inputNome').focusout(function(e){
        if(!validaNome($(e.target).val())){
            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'Digite seu nome completo.');
        } else{
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');
            return true;
        }
    });

    $("#inputTelefone").mask("(00) 00000-0000").focusout(function(e){
        
        if (!validaTelefone($(e.target).val())){
            
            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'Telefone inválido.');
            
        } else {
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');

            return true;
        }

    });

    $("#inputEmail").focusout(function (e) {

        if (!validaEmail($(e.target).val())) {

            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'E-mail inválido.');

        } else {
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');

            return true;
        }

    });

    $('#inputCep').mask('00000-000').focusout(function (e) {
        validaCep(e.target);
    });

    $("#inputEndereco").focusout(function (e) {

        if ($(e.target).val() == "") {
            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'Por favor digite o endereço.');

        } else {
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');

            return true;
        }

    });

    $('#inputNumero').mask('000000').focusout(function(e){

        if ($(e.target).val() == "") {
            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'Por favor digite o número.');

        } else {
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');

            return true;
        }

    });

    $("#inputBairro").focusout(function (e) {

        if ($(e.target).val() == "") {
            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'Por favor digite o bairro.');

        } else {
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');

            return true;
        }

    });

    $("#inputCidade").focusout(function (e) {

        if ($(e.target).val() == "") {
            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'Por favor digite a cidade.');

        } else {
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');

            return true;
        }

    });

    $('#inputAno').mask('0000').focusout(function(e){

        if ($(e.target).val() == "") {
            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'Por favor digite o módulo/ano.');

        } else {
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');

            return true;
        }

    });

    // Quando tirarmos o foco do campo senha, verifica se a senha é válida
    $('#inputSenha').focusout(function (e) {
        validaSenha($(e.target).val());
    })

    // Quando tirarmos o foco do campo confirmação de senha, verifica se ela é válida
    $('#inputConfirmarSenha').focusout(function (e) {
        validaConfirmacaoSenha($('#inputSenha').val(), $(e.target).val());
    })

    /*$('#formCadastro').submit(function (evento) {

        // Pausa a submissão do formulário
        evento.preventDefault();

        if (validaSenha($('#inputSenha').val()) && validaConfirmacaoSenha($('#inputSenha').val(), $('#inputConfirmarSenha').val()) && validaRA($('#inputRA').val()) && validaCpf($('#inputCpf').val()) && validaTelefone($('#inputTelefone').val()) && $('#inputCep').val().length == '9' && validaEmail($('#inputEmail').val()) && validaNome($('#inputNome').val())) {

            // Submete o formulário
            this.submit();

        } else {
            
            // Limpa os campos de senha
            $('#inputSenha').val('');
            $('#inputConfirmarSenha').val('');
        }

    });*/
});


function salvarConta() {
    if (validaSenha($('#inputSenha').val()) && validaConfirmacaoSenha($('#inputSenha').val(), $('#inputConfirmarSenha').val()) && validaCpf($('#inputCpf').val()) && validaTelefone($('#inputTelefone').val()) && $('#inputCep').val().length == '9' && validaEmail($('#inputEmail').val())) {
        $.post('cadastroValidar.php', {
            nome: $('#inputNome').val(),
            cpf: $('#inputCpf').val(),
            rg: $('#inputRg').val(),
            telefone: $('#inputTelefone').val(),
            dataNascimento: $('#inputDataNascimento').val(),
            email: $('#inputEmail').val(),
            cep: $('#inputCep').val(),
            endereco: $('#inputEndereco').val(),
            numero: $('#inputNumero').val(),
            complemento: $('#inputComplemento').val(),
            bairro: $('#inputBairro').val(),
            estado: $('#selectEstado').val(),
            cidade: $('#inputCidade').val(),
            ra: $('#inputRA').val(),
            curso: $('#selectCurso').val(),
            periodoAno: $('#inputAno').val(),
            campus: $('#selectCampus').val(),
            senha: $('#inputSenha').val()
        }, function (retorno) {
            console.log("retorno " + retorno);
            if (retorno == "true") {
                window.alert("Conta cadastrada com sucesso!");
                location.href="login.php";
            } else if (retorno == "false duplicado") {
                $('#inputRA').addClass('form-invalido');
                tooltip($('#inputRA'), 'O RA digitado já foi registrado!.');
                $('#inputRA').val('');
                $('#inputSenha').val('');
                $('#inputConfirmarSenha').val(''); 
            } else {
                window.alert("Erro no cadastro. Contate o Administrador")
            }
        });

    } else {

        // Limpa os campos de senha
        $('#inputSenha').val('');
        $('#inputConfirmarSenha').val('');
    }
}