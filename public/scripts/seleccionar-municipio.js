$(document).ready(function () {
    // Cargar provincias al seleccionar un departamento
    $('#departamento').on('change', function () {
        let departamentoId = $(this).val();
        $('#provincia').empty().append('<option value="">Seleccione una provincia</option>').prop('disabled', true);
        $('#municipio').empty().append('<option value="">Seleccione un municipio</option>').prop('disabled', true);

        if (departamentoId) {
            $.ajax({
                url: `/sadmin/provincias/${departamentoId}`,
                type: 'GET',
                
                success: function (data) {
                    console.log(data);
                    
                    $('#provincia').prop('disabled', false);
                    data.forEach(function (provincia) {
                        $('#provincia').append(`<option value="${provincia.id_provincia}">${provincia.provincia}</option>`);
                    });
                }
            });
        }
    });

    // Cargar municipios al seleccionar una provincia
    $('#provincia').on('change', function () {
        let provinciaId = $(this).val();
        $('#municipio').empty().append('<option value="">Seleccione un municipio</option>').prop('disabled', true);

        if (provinciaId) {
            $.ajax({
                url: `/sadmin/municipios/${provinciaId}`,
                type: 'GET',
                success: function (data) {
                    $('#municipio').prop('disabled', false);
                    data.forEach(function (municipio) {
                        $('#municipio').append(`<option value="${municipio.id_municipio}">${municipio.municipio}</option>`);
                    });
                }
            });
        }
    });
});