$(document).ready(function() {
    //
    var authModalSignup = 'authModalSignup';
    var authModalLogin = 'authModalLogin';
    var authModalSignupModal = new bootstrap.Modal('#' + authModalSignup);
    var authModalLoginModal = new bootstrap.Modal('#' + authModalLogin);
    var authModalSignupForm = $("#" + authModalSignup + "Form");
    var authModalLoginForm = $("#" + authModalLogin + "Form");

    //
    $("#authLinkRegister").click(function(event) {
        //
        event.preventDefault();
        authModalLoginModal.hide();
        authModalSignupModal.show();
    });

    //
    $("#authLinkLogin").click(function(event) {
        //
        event.preventDefault();
        authModalSignupModal.hide();
        authModalLoginModal.show();
    });

    //
    authModalSignupForm.submit(function(event) {
        //
        event.preventDefault();

        //
        clearForm(authModalSignup);

        //
        var form = $(this);
        var actionUrl = form.attr('action');

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(),
            success: function(response)
            {
                setReload(response);
            },
            error: function(response) {
                setError(response, authModalSignup);
            }
        });
    });

    //
    authModalLoginForm.submit(function(event) {
        //
        event.preventDefault();

        //
        clearForm(authModalLogin);

        //
        var form = $(this);
        var actionUrl = form.attr('action');

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(),
            success: function(response)
            {
                setReload(response);
            },
            error: function(response) {
                setError(response, authModalLogin);
            }
        });
    });

    //
    function setUnknownError (response, el) {
        let errorLayout = $("#" + el + 'Error');
        errorLayout.text(errorLayout.data("error") + response.status).removeClass("d-none");
    }

    //
    function setInputError(key, value, el) {
        $("#" + el + toPascalCase(key)).addClass("border-danger");
        $("#" + el + toPascalCase(key) + "Error").text(value).removeClass("d-none");
    }

    //
    function toPascalCase (str) {
        return str
            .replace(/[-_ ]+/g, ' ')
            .replace(/(?:^\w|[A-Z]|\b\w)/g, (word) => word.toUpperCase())
            .replace(/\s+/g, '');
    };

    //
    function clearForm (form) {
        //
        let errorLayout = $("#" + form + 'Error');
        errorLayout.text('').removeClass("d-none");

        //
        let formLayout = $("#" + form + 'Form');
        formLayout.find("input").each(function() {
            $(this).removeClass("border-danger");
            $("#" + $(this).attr("id") + "Error").addClass("d-none");
        });
    }

    //
    function setError (response, el) {
        if (response.status === 422) {
            if ('errors' in response.responseJSON) {
                $.each(response.responseJSON.errors, function(key, value) {
                    setInputError(key, value, el);
                });
            }
            else {
                setUnknownError(response, el);
            }
        } else {
            setUnknownError(response, el);
        }
    }

    //
    function setReload (response) {
        if (response.success) {
            window.location.reload();
        }
    }
});
