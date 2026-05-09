$(document).ready(function() {
    //
    var authModalRegister = new bootstrap.Modal('#authModalRegister');
    var authModalLogin = new bootstrap.Modal('#authModalLogin');

    //
    $("#authLinkRegister").click(function(event) {
        //
        event.preventDefault();
        authModalLogin.hide();
        authModalRegister.show();
    });

    //
    $("#authLinkLogin").click(function(event) {
        //
        event.preventDefault();
        authModalRegister.hide();
        authModalLogin.show();
    });

    //
    $("#authModalRegisterForm").submit(function(event) {
        //
        event.preventDefault();

        var form = $(this);
        var actionUrl = form.attr('action');

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(),
            success: function(response)
            {
                console.log(response);
            },
            error: function(response) {
                if (response.status === 422) {
                    console.log(response.responseJSON.errors);
                } else {
                    console.log(response.status);
                }
            }
        });
    });
});
