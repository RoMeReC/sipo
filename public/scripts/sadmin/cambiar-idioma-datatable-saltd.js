$(document).ready(function(){
    $('#sa-lista-tipo-documentos').DataTable({
        "language":{
            "search": "Buscar",
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "paginate": {
                "previus": "Anterior",
                "next": "Siguiente",
                "first": "Primero",
                "last": "Último",
            }
        },
        "sScrollX": '100%',
    });
});