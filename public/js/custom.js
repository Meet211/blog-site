let base_url = $('#base_url').val();

$(document).on('submit', '#submit-form', function (e) {
    e.preventDefault();
    let formData = document.getElementById('submit-form');
    formData = new FormData(this);
    let action = $(this).attr('action');

    $.ajax({
        type: "POST",
        url: action,
        data: formData,
        dataType: "json",
        contentType: false,
        processData: false,

        success: function (response) {
            if (response.error == false) {
                alert(response.message);
                location.reload();
                return
            }
            alert(response.message);
        }
    });
})
$(document).on('click', '.delete_blog', function (e) {
    e.preventDefault();
    let id = $(this).attr('data-id');
    if (confirm('Are you sure you want to delete this blog?')) {
        $.ajax({
            type: "GET",
            url: base_url + "/admin/home/delete",
            data: {
                id
            },
            dataType: "json",
            success: function (response) {
                if (response.error == false) {
                    alert(response.message);
                    location.reload();
                    return
                }
                alert(response.message);
            }
        });
    }
})