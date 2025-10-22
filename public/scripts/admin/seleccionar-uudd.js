$(document).ready(function () {
    // Cargar uudd al seleccionar una gguu
    $('#gguu-nuevo').on('change', function () {
        let gguuId = $(this).val();
        $('#uudd-nuevo').empty().append('<option value="">Seleccione una Unidad Dependiente</option>').prop('disabled', true);

        if (gguuId) {
            $.ajax({
                url: `/admin/uudds/${gguuId}`,
                type: 'GET',
                
                success: function (data) {
                    console.log(data);
                    
                    $('#uudd-nuevo').prop('disabled', false);
                    data.forEach(function (uudd) {
                        $('#uudd-nuevo').append(`<option value="${uudd.id_uudd}">${uudd.descripcion_uudd}</option>`);
                    });
                }
            });
        }
    });
});