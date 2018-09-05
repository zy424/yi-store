


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


$(".resource-delete").click(function (event) {
    if (confirm("Are you sure to delete it?") == false) {
        return;
    }

    var target = $(event.target);
    event.preventDefault();
    var url = $(target).attr("delete-url");
    $.ajax({
        url: url,
        method: "POST",
        data: { "_method": 'GET' },
        dataType: "json",
        success: function success(data) {
            if (data.error != 0) {
                alert(data.msg);
                return;
            }

            window.location.reload();
        }
    });
});

