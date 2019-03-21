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
