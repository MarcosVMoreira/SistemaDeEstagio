// Funções que podem vir a ser utilizadas em qualquer página do projeto

function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById("endereco").focus();
    document.getElementById('endereco').value = ("");
    document.getElementById("bairro").focus();
    document.getElementById('bairro').value = ("");
    document.getElementById("cidade").focus();
    document.getElementById('cidade').value = ("");
    document.getElementById("estado").focus();
    document.getElementById('estado').value = ("");
    document.getElementById("endereco").focus();
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById("endereco").focus();
        document.getElementById('endereco').value = (conteudo.logradouro);
        document.getElementById("bairro").focus();
        document.getElementById('bairro').value = (conteudo.bairro);
        document.getElementById("cidade").focus();
        document.getElementById('cidade').value = (conteudo.localidade);
        document.getElementById("estado").focus();
        document.getElementById('estado').value = (conteudo.uf);
        document.getElementById("endereco").focus();
    } //end if.
    else {
        //CEP não Encontrado.
        document.getElementById("cep").style.border = "1px solid #ff0000";
        document.getElementById("endereco").style.border = "1px solid #ff0000";
        document.getElementById("bairro").style.border = "1px solid #ff0000";
        document.getElementById("numero").style.border = "1px solid #ff0000";
        document.getElementById("cidade").style.border = "1px solid #ff0000";
        document.getElementById("estado").style.border = "1px solid #ff0000";
        document.getElementById("submit").disabled = true;
        limpa_formulário_cep();
    }
}

function pesquisacep(valor, form) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {
        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

            document.getElementById("cep").style.border = null;
            document.getElementById("endereco").style.border = null;
            document.getElementById("bairro").style.border = null;
            document.getElementById("numero").style.border = null;
            document.getElementById("cidade").style.border = null;
            document.getElementById("estado").style.border = null;

            //Verifica se outros campos são válidos para habilitar botão "Avançar".
            if (document.getElementById("nome").style.border != "1px solid rgb(255, 0, 0)" &&
                document.getElementById("municipioNascimento").style.border != "1px solid rgb(255, 0, 0)" &&
                document.getElementById("nacionalidade").style.border != "1px solid rgb(255, 0, 0)" &&
                document.getElementById("estadoNascimento").style.border != "1px solid rgb(255, 0, 0)" &&
                document.getElementById("nomeMae").style.border != "1px solid rgb(255, 0, 0)" &&
                document.getElementById("nomePai").style.border != "1px solid rgb(255, 0, 0)" &&
                document.getElementById("endereco").style.border != "1px solid rgb(255, 0, 0)" &&
                document.getElementById("numero").style.border != "1px solid rgb(255, 0, 0)" &&
                document.getElementById("complemento").style.border != "1px solid rgb(255, 0, 0)" &&
                document.getElementById("bairro").style.border != "1px solid rgb(255, 0, 0)" &&
                document.getElementById("telefone").style.border != "1px solid rgb(255, 0, 0)" &&
                document.getElementById("email").style.border != "1px solid rgb(255, 0, 0)") {

                document.getElementById("submit").disabled = false;
            }

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById("endereco").focus();
            document.getElementById('endereco').value = "...";
            document.getElementById("bairro").focus();
            document.getElementById('bairro').value = "...";
            document.getElementById("cidade").focus();
            document.getElementById('cidade').value = "...";
            document.getElementById("estado").focus();
            document.getElementById('estado').value = "...";
            document.getElementById("numero").focus();


            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } else {
            //cep inválido, muda cores das bordas dos campos de endereço, desabilita botão "Avançar" e limpa formulário.
            document.getElementById("cep").style.border = "1px solid #ff0000";
            document.getElementById("endereco").style.border = "1px solid #ff0000";
            document.getElementById("bairro").style.border = "1px solid #ff0000";
            document.getElementById("numero").style.border = "1px solid #ff0000";
            document.getElementById("cidade").style.border = "1px solid #ff0000";
            document.getElementById("estado").style.border = "1px solid #ff0000";
            document.getElementById("submit").disabled = true;
            limpa_formulário_cep();
            return 0;
        }
    } //end if.
    else {
        //cep sem valor, muda cores das bordas dos campos de endereço, desabilita botão "Avançar" e limpa formulário.
        document.getElementById("cep").style.border = "1px solid #ff0000";
        document.getElementById("endereco").style.border = "1px solid #ff0000";
        document.getElementById("bairro").style.border = "1px solid #ff0000";
        document.getElementById("numero").style.border = "1px solid #ff0000";
        document.getElementById("cidade").style.border = "1px solid #ff0000";
        document.getElementById("estado").style.border = "1px solid #ff0000";
        document.getElementById("submit").disabled = true;
        limpa_formulário_cep();
        return 0;
    }
}

// Exibe uma tooltip abaixo do elemento
function tooltip(elemento, texto) {
    elemento.tooltip({
        placement: 'bottom',
        html: true,
        title: '<i class="fas fa-exclamation"></i>  ' + texto
    });
    elemento.tooltip('enable');
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

function validaTelefone(telefone) {
    
    var numeroTelefone = telefone.replace(/[^0-9]/g, '');
    if (numeroTelefone.length < 10) {
        return false;
    }
    return true;
}
