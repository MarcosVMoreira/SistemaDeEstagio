$(document).ready(function () {

    $('#inputCpf').mask('000.000.000-00', {
        clearIfNotMatch: true
    });

    $("#inputTelefone").mask("(00) 00000-0000")
        .focusin(function (event) {
            telefoneFocusIn(event);
        })
        .focusout(function (event) {
            telefoneFocusOut(event);
        });

    $('#inputCep').mask('00000-000', {
        clearIfNotMatch: true
    });

    $("#inputTelefoneOrientador").mask("(00) 00000-0000")
        .focusin(function (event) {
            telefoneFocusIn(event);
        })
        .focusout(function (event) {
            telefoneFocusOut(event);
        });
    
    $('#inputCnpj').mask('00.000.000/0000-00', {
        clearIfNotMatch: true
    });
    
    $("#inputTelefoneEmpresa").mask("(00) 00000-0000")
        .focusin(function (event) {
            telefoneFocusIn(event);
        })
        .focusout(function (event) {
            telefoneFocusOut(event);
        });
    
    $('#inputCepEmpresa').mask('00000-000', {
        clearIfNotMatch: true
    });
    
    $("#inputTelefoneSupervisor").mask("(00) 00000-0000")
        .focusin(function (event) {
            telefoneFocusIn(event);
        })
        .focusout(function (event) {
            telefoneFocusOut(event);
        });
    
    $('#inputCpfSupervisor').mask('000.000.000-00', {
        clearIfNotMatch: true
    });
    
    $('#inputValorBolsa').mask("#.##0,00", {reverse: true});
});

function telefoneFocusIn(event) {
    var target, phone, element;
    target = (event.currentTarget) ? event.currentTarget : event.srcElement;
    element = $(target);
    element.unmask();
    element.mask("(00) 00000-0000");
}

function telefoneFocusOut(event) {
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
}
