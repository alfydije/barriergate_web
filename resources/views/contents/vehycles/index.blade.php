@extends('layout.main')

@section('title', 'Data Kendaraan')

@section('css')
    {{-- Custom CSS --}}
    <style>
        table.dataTable tbody td {
            vertical-align: middle;
        }
    </style>
@endsection

@section('breadcumb')
<!-- PAGE-HEADER Breadcrumbs -->
<div class="breadcrumb-header justify-content-between">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a   href="javascript:void(0);"></a></li>
                <li class="breadcrumb-item active" aria-current="page"> Data Kendaraan</li>
            </ol>
        </nav>
    </div>
</div>
<!-- PAGE-HEADER Breadcumbs END -->
@endsection

@section('content')
<!-- Row -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Data Kendaraan</h3>
            </div>
            <div class="card-body">
                <a class="btn btn-primary modal-effect mb-3 data-table-btn ms-4" data-bs-effect="effect-super-scaled" onclick="create()">
                    <span class="fe fe-plus"> </span>Tambah data baru
                </a>
                <table id="datatable" class="table table-bordered text-nowrap border-bottom">
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th>Foto</th>
                            <th>Pemilik</th>
                            <th>Merek</th>
                            <th>Tipe</th>
                            <th>Nomor Kendaraan</th>
                            <th>Nomor Rangka</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- COL END -->

    <div class="modal fade" id="modal_form">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Tambah data baru</h6>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                        <form id="form" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                            <input type="hidden" name="id" id="id">
                            <input type="hidden" name="old_image" id="old_image">
                            <div class="mb-3">
                                <label class="form-label text-dark" for="user_id">Pemilik</label>
                                <select id="user_id" name="user_id" data-placeholder="Pilih pemilik kendaraan" class="form-control select2 form-select" required></select>
                            </div>
                            <div class="mb-3">
                                <label for="brand" class="form-label label">Merek</label>
                                <input type="text" placeholder="Ex: Yamaha, Honda dsb." value="" name="brand" class="form-control" id="brand">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label label">Tipe</label>
                                <input type="text" placeholder="Ex: Yamaha All New Nmax 155, Honda Beat dsb." value="" name="type" class="form-control" id="type">
                            </div>
                            <div class="mb-3">
                                <label for="vehycle_number" class="form-label label">Nomor Kedaraan</label>
                                <input type="text" placeholder="Ex: E 1234 EF" value="" name="vehycle_number" class="form-control" id="vehycle_number">
                            </div>
                            <div class="mb-3">
                                <label for="chassis_number" class="form-label label">Nomor Rangka</label>
                                <input type="text" placeholder="Ex: MHY3210406B508937" value="" name="chassis_number" class="form-control" id="chassis_number">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label label">Foto Kendaraan</label>
                                <input id="image" class="dropify" data-default-file="" type="file" accept=".jpg,.png,.svg,.jpeg,.webp" name="image" data-allowed-file-extensions="jpeg jpg png webp svg" required />
                                <small class="text-danger label">Ukuran foto maksimal 1MB</small>
                            </div>
                        </div>
                    </div>
                </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                        <button  id="btnSave" class="btn btn-primary">Simpan</button>
                    </div>
            </div>
        </div>
    </div>
</div>

<!-- End Row -->
@endsection

@section('script')

<!-- DATA TABLE JS-->
<script src="{{ asset('simbapar/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>

<!-- INTERNAL Select2 js -->
<script src="{{ asset('simbapar/assets/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/js/select2.js') }}"></script>

<script src="{{ asset('simbapar/assets/js/script.js') }}"></script>

<script src="{{ asset('simbapar/assets/plugins/fileuploads/js/fileupload.js') }}"></script>


<script>
    var $table;

    $(document).ready(function() {

        ajaxSelect2Initiator('user_id', 'modal_form', `{{ route('kendaraan.select2') }}`);

        // Contoh Inisiator datatable severside

        table = $("#datatable").DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: "{{ route('kendaraan.datatable') }}",
            columnDefs: [
            {
                targets: 0,
                orderable: false,
                render: function(data, type, full, meta) {
                    return (meta.row + 1);
                }
            }, 
            {
                targets: 1,
                className: 'text-center',
                render: function(data, type, full, meta) {
                    return `<img src="{{ asset('storage/${data}') }}" width="120">`;
                },
            }, 
            {
                targets: 2,
                className: 'text-center',
                render: function(data, type, full, meta) {
                    var html = '-';
                    if (data != null) {
                        html = `<span class="badge px-3 py-2 bg-success">${data}</span>`;
                    }
                    return html;
                }
            },
            {
                targets: -1,
                width: 50,
                render: function(data, type, full, meta) {
                    return `
                    <div class="btn-list">
                        <a href="javascript:void(0)" onclick="edit('${data}')" class="btn btn-sm btn-primary modal-effect btn-edit" data-bs-effect="effect-super-scaled"><span class="fe fe-edit"> </span></a>
                        <a href="javascript:void(0)" onclick="destroy('${data}')" class="btn btn-sm btn-danger btn-delete"><span class="fe fe-trash-2"> </span></a>
                    </div>
                    `;
                },
            }, 
            ],
            columns: [
                { data: null },
                { data: 'image'},
                { data: 'name'},
                { data: 'brand'},
                { data: 'type'},
                { data: 'vehycle_number'},
                { data: 'chassis_number'},
                { data: 'id'}, 
            ]
        });


        $('#btnSave').on('click', function () {
            submit();
        })
        
        $('#form').on('submit', function(e){
            e.preventDefault();
            
            submit();
        })
    });

    function create(){
        submit_method = 'create';
        var df = "";
        df = $('#image').dropify();
        df = df.data('dropify');
        df.resetPreview();
        df.clearElement();

        $('#id').val('');
        $('#form')[0].reset();
        $('#form').find('.text-danger.text-small').remove();
        $('#form').find('input,select').removeClass('is-invalid');
        $('#user_id').empty().trigger('change');
        $('#user_id').attr('disabled', false);



        $('#modal_form').modal('show');
        $('.modal-title').text('Tambah Data Kendaraan');
    }
    
    function edit(id){
        var df = "";
        df = $('#image').dropify();

        submit_method = 'edit';

        $('#form')[0].reset();
        $('#form').find('.text-danger.text-small').remove();
        $('#form').find('input,select').removeClass('is-invalid');
        var url = "{{ route('kendaraan.edit',":id") }}";
        url = url.replace(':id', id);
        
        $.get(url, function (response) {
            response = response.data;

            var newOption = new Option(response.user.username, response.user_id, false, false);

            var image = `{{ asset('storage/${response.image}') }}`;
            
            $('#id').val(response.id);
            $('#brand').val(response.brand);
            $('#type').val(response.type);
            $('#old_image').val(response.image);
            $('#chassis_number').val(response.chassis_number);
            $('#vehycle_number').val(response.vehycle_number);
            $('#user_id').empty().trigger('change');
            $('#user_id').append(newOption).trigger('change');
            $('#user_id').attr('disabled',true);
            $('#modal_form').modal('show');
            $('.modal-title').text('Edit Kendaraan');

            df = df.data('dropify');
            df.resetPreview();
            df.clearElement();
            df.settings.defaultFile = image;
            df.destroy();
            df.init();

        });
    }

    function submit() {
        var _form = $('#form')[0];
        var data = new FormData(_form);

            
        console.log($('#image'));
        var id = $('#id').val();
        var image = $('#image')[0].files[0];
        
        
        var url = "{{ route('kendaraan-store.store') }}";
        
        $('#btnSave').text('Menyimpan...');
        $('#btnSave').attr('disabled', true);
        
        if(submit_method == 'edit'){
            url = "{{ route('kendaraan-update.update',":id") }}";
            url = url.replace(':id', id);
        }
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                if(data.status) {
                    $('#modal_form').modal('hide');
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: data.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    table.ajax.reload();

                    $('#btnSave').text('Simpan');
                    $('#btnSave').attr('disabled', false);
                }else{
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: 'ERROR !',
                        text: data.message,
                        showConfirmButton: false,
                        timer: 2000
                    });
                }
                
                $('#btnSave').text('Simpan');
                $('#btnSave').attr('disabled',false); //set button enable 
            }, 
            error: function(data){
                var error_message = "";
                error_message += " ";
                
                $.each( data.responseJSON.errors, function( key, value ) {
                    error_message +=" "+value+" ";
                });

                let errors = data.responseJSON?.errors
                if(errors){
                    for(const [key, value] of Object.entries(errors)){
                        $(`[name='${key}']`).parent().append(`<sp class="text-danger text-small">${value}</sp>`)
                        $(`[name='${key}']`).addClass('is-invalid')
                    }
                }

                error_message +=" ";
                Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: 'ERROR !',
                        text: error_message,
                        showConfirmButton: false,
                        timer: 2000
                    });
                $('#btnSave').text('Simpan');
                $('#btnSave').attr('disabled', false);
            },
        });
    }
    
    function destroy(id) {
        var url = "{{ route('kendaraan.destroy',":id") }}";
        url = url.replace(':id', id);
    
        Swal.fire({
            title: "Yakin ingin menghapus data ini?",
            text: "Ketika data terhapus, anda tidak bisa mengembalikan data tersbut!",
            icon: "warning",
            showCancelButton  : true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor : "#d33",
            confirmButtonText : "Ya, Hapus!",
            cancelButtonText : "Batal"
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url    : url,
                    type   : "delete",
                    data: { "id":id },
                    dataType: "JSON",
                    success: function(data) {
                        table.ajax.reload();
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            title: 'Data berhasil dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                })
            }
        })
    } 

</script>
@endsection