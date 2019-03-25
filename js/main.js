// Funções que podem vir a ser utilizadas em qualquer página do projeto

// Exibe uma tooltip abaixo do elemento
function tooltip(elemento, texto) {
    elemento.tooltip({
        placement: 'bottom',
        html: true,
        title: '<i class="fas fa-exclamation"></i>  ' + texto
    });
    elemento.tooltip('show');
}

// Returna true se o CPF passado for válido. Passar o valor, sem se importar com a máscara ( Ex.: $('#inputCpf').val() )
function validaCpf(cpf) {

    var numeroCpf = cpf.replace(/[^0-9]/g, '');

    if (numeroCpf.length != 11) {
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
    } else {
        return false;
    }
}