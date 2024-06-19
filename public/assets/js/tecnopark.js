var url = window.location.origin;
var token = localStorage.getItem('token');

$(function () {
    $('#technopark-table').DataTable({
        processing: true,
        serverSide: true,
        orderable: true,
        searchable: true,
        fixedColumns: true,
        responsive: true,
        dom: 'Bfrtip',
        ajax: `${url}/daftar-squad`,
        // succes: res => console.log(res),
        columns: [
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
            {
                data: 'squad_type.squad_name',
                name: 'squad_type.squad_name'
            },
            {
                data: 'squad_detail_name',
                name: 'squad_detail_name'
            },
            {
                data: 'squad_phone',
                name: 'squad_phone'
            },
            {
                data: 'squad_address',
                render: (a, b, c) => `<div class="text-wrap text-left" style="width: 150px">${c.squad_address}</div>`
            },
            {
                data: 'action',
                name: 'action',
            },
        ]
    });

});

function updateSquad() {
    let idSquad = $('#id_squad').val();
    let aset_image_logo = $('#squad_logo_edit').prop('files')[0];
    var form = new FormData();
    form.append('squad_type_id', $('#squad_type_id_edit').val());
    form.append('squad_detail_name', $('#squad_detail_name_edit').val());
    form.append('squad_phone', $('#squad_phone_edit').val());
    form.append('squad_web_site', $('#squad_web_site_edit').val());
    form.append('squad_email', $('#squad_email_edit').val());
    form.append('squad_address', $('#squad_address_edit').val());
    form.append('squad_description', $('#squad_description_edit').val());
    aset_image_logo !== undefined && form.append("squad_logo", aset_image_logo);
    $.ajax({
        type: 'POST',
        url:  `${window.location.origin}/service/squad/${idSquad}`,
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
            }).then(function () {
                $('#technopark-table').DataTable().ajax.reload();
            });
        },
        error: function (err) {
            var status = err.status;
            if (status == 422) {
                var statusResponse = err.responseJSON.errors;

                if (statusResponse.squad_type_id !== undefined) {
                    $("#squad_type_id_edit-validation").html(`${statusResponse.squad_type_id}`);
                } else {
                    $("#squad_type_id_edit-validation").html(``);
                }
                if (statusResponse.squad_detail_name !== undefined) {
                    $("#squad_detail_name_edit-validation").html(`${statusResponse.squad_detail_name}`);
                } else {
                    $("#squad_detail_name_edit-validation").html(``);
                }
                if (statusResponse.squad_phone !== undefined) {
                    $("#squad_phone_edit-validation").html(`${statusResponse.squad_phone}`);
                } else {
                    $("#squad_phone_edit-validation").html(``);
                }
                if (statusResponse.squad_email !== undefined) {
                    $("#squad_email_edit-validation").html(`${statusResponse.squad_email}`);
                } else {
                    $("#squad_email_edit-validation").html(``);
                }
                if (statusResponse.squad_address !== undefined) {
                    $("#squad_address_edit-validation").html(`${statusResponse.squad_address}`);
                } else {
                    $("#squad_address_edit-validation").html(``);
                }
                if (statusResponse.squad_description !== undefined) {
                    $("#squad_description_edit-validation").html(`${statusResponse.squad_description}`);
                } else {
                    $("#squad_description_edit-validation").html(``);
                }
                if (statusResponse.squad_logo !== undefined) {
                    $("#squad_logo_edit-validation").html(`${statusResponse.squad_logo}`);
                } else {
                    $("#squad_logo_edit-validation").html(``);
                }
            }

            if (status === 401) {
                localStorage.removeItem('token');
                window.location.href = "/login";
            }
        }
    });
}

function editSquad(id) {
    $.ajax({
        type: 'GET',
        url:  `${window.location.origin}/service/squad/${id}`,
        cache: false,
        processData: false,
        contentType: false,
        headers: {
            "Authorization": `Bearer ${token}`,
        },
        success: function (result) {
            $('#id_squad').val(id);
            $('#squad_type_id_edit').val(result.squad_type_id);
            $('#squad_detail_name_edit').val(result.squad_detail_name);
            $('#squad_phone_edit').val(result.squad_phone);
            $('#squad_web_site_edit').val(result.squad_web_site);
            $('#squad_email_edit').val(result.squad_email);
            $('#squad_address_edit').val(result.squad_address);
            $('#squad_description_edit').val(result.squad_description);
        },
        error: function (err) {
        }
    });
    var myModal = new bootstrap.Modal(document.getElementById('editModalShow'), {
        keyboard: false
    });
    myModal.show();
}

function detailSquad(id) {
    $('#staticModalLabel').html('loading...');
    $('#modal-body').html('loading...');
    $.ajax({
        type: 'GET',
        url:  `${window.location.origin}/service/squad/${id}`,
        cache: false,
        processData: false,
        contentType: false,
        headers: {
            "Authorization": `Bearer ${token}`,
        },
        success: function (result) {
            $('#staticModalLabel').html(`${result.squad_detail_name}`);
            $('#modal-body').html(`
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-center my-2">
                            <img class="img-thumbnail" src="${ result.squad_logo === null ? `${url}/assets/images/img-logo/logo.png` : `${url}/upload/aset_image/squad/${result.squad_logo}`}"/>
                        </div>
                    </div>
                    <div class="col-5">
                        <p>Alamat</p>
                    </div>
                    <div class="col-7">
                        <p>: ${result.squad_address}</p>
                    </div>
                    <div class="col-5">
                        <p>Telepon</p>
                    </div>
                    <div class="col-7">
                        <p>: ${result.squad_phone}</p>
                    </div>
                    <div class="col-5">
                        <p>Website</p>
                    </div>
                    <div class="col-7">
                        <p>: <a href="${result.squad_web_site}" target="_blank">${result.squad_web_site}</a></p>
                    </div>
                    <div class="col-5">
                        <p>Email</p>
                    </div>
                    <div class="col-7">
                        <p>: ${result.squad_email}</p>
                    </div>
                    <div class="col-5">
                        <p>Detail Squad</p>
                    </div>
                    <div class="col-7">
                        <p>: ${result.squad_description}</p>
                    </div>
                </div>
            `);
        },
        error: function (err) {
        }
    });
    var myModal = new bootstrap.Modal(document.getElementById('detailModal'), {
        keyboard: false
    });
    myModal.show();
}

function submitSquad() {
    let aset_image = $("#squad_logo").prop("files")[0];
    let form = new FormData();
    form.append('squad_type_id', $('#squad_type_id').val());
    form.append('squad_detail_name', $('#squad_detail_name').val());
    form.append('squad_phone', $('#squad_phone').val());
    form.append('squad_web_site', $('#squad_web_site').val());
    form.append('squad_email', $('#squad_email').val());
    form.append('squad_address', $('#squad_address').val());
    form.append('squad_description', $('#squad_description').val());
    aset_image !== undefined && form.append("squad_logo", aset_image);
        $.ajax({
            type: 'POST',
            url:  `${window.location.origin}/service/squad`,
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
                }).then(function () {
                    $('#technopark-table').DataTable().ajax.reload();
                });
            },
            error: function (err) {
                var status = err.status;
                if (status == 422) {
                    var statusResponse = err.responseJSON.errors;
    
                    if (statusResponse.squad_type_id !== undefined) {
                        $("#squad_type_id-validation").html(`${statusResponse.squad_type_id}`);
                    } else {
                        $("#squad_type_id-validation").html(``);
                    }
                    if (statusResponse.squad_detail_name !== undefined) {
                        $("#squad_detail_name-validation").html(`${statusResponse.squad_detail_name}`);
                    } else {
                        $("#squad_detail_name-validation").html(``);
                    }
                    if (statusResponse.squad_phone !== undefined) {
                        $("#squad_phone-validation").html(`${statusResponse.squad_phone}`);
                    } else {
                        $("#squad_phone-validation").html(``);
                    }
                    if (statusResponse.squad_email !== undefined) {
                        $("#squad_email-validation").html(`${statusResponse.squad_email}`);
                    } else {
                        $("#squad_email-validation").html(``);
                    }
                    if (statusResponse.squad_address !== undefined) {
                        $("#squad_address-validation").html(`${statusResponse.squad_address}`);
                    } else {
                        $("#squad_address-validation").html(``);
                    }
                    if (statusResponse.squad_description !== undefined) {
                        $("#squad_description-validation").html(`${statusResponse.squad_description}`);
                    } else {
                        $("#squad_description-validation").html(``);
                    }
                    if (statusResponse.squad_logo !== undefined) {
                        $("#squad_logo-validation").html(`${statusResponse.squad_logo}`);
                    } else {
                        $("#squad_logo-validation").html(``);
                    }
                }
    
                if (status === 401) {
                    localStorage.removeItem('token');
                    window.location.href = "/login";
                }
            }
        });
}

