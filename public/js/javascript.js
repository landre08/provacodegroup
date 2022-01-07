$(function() {

    var ide = null;
    $(document).on('click', '#cliente_excluir', function(e) {
        e.preventDefault();
        
        ide = $(this).attr('data-excluir');
        $('#modal-excluir').modal('show');
    })

    $(document).on('click', '#confirma-excluir', function(e) {

        e.preventDefault();
        
            $.ajax({
            type: 'GET',
            url: '/excluir/'+ide,
            context: this,
            success: function(data) {
                console.log(data);
                if (data == 'ok') {
                    $('#modal-excluir').modal('hide');
                    window.location.href = "/";
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
    });

});