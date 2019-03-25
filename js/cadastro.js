function validaNome() {
    
    // Verifica se o campo Nome está vazio
    if ($('#inputNome').val() == ''){
        
        // Muda a cor da borda para vermelho
        ($('#inputNome').addClass('form-invalido'));
        
        tooltip($('#inputNome'), 'Este campo não pode ficar vazio.');
        
    } else {
        
        // Nome válido, muda a cor da borda para a cor padrão
        $('#inputNome').removeClass('form-invalido');
        
        //Remove o tooltip
        $('#inputNome').tooltip('disable');
        
        return true;
    }
    
}

function validaSenha() {

    // Verificar se a senha possui menos de 8 dígitos
    if ($('#inputSenha').val().length < 8) {

        // Muda a cor da borda para vermelho
        $('#inputSenha').addClass('form-invalido');

        // Tooltip
        tooltip($('#inputSenha'), 'A senha deve possuir mais de oito dígitos.');

    } else {
        // Senha válida, muda a cor da borda para a cor padrão
        $('#inputSenha').removeClass('form-invalido');

        // Remove o tooltip
        $('#inputSenha').tooltip('disable');

        return true;
    }
}

function validaConfirmacaoSenha() {

    // Verifica se a confirmação de senha é igual a senha
    if ($('#inputConfirmarSenha').val() != $('#inputSenha').val()) {

        // Muda a cor das duas bordas para vermelho
        $('#inputSenha').addClass('form-invalido');
        $('#inputConfirmarSenha').addClass('form-invalido');

        // Tooltip
        tooltip($('#inputConfirmarSenha'), 'A confirmação de senha deve ser igual a senha.');

    } else {
        // Confirmação de senha válida
        $('#inputConfirmarSenha').removeClass('form-invalido');

        // Remove o tooltip
        $('#inputConfirmarSenha').tooltip('disable');

        return true;
    }
}

$(document).ready(function () {
    
    $('#inputCpf').mask('000.000.000-00');
    $("#inputTelefone").mask("(00) 00000-0000");
    $('#inputCep').mask('00000-000');
    
    // Quando tirarmos o foco do campo Nome, verifica se o nome é válido
    $('#inputNome').focusout(function () {
        validaNome();
    })
    
    // Quando tirarmos o foco do campo CPF, verifica se o cpf é válido
    $('#inputCpf').focusout(function (e) {

        if(!validaCpf($('#inputCpf').val())) {
            // Muda a cor da borda para vermelho
            $(e.target).addClass('form-invalido');

            // Tooltip
            tooltip($(e.target), 'CPF inválido.');
            
        } else {
            // CPF válido
            $(e.target).removeClass('form-invalido');

            // Remove o tooltip
            $(e.target).tooltip('disable');

            return true;
        }
    })
    
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

        if (validaSenha() && validaConfirmacaoSenha() && validaNome() && validaCpf($('#inputCpf').val())) {
            
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
