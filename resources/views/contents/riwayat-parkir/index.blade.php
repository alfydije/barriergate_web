@extends('layout.main')

@section('title', 'Riwayat Parkir')

@section('css')
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('simbapar/assets/plugins/datatable/datatables.min.css') }}">
    <style>
        .dataTables_wrapper .dt-buttons {
            float:none;  
            margin-bottom: 1vh;
            margin-left: 2vh;
            position: static;
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
                <li class="breadcrumb-item active" aria-current="page">Riwayat Parkir</li>
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
                <h3 class="card-title">Riwayat Parkir</h3>
            </div>
            <div class="card-body">
                {{-- <a class="btn btn-primary modal-effect mb-3 data-table-btn ms-4" data-bs-effect="effect-super-scaled" onclick="create()">
                    <span class="fe fe-plus"> </span>Add new data
                </a> --}}
                <table id="datatable" class="table table-bordered text-nowrap border-bottom">
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th>Tanggal</th>
                            <th>Waktu Masuk</th>
                            <th>Waktu Keluar</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- COL END -->

    {{-- <div class="modal fade" id="modal_form">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add new data</h6>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                        <form id="form" method="POST">
                            @csrf
                        <div class="form-group">
                            <input type="hidden" id="id" name="id">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" placeholder="Username.." value="" name="username" class="form-control" id="username">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" placeholder="email@example.com" value="" name="email" class="form-control" id="email">
                            </div>
                        </div>
                    </div>
                </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button  id="btnSave" class="btn btn-primary">Simpan</button>
                    </div>
            </div>
        </div>
    </div> --}}
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

<!--moment JS -->
<script src="{{ asset('simbapar/assets/plugins/moment/moment.js') }}"></script>

<script src="{{ asset('simbapar/assets/js/script.js') }}"></script>

<script>
    var $table;

    $(document).ready(function() {
        // Contoh Inisiator datatable severside
        table = $("#datatable").DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: "{{ route('park-history.datatable') }}",
            dom: 'lBfrtip',
            buttons: [
                {
                    extend: 'csv',
                    className: 'btn btn-info',
                    text: `<i class="fe fe-file-text me-1"></i>
                        <span>CSV</span>`,
                },
                {
                    extend: 'excel',
                    className: 'btn btn-success',
                    text: `<i class="si si-layers me-1"></i>
                        <span>Excel</span>`,
                },
            ],
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return (meta.row + 1);
                    }
                }, 
                {
                    targets: [2,3],
                    render: function(data, type, full, meta) {
                        if(data != null ){
                            return moment(data).format('H:mm:ss');
                        }else{
                            return '-';
                        }
                    }
                },
                // {
                //     targets: 4,
                //     render: function(data, type, full, meta) {
                //         let owner = '';
                //         // console.log(data);
                //         data.map(function(item){
                //             // console.log(item.owner.user_profile.name);
                //             // console.log(item);
                //             owner += `<span class="badge bg-primary me-1" href="javascript:void(0);">${item.user.user_profile.name}</span>`;
                //         })
                //         return owner;
                //     }
                // },
                // {
                //     targets: -1,
                //     className: 'text-center',
                //     render: function(data, type, full, meta) {
                //         return `
                //         <div class="btn-list">
                //             <a href="javascript:void(0)" onclick="" class="btn btn-sm btn-info modal-effect px-4 btn-edit" data-bs-effect="effect-super-scaled"><span class="fe fe-eye"> </span></a>
                //         </div>
                //         `;
                //     },
                // }, 
            ],
            columns: [
                { data: null },
                { data: 'date'},
                { data: 'time_in'},
                { data: 'time_out'}, 
                // { data: 'vehycles' }, 
                // { data: 'id' }, 
            ]
        });

        // $('#btnSave').on('click', function () {
        //     submit();
        // })
        
        // $('#form').on('submit', function(e){
        //     e.preventDefault();

        //     submit();
        // })
    });

    // function create(){
    //     submit_method = 'create';

    //     $('#id').val('');
    //     $('#form')[0].reset();

    //     $('#modal_form').modal('show');
    //     $('.modal-title').text('Tambah data akun');
    // }
    
    // function edit(id){
    //     submit_method = 'edit';

    //     $('#form')[0].reset();
    //     var url = "{{ route('pegawai.edit',":id") }}";
    //     url = url.replace(':id', id);
        
    //     $.get(url, function (response) {
    //         response = response.data;
            
    //         $('#id').val(response.id);
    //         $('#username').val(response.username);
    //         $('#email').val(response.email);
    //         $('#modal_form').modal('show');
    //         $('.modal-title').text('Edit data akun pegawai');

    //         $('#name').val(response.name);
    //     });
    // }

    // function submit() {
    //     var id          = $('#id').val();
    //     var username        = $('#username').val();
    //     var email        = $('#email').val();
    //     // console.log();
    //     var url = "{{ route('pegawai.store') }}";
    
    //     $('#btnSave').text('Menyimpan...');
    //     $('#btnSave').attr('disabled', true);

    //     if(submit_method == 'edit'){
    //         url = "{{ route('pegawai.update',":id") }}";
    //         url = url.replace(':id', id);
    //     }

    //     $.ajax({
    //         url: url,
    //         type: submit_method == 'create' ? 'POST' : 'PUT',
    //         dataType: 'json',
    //         data: {
    //             id: id,
    //             username: username,
    //             email: email
    //         },
    //         success: function (data) {
    //             if(data.status) {
    //                 $('#modal_form').modal('hide');
    //                 Swal.fire({
    //                     toast: true,
    //                     position: 'top-end',
    //                     icon: 'success',
    //                     title: data.message,
    //                     showConfirmButton: false,
    //                     timer: 1500
    //                 });
    //                 table.ajax.reload();

    //                 $('#btnSave').text('Simpan');
    //                 $('#btnSave').attr('disabled', false);
    //             }
    //             else{
    //                 for (var i = 0; i < data.inputerror.length; i++) 
    //                 {
    //                     $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
    //                     $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
    //                 }
    //             }
                
    //             $('#btnSave').text('Simpan');
    //             $('#btnSave').attr('disabled',false); //set button enable 
    //         }, 
    //         error: function(data){
    //             var error_message = "";
    //             error_message += " ";
                
    //             $.each( data.responseJSON.errors, function( key, value ) {
    //                 error_message +=" "+value+" ";
    //             });

    //             error_message +=" ";
    //             Swal.fire({
    //                     toast: true,
    //                     position: 'top-end',
    //                     icon: 'error',
    //                     title: 'ERROR !',
    //                     text: error_message,
    //                     showConfirmButton: false,
    //                     timer: 2000
    //                 });
    //             $('#btnSave').text('Simpan');
    //             $('#btnSave').attr('disabled', false);
    //         },
    //     });
    // }
    
    // function destroy(id) {
    //     var url = "{{ route('pegawai.destroy',":id") }}";
    //     url = url.replace(':id', id);
    
    //     Swal.fire({
    //         title: "Yakin ingin menghapus data ini?",
    //         text: "Ketika data terhapus, anda tidak bisa mengembalikan data tersebut!",
    //         icon: "warning",
    //         showCancelButton  : true,
    //         confirmButtonColor: "#3085d6",
    //         cancelButtonColor : "#d33",
    //         confirmButtonText : "Ya, Hapus!"
    //     }).then((result) => {
    //         if (result.value) {
    //             $.ajax({
    //                 url    : url,
    //                 type   : "delete",
    //                 data: { "id":id },
    //                 dataType: "JSON",
    //                 success: function(data) {
    //                     table.ajax.reload();
    //                     Swal.fire({
    //                         toast: true,
    //                         position: 'top-end',
    //                         icon: 'success',
    //                         title: 'Data berhasil dihapus',
    //                         showConfirmButton: false,
    //                         timer: 1500
    //                     });
    //                 }
    //             })
    //         }
    //     })
    // } 

</script>
@endsection