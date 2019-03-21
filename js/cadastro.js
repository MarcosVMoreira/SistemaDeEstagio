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
        $('#inputSenha').tooltip('dispose');

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
        $('#inputConfirmarSenha').tooltip('dispose');

        return true;
    }
}

$(document).ready(function () {

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

        if (validaSenha() && validaConfirmacaoSenha()) {
            
            console.log("certo");

            // Submete o formulário
            this.submit();

        } else {

            console.log("merda");
            
            // Limpa os campos de senha
            $('#inputSenha').val('');
            $('#inputConfirmarSenha').val('');
        }

    })
});
