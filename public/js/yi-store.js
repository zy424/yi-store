


$($.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
);

$('#modal_form_id').submit(function(event){
    event.preventDefault();
    var formData = new FormData($(this)[0]);

    $.ajax({
        url: '/admin/products/' + $('#product_id').val() + '/image-store',
        data: formData,
        type: 'post',
        async: false,
        processData: false,
        contentType: false,
        success: function(response){
            $('#myModal').modal('toggle');
            location.reload();
        }
    })
});

