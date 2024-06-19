(function ($) {
    "use strict";
    var endpoint = `${window.location.origin}/service`;
    var token = localStorage.getItem('token');
    var tokenReset = window.location.pathname.split('/');

    $(document).ready(function () {
        $.ajax({
            type: 'get',
            url: `${endpoint}/profile`,
            cache: false,
            processData: false,
            contentType: false,
            headers: {
                "Authorization": `Bearer ${token}`,
            },
            success: function (result) {
                window.location.href = "/dashboard";
            },
            error: function (err) {
            }
        });
    });

    $('#submit').on('click', function () {
        $.ajax({
            type: 'POST',
            url: `${endpoint}/reset-password/${tokenReset[2]}`,
            cache: false,
            processData: false,
            contentType: false,
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            data: JSON.stringify({
                'password': $("#password_change").val(),
                'password_confirmation': $("#password_confirmation_change").val(),
            }),
            success: function (result) {
                swal({
                    title: 'Success!',
                    text: `${result.message}`,
                    icon: 'success',
                    button: 'OK'
                }).then(() => window.href.location = '/login')
                $("#password-validation").html(``);
                $("#email-reset-validation").html(``);
                window.location.href = "/login";
            },
            error: function (err) {
                var status = err.status;
                if (status == 422) {
                    var statusResponse = err.responseJSON.errors;
    
                    if (statusResponse.password !== undefined) {
                        $("#password-reset-validation").html(`${statusResponse.password}`);
                    } else {
                        $("#password-reset-validation").html(``);
                    }
                }
    
                if (status === 401) {
                    $("#password-validation").html(``);
                    $("#email-validation").html(``);
                    $("#username-password-validation").html(`${err.responseJSON.message}`)
                    console.log(err.responseJSON)
                }
            }
        });
    });
    $('#button-req-reset-password').on('click', function () {
        $.ajax({
            type: 'POST',
            url: `${endpoint}/send-req-reset-password`,
            cache: false,
            processData: false,
            contentType: false,
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            data: JSON.stringify({
                'email': $("#email_reset").val(),
            }),
            success: function (result) {
                swal({
                    title: 'Success!',
                    text: `${result.message}`,
                    icon: 'success',
                    button: 'OK'
                }).then(() => window.href.location = '/login')
                $("#password-validation").html(``);
                $("#email-reset-validation").html(``);
                window.location.href = "/login";
            },
            error: function (err) {
                var status = err.status;
                if (status == 422) {
                    var statusResponse = err.responseJSON.errors;
    
                    if (statusResponse.email !== undefined) {
                        $("#email-reset-validation").html(`${statusResponse.email}`);
                    } else {
                        $("#email-reset-validation").html(``);
                    }
                }
    
                if (status === 401) {
                    $("#password-validation").html(``);
                    $("#email-validation").html(``);
                    $("#username-password-validation").html(`${err.responseJSON.message}`)
                    console.log(err.responseJSON)
                }
            }
        });
    });

    $('#button-auth').on('click', function () {
        $.ajax({
            type: 'POST',
            url: `${endpoint}/auth`,
            cache: false,
            processData: false,
            contentType: false,
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            data: JSON.stringify({
                'username': $("#username").val(),
                'password': $("#password").val()
            }),
            success: function (result) {
                console.log(result);
                $("#password-validation").html(``);
                $("#email-validation").html(``);
                $("#username-password-validation").html(``);
                localStorage.setItem('token', result.token);
                window.location.href = "/dashboard";
            },
            error: function (err) {
                var status = err.status;
                if (status == 422) {
                    var statusResponse = err.responseJSON.errors;
                    $("#username-validation").html(``)
                    if (statusResponse.username !== undefined) {
                        $("#username-validation").html(`${statusResponse.username}`);
                    } else {
                        $("#username-validation").html(``);
                    }
    
                    if (statusResponse.password !== undefined) {
                        $("#password-validation").html(`${statusResponse.password}`);
                    } else {
                        $("#password-validation").html(``);
                    }
                }
    
                if (status === 401) {
                    $("#password-validation").html(``);
                    $("#email-validation").html(``);
                    $("#username-password-validation").html(`${err.responseJSON.message}`)
                    console.log(err.responseJSON)
                }
            }
        });
    });

    $('#button-register').on('click', function () {
        $.ajax({
            type: 'POST',
            url: `${endpoint}/register`,
            cache: false,
            processData: false,
            contentType: false,
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            data: JSON.stringify({
                'name': $("#name_reg").val(),
                'username': $("#username_reg").val(),
                'email': $("#email").val(),
                'password': $("#password_reg").val(),
                'password_confirmation': $("#password_confirmation").val(),
                'squad_id': $("#squad_id").val(),
                'role_id': 2,
            }),
            success: function (result) {
                swal({
                    title: 'Success!',
                    text: `${result.message}`,
                    icon: 'success',
                    button: 'OK'
                }).then(() => window.href.location = '/login')
                $("#password-validation").html(``);
                $("#email-validation").html(``);
                $("#name-validation").html(``);
                $("#username-validation").html(``);
                $("#squad_id-validation").html(``);
                $("#username-password-validation").html(``);
                window.location.href = "/login";
            },
            error: function (err) {
                var status = err.status;
                if (status == 422) {
                    var statusResponse = err.responseJSON.errors;
                    $("#username-validation").html(``)
                    
                    if (statusResponse.name !== undefined) {
                        $("#name-validation").html(`${statusResponse.name}`);
                    } else {
                        $("#name-validation").html(``);
                    }

                    if (statusResponse.username !== undefined) {
                        $("#username-validation").html(`${statusResponse.username}`);
                    } else {
                        $("#username-validation").html(``);
                    }
                    if (statusResponse.email !== undefined) {
                        $("#email-validation").html(`${statusResponse.email}`);
                    } else {
                        $("#email-validation").html(``);
                    }
    
                    if (statusResponse.password !== undefined) {
                        $("#password-validation").html(`${statusResponse.password}`);
                    } else {
                        $("#password-validation").html(``);
                    }
                    if (statusResponse.squad_id !== undefined) {
                        $("#squad_id-validation").html(`${statusResponse.squad_id}`);
                    } else {
                        $("#squad_id-validation").html(``);
                    }
                }
    
                if (status === 401) {
                    $("#password-validation").html(``);
                    $("#email-validation").html(``);
                    $("#username-password-validation").html(`${err.responseJSON.message}`)
                    console.log(err.responseJSON)
                }
            }
        });
    });

})(jQuery);

function logout() {
    swal({
        title: 'peringatan!',
        text: `Apakah anda yakin akan melakukan logout?`,
        icon: 'warning',
        button: 'OK'
    }).then(function (result) {
        if (result) {
            localStorage.removeItem('token');
            window.location.href = "/login";
        }
    });

}