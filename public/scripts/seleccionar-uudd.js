$(document).ready(function () {
    // Cargar uudd al seleccionar una gguu
    $('#gguu').on('change', function () {
        let gguuId = $(this).val();
        $('#uudd').empty().append('<option value="">Seleccione una Unidad Dependiente</option>').prop('disabled', true);

        if (gguuId) {
            $.ajax({
                url: `/sadmin/uudds/${gguuId}`,
                type: 'GET',
                
                success: function (data) {
                    console.log(data);
                    
                    $('#uudd').prop('disabled', false);
                    data.forEach(function (uudd) {
                        $('#uudd').append(`<option value="${uudd.id_uudd}">${uudd.descripcion_uudd}</option>`);
                    });
                }
            });
        }
    });
});