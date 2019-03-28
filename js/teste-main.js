$(document).ready(function () {

    QUnit.test('pesquisaCep existe', function (assert) {
        assert.ok(pesquisaCep, 'pesquisaCep existe');
    });

    QUnit.test('pesquisaCep é uma função', function (assert) {
        assert.ok(typeof pesquisaCep === 'function', 'pesquisaCep é função');
    });

    QUnit.test('pesquisaCep funciona', function (assert) {
        assert.expect(3);

        var done = assert.async();
        var done2 = assert.async();
        var done3 = assert.async();

        pesquisaCep('13141-010', function (dados) {
            assert.equal(dados.logradouro, 'Avenida José Alvaro Delmonde');
            done();
        });

        pesquisaCep('37704-350', function (dados) {
            assert.equal(dados.logradouro, 'Rua Bororós');
            done2();
        });

        pesquisaCep('00000-000', function (dados) {
            assert.equal(dados.logradouro, undefined, 'cep inválido, funcionou');
            done3();
        });
    });

    QUnit.test('tooltip funciona', function (assert) {
        tooltip($('#nome'), "Isto é uma tooltip");
        assert.ok($('body').find('.tooltip.fade.bs-tooltip-bottom.show'), 'Apareceu a tooltip');
    });

    QUnit.test('validaCpf funciona', function (assert) {
        assert.equal(validaCpf('45976334806'), true, 'validaCpf funcionou');
        assert.equal(validaCpf('123'), false, 'validaCpf funcionou, cpf inválido');
    });

    QUnit.test('validaCnpj funciona', function (assert) {
        assert.equal(validaCnpj('23643315000152'), true, 'validaCnpj funcionou');
        assert.equal(validaCnpj('123'), false, 'validaCnpj funcionou, cnpj inválido');
    });

    QUnit.test('validaEmail funciona', function (assert) {
        assert.equal(validaEmail('yuri@fernandes.com'), true, 'validaEmail funcionou');
        assert.equal(validaEmail('123'), false, 'validaEmail funcionou, email inválido');
    });

    QUnit.test('validaTelefone funciona', function (assert) {
        assert.equal(validaTelefone('3537141950'), true, 'validaTelefone funcionou');
        assert.equal(validaTelefone('35988367989'), true, 'validaTelefone funcionou');
        assert.equal(validaTelefone('123'), false, 'validaTelefone funcionou, telefone inválido');
    });
});
