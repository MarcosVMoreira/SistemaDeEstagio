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
        
        pesquisaCep('13141-010', function(dados) {
            assert.equal(dados.logradouro, 'Avenida José Alvaro Delmonde');
            done();
        });
        
        pesquisaCep('37704-350', function(dados) {
            assert.equal(dados.logradouro, 'Rua Bororós');
            done2();
        });
        
        pesquisaCep('00000-000', function(dados) {
            assert.equal(dados.logradouro, undefined);
            done3();
        });
    });

});
