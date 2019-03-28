$(document).ready(function () {

    test("cpf não preenchido com borda vermelha", function () {
        $('#inputCpf').focus();
        $('#inputNome').focus();
        ok($('#inputCpf').css('border') == '1px solid red', 'A borda está vermelha');
    });

});
