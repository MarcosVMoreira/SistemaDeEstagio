$(document).ready(function () {
    /*
    test("cpf não preenchido com borda vermelha", function () {
        $('#inputCpf').focus();
        $('#inputNome').focus();
        ok($('#inputCpf').css('border') == '1px solid red', 'A borda está vermelha');
    });
    */
    
    QUnit.test('validaSenha existe', function (assert) {
        assert.ok(validaSenha, 'validaSenha existe');
    });

    QUnit.test('validaSenha é uma função', function (assert) {
        assert.ok(typeof validaSenha === 'function', 'validaSenha é função');
    });
    
    QUnit.test('validaSenha funciona', function (assert) {

        assert.equal(validaSenha('12345678'), true, 'senha válida, validaSenha funcionou');
        assert.equal(validaSenha('87654321'), true, 'senha válida, validaSenha funcionou');
        assert.equal(validaSenha('1234567'), false, 'senha inválida, validaSenha funcionou');
        
    });
    
    QUnit.test('validaConfirmacaoSenha existe', function (assert) {
        assert.ok(validaConfirmacaoSenha, 'validaConfirmacaoSenha existe');
    });

    QUnit.test('validaConfirmacaoSenha é uma função', function (assert) {
        assert.ok(typeof validaConfirmacaoSenha === 'function', 'validaConfirmacaoSenha é função');
    });
    
    QUnit.test('validaConfirmacaoSenha funciona', function (assert) {

        assert.equal(validaConfirmacaoSenha('12345678', '12345678'), true, 'senhas válidas, validaConfirmacaoSenha funcionou');
        assert.equal(validaConfirmacaoSenha('87654321', '87654321'), true, 'senhas válidas, validaConfirmacaoSenha funcionou');
        assert.equal(validaConfirmacaoSenha('12345678', '87654321'), false, 'senhas inválidas, validaConfirmacaoSenha funcionou');
        
    });
    
});
