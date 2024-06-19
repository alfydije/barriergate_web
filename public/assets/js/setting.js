var url = window.location.origin;
var origin = window.location.origin + window.location.pathname;
var token = localStorage.getItem('token');

$(function () {
    reload();
});

function reload() {
    $('#table-content').html('<tr><td colspan="5"><span class="text-success text-center">Loading...</span></td></tr>');
    $.ajax({
        type: 'GET',
        url:  origin,
        cache: false,
        processData: false,
        contentType: false,
        headers: {
            "Authorization": `Bearer ${token}`,
        },
        success: function (result) {
            $('#table-content').html(`
                <tr>
                    <td>1</td>
                    <td>${result.show_menu}</td>
                    <td><img src="${result.poster}" class="img-fluid" /></td>
                    <td>
                        <video class="video-bg" autoplay loop muted poster="${result.paster}">
                            <source src="${result.fileNameVideo}" type="video/mp4">
                        </video>
                    </td>
                    <td>
                        <button class='btn btn-success' type='button' onclick='editBanner("4")'><i class='menu-icon mdi mdi-pencil'></i></button>
                        <a class='btn btn-warning' href="/" target="_blank"><i class='menu-icon mdi mdi-eye'></i></a>
                    </td>
                </tr>
            `);

        },
        error: function (err) {
        }
    });
}

function updateBanner() {
    let id = $('#id_banner').val();
    let poster = $('#poster').prop('files')[0];
    let fileNameVideo = $('#fileNameVideo').prop('files')[0];
    if (poster === undefined && fileNameVideo === undefined) {
        return swal({
            title: 'Error!',
            text: "anda belum upload salah satu poster atau video!",
            icon: 'error',
            button: 'OK'
        })
    }
    let form = new FormData();
    poster !== undefined && form.append("poster", poster);
    fileNameVideo !== undefined && form.append("fileNameVideo", fileNameVideo);
    $.ajax({
        type: 'POST',
        url:  `${window.location.origin}/service/enhanchment/edit/${id}`,
        cache: false,
        processData: false,
        contentType: false,
        headers: {
            "Authorization": `Bearer ${token}`,
        },
        data: form,
        success: function (result) {
            swal({
                title: 'Success!',
                text: `${result.message}`,
                icon: 'success',
                button: 'OK'
            }).then(() => location.reload());
        },
        error: function (err) {
            var status = err.status;
            if (status == 422) {
                var statusResponse = err.responseJSON.errors;
                if (statusResponse.poster !== undefined) {
                    $("#poster-validation").html(`${statusResponse.poster}`);
                } else {
                    $("#poster-validation").html(``);
                }
                if (statusResponse.fileNameVideo !== undefined) {
                    $("#fileNameVideo-validation").html(`${statusResponse.fileNameVideo}`);
                } else {
                    $("#fileNameVideo-validation").html(``);
                }
            }

            if (status === 401) {
                localStorage.removeItem('token');
                window.location.href = "/login";
            }
        }
    });
}

function editBanner(id) {
    $('#id_banner').val(id);
    var myModal = new bootstrap.Modal(document.getElementById('editModalShow'), {
        keyboard: false
    });
    myModal.show();
}

