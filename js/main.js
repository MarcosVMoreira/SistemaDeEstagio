
function validaCep(id) {

    var campoEndereco = $(id).parents('.form-row').find('input[id^=inputEndereco]');
    var campoNumero = $(id).parents('.form-row').nextAll().find('input[id^=inputNumero]');
    var campoBairro = $(id).parents('.form-row').nextAll().find('input[id^=inputBairro]');
    var campoCidade = $(id).parents('.form-row').nextAll().find('input[id^=inputCidade]');
    var selectEstado = $(id).parents('.form-row').nextAll().find('select[name^=selectEstado]');
    var campoCep = $(id);

    campoEndereco.val('...');
    campoBairro.val('...');
    campoCidade.val('...');

    pesquisaCep($(id).val(), function (dados) {
        if (!dados.erro) {
            campoEndereco.val(dados.logradouro);
            campoBairro.val(dados.bairro);
            campoCidade.val(dados.localidade);
            selectEstado.val(dados.uf);

            $(campoCep).removeClass('form-invalido');

            $(campoCep).tooltip('disable');

            campoNumero.focus();

        } else {
            campoEndereco.val('');
            campoBairro.val('');
            campoCidade.val('');
            selectEstado.val('AC');

            $(campoCep).addClass('form-invalido');
            tooltip(campoCep, 'CEP inválido.');
        }
    });

}

function pesquisaCep(cep, callback) {
    cep = cep.replace(/\D/g, '');

    if (cep.length != 8) {
        callback({
            erro: 'Quantidade de dígitos inválida'
        });

    } else {
        $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

            if (!("erro" in dados)) {
                callback(dados); // dados possui dados.logradouro, dados.bairro, dados.localidade, dados.uf e dados.ibge

            } else {
                callback({
                    erro: 'CEP não encontrado'
                });
            }
        });
    }
}

// Funções que podem vir a ser utilizadas em qualquer página do projeto

// Exibe uma tooltip abaixo do elemento
function tooltip(elemento, texto) {
    elemento.tooltip('dispose');
    elemento.tooltip({
        placement: 'bottom',
        html: true,
        title: '<i class="fas fa-exclamation"></i>  ' + texto
    });
    elemento.tooltip('enable');
    elemento.tooltip('show');
}

// Retorna true se o CPF passado for válido. Passar o valor, sem se importar com a máscara ( Ex.: $('#inputCpf').val() )
function validaCpf(cpf) {

    var numeroCpf = cpf.replace(/[^0-9]/g, '');

    if (numeroCpf.length != 11) {
        return false;
    }

    if (numeroCpf == "00000000000" || numeroCpf == "11111111111" || numeroCpf == "22222222222" || numeroCpf == "33333333333"
        || numeroCpf == "44444444444" || numeroCpf == "55555555555" || numeroCpf == "66666666666" || numeroCpf == "77777777777"
        || numeroCpf == "88888888888" || numeroCpf == "99999999999") {

        return false;
    }

    // Calculando o primeiro dígito verificador
    var x1 = 10 * numeroCpf.substr(0, 1);
    var x2 = 9 * numeroCpf.substr(1, 1);
    var x3 = 8 * numeroCpf.substr(2, 1);
    var x4 = 7 * numeroCpf.substr(3, 1);
    var x5 = 6 * numeroCpf.substr(4, 1);
    var x6 = 5 * numeroCpf.substr(5, 1);
    var x7 = 4 * numeroCpf.substr(6, 1);
    var x8 = 3 * numeroCpf.substr(7, 1);
    var x9 = 2 * numeroCpf.substr(8, 1);

    var soma = x1 + x2 + x3 + x4 + x5 + x6 + x7 + x8 + x9;
    var resto = soma % 11;

    var primeiroDigitoVerificador;
    if (resto < 2) {
        primeiroDigitoVerificador = 0;
    } else {
        primeiroDigitoVerificador = 11 - resto;
    }

    // Calculando o segundo dígito verificador
    x1 = 11 * numeroCpf.substr(0, 1);
    x2 = 10 * numeroCpf.substr(1, 1);
    x3 = 9 * numeroCpf.substr(2, 1);
    x4 = 8 * numeroCpf.substr(3, 1);
    x5 = 7 * numeroCpf.substr(4, 1);
    x6 = 6 * numeroCpf.substr(5, 1);
    x7 = 5 * numeroCpf.substr(6, 1);
    x8 = 4 * numeroCpf.substr(7, 1);
    x9 = 3 * numeroCpf.substr(8, 1);
    var x10 = 2 * primeiroDigitoVerificador;

    soma = x1 + x2 + x3 + x4 + x5 + x6 + x7 + x8 + x9 + x10;
    resto = soma % 11;

    var segundoDigitoVerificador;
    if (resto < 2) {
        segundoDigitoVerificador = 0;
    } else {
        segundoDigitoVerificador = 11 - resto;
    }

    if (numeroCpf.substr(9, 2) == primeiroDigitoVerificador.toString() + segundoDigitoVerificador.toString()) {
        return true;
    }

    return false;
}

// Returna true se o CNPJ passado for válido. Passar o valor, sem se importar com a máscara ( Ex.: $('#inputCnpj').val() )
function validaCnpj(cnpj) {

    var numeroCnpj = cnpj.replace(/[^0-9]/g, '');

    if (numeroCnpj.length != 14) {
        return false;
    }

    // Calculando o primeiro dígito verificador
    var x1 = 5 * numeroCnpj.substr(0, 1);
    var x2 = 4 * numeroCnpj.substr(1, 1);
    var x3 = 3 * numeroCnpj.substr(2, 1);
    var x4 = 2 * numeroCnpj.substr(3, 1);
    var x5 = 9 * numeroCnpj.substr(4, 1);
    var x6 = 8 * numeroCnpj.substr(5, 1);
    var x7 = 7 * numeroCnpj.substr(6, 1);
    var x8 = 6 * numeroCnpj.substr(7, 1);
    var x9 = 5 * numeroCnpj.substr(8, 1);
    var x10 = 4 * numeroCnpj.substr(9, 1);
    var x11 = 3 * numeroCnpj.substr(10, 1);
    var x12 = 2 * numeroCnpj.substr(11, 1);

    var soma = x1 + x2 + x3 + x4 + x5 + x6 + x7 + x8 + x9 + x10 + x11 + x12;
    var resto = soma % 11;

    var primeiroDigitoVerificador;
    if (resto < 2) {
        primeiroDigitoVerificador = 0;
    } else {
        primeiroDigitoVerificador = 11 - resto;
    }

    // Calculando o segundo dígito verificador
    x1 = 6 * numeroCnpj.substr(0, 1);
    x2 = 5 * numeroCnpj.substr(1, 1);
    x3 = 4 * numeroCnpj.substr(2, 1);
    x4 = 3 * numeroCnpj.substr(3, 1);
    x5 = 2 * numeroCnpj.substr(4, 1);
    x6 = 9 * numeroCnpj.substr(5, 1);
    x7 = 8 * numeroCnpj.substr(6, 1);
    x8 = 7 * numeroCnpj.substr(7, 1);
    x9 = 6 * numeroCnpj.substr(8, 1);
    x10 = 5 * numeroCnpj.substr(9, 1);
    x11 = 4 * numeroCnpj.substr(10, 1);
    x12 = 3 * numeroCnpj.substr(11, 1);
    var x13 = 2 * primeiroDigitoVerificador;

    soma = x1 + x2 + x3 + x4 + x5 + x6 + x7 + x8 + x9 + x10 + x11 + x12 + x13;
    resto = soma % 11;

    var segundoDigitoVerificador;
    if (resto < 2) {
        segundoDigitoVerificador = 0;
    } else {
        segundoDigitoVerificador = 11 - resto;
    }

    if (numeroCnpj.substr(12, 2) == primeiroDigitoVerificador.toString() + segundoDigitoVerificador.toString()) {
        return true;
    } else {
        return false;
    }
}

// Retorna true se o email passado for válido
function validaEmail(email) {

    var emailFilter = /^.+@.+\..{2,}$/;
    var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/;

    // condição
    if (!(emailFilter.test(email)) || email.match(illegalChars)) {
        return false;
    } else {
        return true;
    }
}

function validaRA(ra){
    if(ra.length!=11) return false;
    else return true;
}

function validaTelefone(telefone) {

    var numeroTelefone = telefone.replace(/[^0-9]/g, '');
    if (numeroTelefone.length < 10) {
        return false;
    }
    return true;
}
function validaNome(nome){
    if(nome.indexOf(" ")==-1)return false
    else {
        var nomex=nome.split(" ");
        if(nomex[1].length==0||nomex[1]==null) return false;
        return true;
    }
}

function validaData(data) {

    if (/([12]\d{3}-(0[1-9]|[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]|[1-9]))/.test(data)) {
        return true;
    }
    return false;
}

/* Valida de  00:00 a 23:59 */
function validaHora(hora) {
    if (/(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]/.test(hora)) {
        return true;
    }
    return false;
}

/* Valida de 00:00 a 999:59 */
function validaCargaHoraria(hora) {
    if (/(\d{2}\d?):[0-5][0-9]/.test(hora)) {
        return true;
    }
    return false;
}