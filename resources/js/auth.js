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
        console.log('authLinkLogin');
        event.preventDefault();
        authModalRegister.hide();
        authModalLogin.show();
    });
});
