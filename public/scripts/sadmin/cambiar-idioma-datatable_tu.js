$(document).ready(function(){
    $('#lista-tipos-usuario').DataTable({
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