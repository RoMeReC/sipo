$(document).ready(function () {
    // Cargar provincias al seleccionar un departamento
    $('#departamento-nuevo').on('change', function () {
        let departamentoId = $(this).val();
        console.log('Datos:', { departamentoId});
        $('#provincia-nuevo').empty().append('<option value="">Seleccione una provincia</option>').prop('disabled', true);
        $('#municipio-nuevo').empty().append('<option value="">Seleccione un municipio</option>').prop('disabled', true);

        if (departamentoId) {
            $.ajax({
                url: `/admin/provincias/${departamentoId}`,
                type: 'GET',
                
                success: function (data) {
                    console.log(data);
                    
                    $('#provincia-nuevo').prop('disabled', false);
                    data.forEach(function (provincia) {
                        $('#provincia-nuevo').append(`<option value="${provincia.id_provincia}">${provincia.provincia}</option>`);
                    });
                }
            });
        }
    });

    // Cargar municipios al seleccionar una provincia
    $('#provincia-nuevo').on('change', function () {
        let provinciaId = $(this).val();
        $('#municipio-nuevo').empty().append('<option value="">Seleccione un municipio</option>').prop('disabled', true);

        if (provinciaId) {
            $.ajax({
                url: `/admin/municipios/${provinciaId}`,
                type: 'GET',
                success: function (data) {
                    $('#municipio-nuevo').prop('disabled', false);
                    data.forEach(function (municipio) {
                        $('#municipio-nuevo').append(`<option value="${municipio.id_municipio}">${municipio.municipio}</option>`);
                    });
                }
            });
        }
    });
});