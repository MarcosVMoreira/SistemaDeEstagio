$(document).ready(function () {

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

    $('#inputCep').mask('00000-000').focusout(function (e) {
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

    function calculaTerminoEstagio() {

        var dataInicio = '';
        if (/([12]\d{3}-(0[1-9]|[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]|[1-9]))/.test($('#inputDataInicioEstagio').val())) {
            var dateArray = $('#inputDataInicioEstagio').val().split('-');
            dataInicio = dateArray[0] + '-' + dateArray[1] + '-' + dateArray[2];
        }

        var cargaHorariaMax = $('#inputCargaHorariaMax').val().replace('/\D/g', '');

        var diasTrabalho = '';
        var horasDia = '';

        if ($('#checkSegunda').prop('checked')) {
            var horas = $('#horasSegunda').val();
            if (/([01]?[0-9]|2[0-3]):[0-5][0-9]/g.test(horas)) {
                var aux = horas.split(':');
                horasDia += ((horasDia.length == 0) ? '' : ',') + (parseFloat(aux[0]) + parseFloat(((/\d{2}/.test(aux[1]) ? aux[1] : 0) / 60))).toFixed(2);
            }
            diasTrabalho += (diasTrabalho.length == 0) ? '1' : ',1';
        }

        if ($('#checkTerca').prop('checked')) {
            var horas = $('#horasTerca').val();
            if (/([01]?[0-9]|2[0-3]):[0-5][0-9]/g.test(horas)) {
                var aux = horas.split(':');
                horasDia += ((horasDia.length == 0) ? '' : ',') + (parseFloat(aux[0]) + parseFloat(((/\d{2}/.test(aux[1]) ? aux[1] : 0) / 60))).toFixed(2);
            }
            diasTrabalho += (diasTrabalho.length == 0) ? '2' : ',2';
        }

        if ($('#checkQuarta').prop('checked')) {
            var horas = $('#horasQuarta').val();
            if (/([01]?[0-9]|2[0-3]):[0-5][0-9]/g.test(horas)) {
                var aux = horas.split(':');
                horasDia += ((horasDia.length == 0) ? '' : ',') + (parseFloat(aux[0]) + parseFloat(((/\d{2}/.test(aux[1]) ? aux[1] : 0) / 60))).toFixed(2);
            }
            diasTrabalho += (diasTrabalho.length == 0) ? '3' : ',3';
        }

        if ($('#checkQuinta').prop('checked')) {
            var horas = $('#horasQuinta').val();
            if (/([01]?[0-9]|2[0-3]):[0-5][0-9]/g.test(horas)) {
                var aux = horas.split(':');
                horasDia += ((horasDia.length == 0) ? '' : ',') + (parseFloat(aux[0]) + parseFloat(((/\d{2}/.test(aux[1]) ? aux[1] : 0) / 60))).toFixed(2);
            }
            diasTrabalho += (diasTrabalho.length == 0) ? '4' : ',4';
        }

        if ($('#checkSexta').prop('checked')) {
            var horas = $('#horasSexta').val();
            if (/([01]?[0-9]|2[0-3]):[0-5][0-9]/g.test(horas)) {
                var aux = horas.split(':');
                horasDia += ((horasDia.length == 0) ? '' : ',') + (parseFloat(aux[0]) + parseFloat(((/\d{2}/.test(aux[1]) ? aux[1] : 0) / 60))).toFixed(2);
            }
            diasTrabalho += (diasTrabalho.length == 0) ? '5' : ',5';
        }

        if ($('#checkSabado').prop('checked')) {
            var horas = $('#horasSabado').val();
            if (/([01]?[0-9]|2[0-3]):[0-5][0-9]/g.test(horas)) {
                var aux = horas.split(':');
                horasDia += ((horasDia.length == 0) ? '' : ',') + (parseFloat(aux[0]) + parseFloat(((/\d{2}/.test(aux[1]) ? aux[1] : 0) / 60))).toFixed(2);
            }
            diasTrabalho += (diasTrabalho.length == 0) ? '6' : ',6';
        }

        if (cargaHorariaMax != '') {

            /*
            console.log('Chamando PHP');
            console.log('Data de início: ' + dataInicio);
            console.log('Dias de trabalho: ' + diasTrabalho);
            console.log('Horas por dia: ' + horasDia);
            console.log('Carga horaria total: ' + cargaHorariaMax);
            */

            $.post('ajax/calculoFimEstagio.php', {
                dataInicioEstagio: dataInicio,
                diasDeTrabalho: diasTrabalho,
                horasPorDia: horasDia,
                cargaHorariaTotal: cargaHorariaMax
            }, function (retorno) {
                $('#inputDataFimEstagio').val(retorno);
            });

        }
    }

    
$('#radioRemunerado').change(function () {
    $('#inputCargaHorariaMax').prop("disabled", false);
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
    $('#inputCargaHorariaMax').val("");
    $('#inputCargaHorariaMax').prop("disabled", true);
    $('#divSeguro').remove();
    $('#divApolice').remove();
    $('#checkboxValeTransporte').prop("checked", false);
    $('#checkboxValeTransporte').prop("disabled", false);
    $('#inputValorBolsa').prop("required", false);
});

$('#radioFixa').change(function () {

    $('#inputDataFimEstagio').val("");
    $('#inputDataFimEstagio').prop("disabled", true);
    $('#campoCargaHoraria').append('<div class="col-sm-12 col-md-3" id="divDiasTrabalhados">'+
    '<div class="row" id="diasTrabalhados">Dias trabalhados</div>'+
     '<div class="form-check" style="margin-bottom: 10px; margin-top: 10px;">'+
            '<input class="form-check-input" type="checkbox" value="" id="checkSegunda">'+
            '<label class="form-check-label" for="defaultCheck1">'+
               ' Segunda-feira'+
            '</label>'+
        '</div>'+
        '<div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">'+
            '<input class="form-check-input" type="checkbox" value="" id="checkTerca">'+
            '<label class="form-check-label" for="defaultCheck1">'+
                'Terça-feira'+
            '</label>'+
        '</div>'+
        '<div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">'+
            '<input class="form-check-input" type="checkbox" value="" id="checkQuarta">'+
            '<label class="form-check-label" for="defaultCheck1">'+
                'Quarta-feira'+
            '</label>'+
        '</div>'+
        '<div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">'+
            '<input class="form-check-input" type="checkbox" value="" id="checkQuinta" >'+
            '<label class="form-check-label" for="defaultCheck1">'+
                'Quinta-feira'+
            '</label>'+
        '</div>'+
        '<div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">'+
            '<input class="form-check-input" type="checkbox" value="" id="checkSexta">'+
            '<label class="form-check-label" for="defaultCheck1">'+
                'Sexta-feira'+
            '</label>'+
        '</div>'+
        '<div class="form-check" style="margin-bottom: 10px; margin-top: 32px;">'+
            '<input class="form-check-input" type="checkbox" value="" id="checkSabado">'+
            '<label class="form-check-label" for="defaultCheck1">'+
                'Sábado'+
            '</label>'+
        '</div>'+
'</div>'+

'<div class="col-sm-12 col-md-2" id="divHorasTrabalhadas">'+
    '<div class="row">Horas trabalhadas</div>'+
    '<div id="horarioEntrada">'+
        '<div class="form-group">'+
            '<input type="time" class="form-control" id="horasSegunda" disabled>'+
        '</div>'+
        '<div class="form-group">'+
            '<input type="time" class="form-control" id="horasTerca" disabled>'+
        '</div>'+
        '<div class="form-group">'+
            '<input type="time" class="form-control" id="horasQuarta" disabled>'+
        '</div>'+
        '<div class="form-group">'+
            '<input type="time" class="form-control" id="horasQuinta" disabled>'+
        '</div>'+
        '<div class="form-group">'+
            '<input type="time" class="form-control" id="horasSexta" disabled>'+
        '</div>'+
        '<div class="form-group">'+
            '<input type="time" class="form-control" id="horasSabado" disabled>'+
        '</div>'+
    '</div>'+
'</div>');
    $('#horasSegunda').on();
});


$('#radioVariavel').change(function () {
    $('#inputDataFimEstagio').prop("disabled", false);
    $('#divDiasTrabalhados').remove();
    $('#divHorasTrabalhadas').remove();
});


$("#campoCargaHoraria").on("click", "#checkSegunda", function(){
    calculaTerminoEstagio();
    if ($(this).prop("checked")){
        $('#horasSegunda').prop("disabled", false);
        $("#campoCargaHoraria").on("focusout", "#horasSegunda", function(){
            calculaTerminoEstagio();
        });
    }else {
        $('#horasSegunda').val("");
        $('#horasSegunda').prop("disabled", true); 
    } 
});

$("#campoCargaHoraria").on("click", "#checkTerca", function(){
    calculaTerminoEstagio();
    if ($(this).prop("checked")){
        $('#horasTerca').prop("disabled", false); 
        $("#campoCargaHoraria").on("focusout", "#horasTerca", function(){
            calculaTerminoEstagio();
        });
    } else {
        $('#horasTerca').val("");
        $('#horasTerca').prop("disabled", true); 
    } 
});

$("#campoCargaHoraria").on("click", "#checkQuarta", function(){
    calculaTerminoEstagio();
    if ($(this).prop("checked")){
        $('#horasQuarta').prop("disabled", false); 
        $("#campoCargaHoraria").on("focusout", "#horasQuarta", function(){
            calculaTerminoEstagio();
        });
    } else {
        $('#horasQuarta').val("");
        $('#horasQuarta').prop("disabled", true); 
    } 
});

$("#campoCargaHoraria").on("click", "#checkQuinta", function(){
    calculaTerminoEstagio();
    if ($(this).prop("checked")){
        $('#horasQuinta').prop("disabled", false); 
        $("#campoCargaHoraria").on("focusout", "#horasQuinta", function(){
            calculaTerminoEstagio();
        });
    } else {
        $('#horasQuinta').val("");
        $('#horasQuinta').prop("disabled", true); 
    } 
});

$("#campoCargaHoraria").on("click", "#checkSexta", function(){
    calculaTerminoEstagio();
    if ($(this).prop("checked")){
        $('#horasSexta').prop("disabled", false); 
        $("#campoCargaHoraria").on("focusout", "#horasSexta", function(){
            calculaTerminoEstagio();
        });
    } else {
        $('#horasSexta').val("");
        $('#horasSexta').prop("disabled", true); 
    } 
});

$("#campoCargaHoraria").on("click", "#checkSabado", function(){
    calculaTerminoEstagio();
    if ($(this).prop("checked")){
        $('#horasSabado').prop("disabled", false); 
        $("#campoCargaHoraria").on("focusout", "#horasSabado", function(){
            calculaTerminoEstagio();
        });
    } else {
        $('#horasSabado').val("");
        $('#horasSabado').prop("disabled", true); 
    } 
});

});


/*
$('#checkSegunda').change(function (){
    if ($(this).prop("checked")){
        $('#horasSegunda').prop("disabled", false); 
    } else {
        $('#horasSegunda').val("");
        $('#horasSegunda').prop("disabled", true);
    }
});


$('#checkTerca').change(function (){
    if ($(this).prop("checked")){
        $('#horasTerca').prop("disabled", false); 
    } else {
        $('#horasTerca').val("");
        $('#horasTerca').prop("disabled", true); 
    }
});


$('#checkQuarta').change(function (){
    if ($(this).prop("checked")){
        $('#horasQuarta').prop("disabled", false); 
    } else {
        $('#horasQuarta').val("");
        $('#horasQuarta').prop("disabled", true);
    }
});

$('#checkQuinta').change(function () {
    if ($(this).prop("checked")) {
        $('#horasQuinta').prop("disabled", false);
    } else {
        $('#horasQuinta').val("");
        $('#horasQuinta').prop("disabled", true);
    }
});

$('#checkSexta').change(function () {
    if ($(this).prop("checked")) {
        $('#horasSexta').prop("disabled", false);
    } else {
        $('#horasSexta').val("");
        $('#horasSexta').prop("disabled", true);
    }
});

$('#checkSabado').change(function () {
    if ($(this).prop("checked")) {
        $('#horasSabado').prop("disabled", false);
    } else {
        $('#horasSabado').val("");
        $('#horasSabado').prop("disabled", true);
    }
});*/