"use strict";
var endpoint = `${window.location.origin}/service`;
var token = localStorage.getItem('token');

(function ($) {

    $(document).ready(function () {
        $.ajax({
            type: 'GET',
            url: `${endpoint}/profile`,
            cache: false,
            processData: false,
            contentType: false,
            headers: {
                "Authorization": `Bearer ${token}`,
            },
            success: function (result) {
                $('#logged').removeClass('d-none')
                $('#logged-mobile').removeClass('d-none')
                $('#auth').addClass('d-none');
                $('#auth-mobile').addClass('d-none');
                $('#register').addClass('d-none');
                $('#user').html(result.name)
            },
            error: function (err) {
                if (err.status == 401) {
                    $('#logged').addClass('d-none')
                    $('#logged-mobile').addClass('d-none')
                    $('#auth').removeClass('d-none')
                    $('#auth-mobile').removeClass('d-none')
                    $('#register').removeClass('d-none')
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
            $.ajax({
                type: 'POST',
                url: `${endpoint}/logout`,
                cache: false,
                processData: false,
                contentType: false,
                headers: {
                    "Authorization": `Bearer ${token}`,
                },
                success: function (result) {
                    swal({
                        title: 'Success!',
                        text: `${result.message}`,
                        icon: 'success',
                        button: 'OK'
                    }).then(() => {
                        localStorage.removeItem('token');
                        window.location.href = "/login";
                    })
                },
                error: function (err) {
                    if (err.status == 401) {
                        window.location.href = "/login";
                    }
                }
            });
        }
    });
}