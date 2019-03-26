function validaNome() {
    
    if ($('#inputNome').val() == ''){
        
        ($('#inputNome').addClass('form-invalido'));
        
        tooltip($('#inputNome'), 'Este campo não pode ficar vazio.');
        
    } else {
        
        $('#inputNome').removeClass('form-invalido');
        
        $('#inputNome').tooltip('disable');
        
        return true;
    }
    
}

function validaSenha() {

    if ($('#inputSenha').val().length < 8) {

        $('#inputSenha').addClass('form-invalido');

        tooltip($('#inputSenha'), 'A senha deve possuir mais de oito dígitos.');

    } else {
        $('#inputSenha').removeClass('form-invalido');

        $('#inputSenha').tooltip('disable');

        return true;
    }
}

function validaConfirmacaoSenha() {

    if ($('#inputConfirmarSenha').val() != $('#inputSenha').val()) {

        $('#inputSenha').addClass('form-invalido');
        $('#inputConfirmarSenha').addClass('form-invalido');

        tooltip($('#inputConfirmarSenha'), 'A confirmação de senha deve ser igual à senha.');

    } else {
        $('#inputConfirmarSenha').removeClass('form-invalido');
        $('#inputSenha').removeClass('form-invalido');

        $('#inputConfirmarSenha').tooltip('disable');
        $('#inputSenha').tooltip('disable');

        return true;
    }
}

$(document).ready(function () {
    
    $('#inputNome').focusout(function () {
        validaNome();
    })
    
    $('#inputCpf').mask('000.000.000-00').focusout(function (e) {

        if(!validaCpf($(e.target).val())) {
            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'CPF inválido.');
            
        } else {
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');

            return true;
        }
    })

    $("#inputTelefone").mask("(00) 00000-0000").focusout(function(e){
        
        if (!validaTelefone($(e.target).val())){
            
            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'CPF inválido.');
            
        } else {
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');

            return true;
        }
        
    });
    
    $("#inputEmail").focusout(function(e){
        
        if (!validaEmail($(e.target).val())){
            
            $(e.target).addClass('form-invalido');

            tooltip($(e.target), 'E-mail inválido.');
            
        } else {
            $(e.target).removeClass('form-invalido');

            $(e.target).tooltip('disable');

            return true;
        }
        
    });
    
    $('#inputCep').mask('00000-000').focusout(function (e){
        validaCep(e.target);
    });    
    
    // Quando tirarmos o foco do campo senha, verifica se a senha é válida
    $('#inputSenha').focusout(function () {
        validaSenha();
    })

    // Quando tirarmos o foco do campo confirmação de senha, verifica se ela é válida
    $('#inputConfirmarSenha').focusout(function () {
        validaConfirmacaoSenha();
    })

    $('#formCadastro').submit(function (evento) {

        // Pausa a submissão do formulário
        evento.preventDefault();

        if (validaSenha() && validaConfirmacaoSenha() && validaNome() && validaCpf($('#inputCpf').val()) && validaTelefone($('#inputTelefone').val())
           && $('#inputCep').val().length == '9' && validaEmail($('#inputEmail').val())) {
            
            //console.log("certo");

            // Submete o formulário
            this.submit();

        } else {

            console.log("deu ruim");
            // Limpa os campos de senha
            $('#inputSenha').val('');
            $('#inputConfirmarSenha').val('');
        }

    })
});
