$(document).ready(function () {
    
    /*
    $('#inputNome').focusout(function () {
        validaNome();
    })
    */

    $('input[id^=inputCpf]').mask('000.000.000-00')
        .focusout(function (e) {
            if (!validaCpf($(e.target).val())) {

                // Muda a cor da borda para vermelho
                $(e.target).addClass('form-invalido');

                // Tooltip
                tooltip($(e.target), 'Digite um CPF válido.');

            } else {
                // CPF válido, muda a cor da borda para a cor padrão
                $(e.target).removeClass('form-invalido');

                // Remove o tooltip
                $(e.target).tooltip('disable');

                return true;
            }
        });

    $('input[id^=inputTelefone]').mask("(00) 00000-0000")
        .focusin(function (event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
            element = $(target);
            element.unmask();
            element.mask("(00) 00000-0000");
        })
        .focusout(function (event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
            phone = target.value.replace(/\D/g, '');
            element = $(target);
            element.unmask();
            if (phone.length > 10) {
                element.mask("(00) 00000-0000");
            } else {
                element.mask("(00) 0000-0000");
            }

            if (!validaTelefone(phone)) {
                $(target).addClass('form-invalido');
                tooltip($(target), 'Digite um telefone válido.');
            } else {
                $(target).removeClass('form-invalido');
                $(target).tooltip('disable');
            }
        });

    $("input[type=email]").focusout(function (e) {
        if (!validaEmail($(e.target).val())) {
            $(e.target).addClass('form-invalido');
            tooltip($(e.target), 'Digite um email válido.');
        } else {
            $(e.target).removeClass('form-invalido');
            $(e.target).tooltip('disable');
        }
    });
    
    $('#inputCep').mask('00000-000').focusout(function (e){
        validaCep(e.target);
    });

    $('#inputCnpj').mask('00.000.000/0000-00')
        .focusout(function (e) {
            if (!validaCnpj($(e.target).val())) {
                $(e.target).addClass('form-invalido');
                tooltip($(e.target), 'Digite um CNPJ válido.');

            } else {
                $(e.target).removeClass('form-invalido');
                $(e.target).tooltip('disable');
                return true;
            };
        });

    $('#inputValorBolsa').mask("#.##0,00", {
        reverse: true
    });

    $('#formCadastro').submit(function (evento) {

        // Pausa a submissão do formulário
        evento.preventDefault();

        if (/* validaNome() && */ validaCpf($('#inputCpf').val()) && validaTelefone($('#inputTelefone').val()) &&
            $('#inputCep').val().length == '9' && validaEmail($('#inputEmail').val())) {

            //console.log("certo");

            // Submete o formulário
            this.submit();

        } else {

            console.log("deu ruim");
            // Limpa os campos de senha
            $('#inputSenha').val('');
            $('#inputConfirmarSenha').val('');
        }

    });

});

$('#radioRemunerado').change(function () {
    console.log("batata222");
    $('#divSeguro1').append('<div id="divSeguro" class="col-sm-12 col-md-8">' +
        '<div class="form-group">' +
        '<label for="inputCompanhiaSeguro">Companhia de seguro</label>' +
        '<input type="text" class="form-control" id="inputCompanhiaSeguro">' +
        '</div>' +
        '</div>'

        +
        '<div id="divApolice" class="col-sm-12 col-md-4">' +
        '<div class="form-group">' +
        '<label for="inputNumeroApolice">Número da apólice</label>' +
        '<input type="text" class="form-control" id="inputNumeroApolice">' +
        '</div>' +
        '</div>');
    $('#checkboxValeTransporte').prop("checked", true);
    $('#checkboxValeTransporte').prop("disabled", true);
    $('#inputValorBolsa').prop("required", true);
});

$('#radioNaoRemunerado').change(function () {
    console.log("batata");
    $('#divSeguro').remove();
    $('#divApolice').remove();
    $('#checkboxValeTransporte').prop("checked", false);
    $('#checkboxValeTransporte').prop("disabled", false);
    $('#inputValorBolsa').prop("required", false);
});

$('#radioFixa').change(function () {
    $('#inputDataFimEstagio').prop("disabled", true);
    $('#divHorarios').append('<div id="horarioEntrada" class="col-sm-12 col-md-3">' +
        '<div class="form-group">' +
        '<label for="inputHorasDiarias">Horário de entrada</label>' +
        '<input type="time" class="form-control" id="inputHorasDiarias">' +
        '</div>' +
        '</div>'

        +
        '<div id="horarioSaida" class="col-sm-12 col-md-3">' +
        '<div class="form-group">' +
        '<label for="inputHorasDiarias">Horário de saída</label>' +
        '<input type="time" class="form-control" id="inputHorasDiarias">' +
        '</div>' +
        '</div>'

        +
        '<div id="horasDiarias" class="col-sm-12 col-md-3">' +
        '<div class="form-group">' +
        '<label for="inputHorasDiarias">Horas diárias</label>' +
        '<input type="time" class="form-control" id="inputHorasDiarias">' +
        '</div>' +
        '</div>'

        +
        '<div id="horasSemanais" class="col-sm-12 col-md-3">' +
        '<div class="form-group">' +
        '<label for="inputHorasSemanais">Horas semanais</label>' +
        '<input type="time" class="form-control" id="inputHorasSemanais">' +
        '</div>' +
        '</div>');

});

$('#radioVariavel').change(function () {
    $('#inputDataFimEstagio').prop("disabled", false);
    $('#horarioEntrada').remove();
    $('#horarioSaida').remove();
    $('#horasDiarias').remove();
    $('#horasSemanais').remove();
});
