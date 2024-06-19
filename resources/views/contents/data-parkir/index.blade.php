@extends('layout.main')

@section('title', 'Data Parkir')

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
                <li class="breadcrumb-item active" aria-current="page">Data Parkir</li>
            </ol>
        </nav>
    </div>
</div>
<!-- PAGE-HEADER Breadcumbs END -->
@endsection

@section('content')
<!-- Row -->
<div class="row">
    <div class="col">
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">Filter</h5>
                <div class="row">
                    <div class="col-3">
                        <select class="form-control form-select " data-column="2" id="year">
                            <option value="">Pilih tahun..</option>
                            @for ($i = (date('Y') - 10); $i <= date('Y'); $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-3">
                        <select class="form-control form-select mb-3" data-column="3" id="month">
                            <option value="">Pilih bulan..</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                            <!-- @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ date('M', strtotime(date('Y'.($i < 10 ? '0'.$i : $i).'d')))}}"> {{ date("F", strtotime(date("Y".($i < 10 ? '0'.$i : $i)."d")))}} </option>
                            @endfor -->
                        </select>
                    </div>
                    <div class="col-3">
                        <select class="form-control form-select mb-3" data-column="4" id="week">
                            <option value="">Pilih minggu..</option>
                            @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-3">
                        <button type="button" id="button-filter" class="btn btn-primary"><i class="ti ti-filter me-1"></i> Filter</button>
                        <button type="button" id="button-reset" class="btn btn-secondary" title="refresh"><i class="fe fe-refresh-cw"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Data Parkir</h3>
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-bordered text-nowrap border-bottom">
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th>Tanggal</th>
                            <th>Tahun</th>
                            <th>Bulan</th>
                            <th>Week</th>
                            <th>Waktu Masuk</th>
                            <th>Waktu Keluar</th>
                            <th>Pemilik</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- COL END -->

    <div class="modal fade" id="modal_detail" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Detail Data Pengguna Parkiran</h6>
                    <button aria-label="Close" id="closeX" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 mb-2 text-center" id="foto_user">
                            
                        </div>
                        <div class="col-md-9">
                            <div class="row py-1 bg-light me-1">
                                <div class="col-md-3">
                                    Nama&emsp;&emsp;&emsp;&emsp;&emsp;:
                                </div>
                                {{-- <div class="col-md-1">
                                    :
                                </div> --}}
                                <div class="col-md-9" id="name">
                                    Hanny Berlianty
                                </div>
                            </div>
                            <div class="row py-1 bg-secondary me-1">
                                <div class="col-md-3">
                                    NIP/NIM &ensp;&emsp;&emsp;&emsp;:
                                </div>
                                {{-- <div class="col-md-1">
                                    :
                                </div> --}}
                                <div class="col-md-9" id="nip_nim">
                                    2003072
                                </div>
                            </div>
                            <div class="row py-1 bg-light me-1">
                                <div class="col-md-3">
                                    Gender&ensp;&emsp;&emsp;&emsp;&emsp;:
                                </div>
                                {{-- <div class="col-md-1">
                                    :
                                </div> --}}
                                <div class="col-md-9" id="gender">
                                    Perempuan
                                </div>
                            </div>
                            <div class="row py-1 bg-secondary me-1">
                                <div class="col-md-3">
                                    No.Hp&ensp;&emsp;&emsp;&ensp;&emsp;&nbsp;&ensp;:
                                </div>
                                {{-- <div class="col-md-1">
                                    :
                                </div> --}}
                                <div class="col-md-9" id="no_hp">
                                    0838618920
                                </div>
                            </div>
                            <div class="row py-1 bg-light me-1">
                                <div class="col-md-3">
                                    Card Id&ensp;&ensp;&ensp;&emsp;&emsp;&emsp;:
                                </div>
                                {{-- <div class="col-md-1">
                                    :
                                </div> --}}
                                <div class="col-md-9" id="card_id">
                                    29368192
                                </div>
                            </div>
                            <div class="row py-1 bg-secondary me-1">
                                <div class="col-md-3">
                                    Alamat&ensp;&emsp;&emsp;&ensp;&emsp;&nbsp;&nbsp;:
                                </div>
                                {{-- <div class="col-md-1">
                                    :
                                </div> --}}
                                <div class="col-md-9" id="address">
                                    Desa lobener
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="bg-secondary">
                    <h6 class="modal-title">Data Kendaraan</h6>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="detail" class="table table-bordered text-nowrap border-bottom">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Tipe</th>
                                        <th scope="col">Nomor Rangka</th>
                                        <th scope="col">Nomor Kendaraan</th>
                                    </tr>
                                </thead>
                                <tbody id="t-body">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="close" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
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

<!--moment JS -->
<script src="{{ asset('simbapar/assets/plugins/moment/moment.js') }}"></script>

<script src="{{ asset('simbapar/assets/js/script.js') }}"></script>

<script>

    var tableDetail;
    $(document).ready(function() {
        // Contoh Inisiator datatable severside
        var table = $("#datatable").DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            searchable:true,
            autoWidth: false,
            ajax: "{{ route('park.datatable') }}",
            dom: 'lBfrtip',
            buttons: [
                
                {
                    extend: 'csv',
                    className: 'btn btn-info',
                    text: `<i class="fe fe-file-text me-1"></i>
                        <span>CSV</span>`,
                        exportOptions: {
                        columns: [0,1,5,6,7]
                    }
                },
                {
                    extend: 'excel',
                    className: 'btn btn-success',
                    text: `<i class="si si-layers me-1"></i>
                        <span>Excel</span>`,
                    exportOptions: {
                        columns: [0,1,5,6,7]
                    }
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
                // {
                //     targets: 2,
                //     visible:false,
                //     render: function(data, type, full, meta) {
                //         return moment(data).format('YYYY');
                //     }
                // },
                // {
                //     targets: 3,
                //     visible:false,
                //     render: function(data, type, full, meta) {
                //         return moment(data).format('MM');
                //     }
                // },
                {
                    targets: [2,3,4],
                    visible: false,
                },
                {
                    targets: [5,6],
                    render: function(data, type, full, meta) {
                        if(data != null ){
                            return moment(data).format('H:mm:ss');
                        }else{
                            return '-';
                        }
                    }
                },
                {
                    targets: 7,
                    render: function(data, type, full, meta) {
                        let owner = '-';
                        if (data != null){
                            owner = `<span class="badge bg-primary me-1" href="javascript:void(0);">${data}</span>`;
                        }
                        return owner;
                    }
                },
                {
                    targets: -1,
                    className: 'text-center',
                    render: function(data, type, full, meta) {
                        console.log(data.length);
                        if (data.length == 0) {
                            return `<span class="badge badge-pil p-1 bg-danger">Data Telah Dihapus</span>`
                        }
                        let id = '';
                        data.map(function(item){
                            id += `
                                <div class="btn-list">
                                    <a href="javascript:void(0)" onclick="detail('${item.user.id}')" class="btn btn-sm btn-info modal-effect px-4 btn-edit" data-bs-effect="effect-super-scaled"><span class="fe fe-eye"> </span></a>
                                </div>
                                `;
                        })
                        return id;
                    },
                }, 
            ],
            columns: [
                { data: null },
                { data: 'date'},
                { data: 'date'},
                { data: 'date'},
                { data: 'week'},
                { data: 'time_in'},
                { data: 'time_out'}, 
                { data: 'owner' }, 
                { data: 'vehycle' }, 
            ],
        });

        $('#year').change(function(){
            table.column($(this).data('column')).search($(this).val());
        });

        $('#month').change(function(){
            table.column($(this).data('column')).search($(this).val());
        });

        $('#week').change(function(){
            // console.log($(this).data('column'));
            // console.log(table.column(4)[0][0]);
            table.column($(this).data('column')).search($(this).val());
        });

        $('#button-filter').click(function(){
            table.draw();
        });

        $('#closeX, #close').click(function(){
            tableDetail.destroy();
        });

        $('#button-reset').click(function(){
            $('#year').val('').trigger('change');
            $('#month').val('').trigger('change');
            $('#week').val('').trigger('change');
            table.draw();
        });

        // $('#month').change(function(){
        //     table.column($('#year').data('column')).search($('#year').val());
        //     table.column($('#month').data('column')).search($('#month').val());
        //     table.draw();
        // });
            
        

    });

    function detail(id){

        var url = "{{ route('park.show',":id") }}";
        url = url.replace(':id', id);
        
        $.get(url, function (response) {

            console.log(response.data.vehycle);
            response = response.data;

            tableDetail = $('#detail').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                searchable:true,
                autoWidth: false,
                ajax: `{{ route('detail.datatable') }}/${id}`,
                columnDefs:[
                    {
                        targets: 0,
                        orderable: false,
                        render: function(data, type, full, meta) {
                            return (meta.row + 1);
                        }
                    }, 
                    {
                        targets: 1,
                        render: function(data, type, full, meta) {
                            return `<img src="{{ asset('storage/${data}') }}" width="150">`;
                        }
                    },
                ],
                columns:[
                    {data: null},
                    {data: 'image'},
                    {data: 'brand'},
                    {data: 'type'},
                    {data: 'chassis_number'},
                    {data: 'vehycle_number'},
                ],
            });

            // $('<tr>').remove();

            var img = response.user_profile != null ? (response.user_profile.image != null ? 'storage/' + response.user_profile.image : 'assets/images/default-profile.jpg') : 'assets/images/default-profile.jpg';
            
            $('#foto_user').html(`<img src="{{ asset('${img}')}}" width="150px" height="200px" style="border-radius: 5px;" alt="">`);
            $('#name').text(response.user_profile.name);
            $('#nip_nim').text(response.user_profile.nip_nim);
            $('#gender').text(response.user_profile.gender);
            $('#card_id').text(response.user_profile.card_id == null? '-' : response.user_profile.card_id);
            $('#address').text(response.user_profile.address);
            $('#no_hp').text(response.user_profile.phone_number);


            // response.vehycle.map(function(item, index){
            //     $('#t-body').append(`
            //         <tr>
            //             <td>${index+1}</td>
            //             <td>
            //                 <img src="{{ asset('storage/${item.image}') }}" width="150">
            //             </td>
            //             <td>${item.brand}</td>
            //             <td>${item.type}</td>
            //             <td>${item.chassis_number}</td>
            //             <td>${item.vehycle_number}</td>
            //         </tr>
            //     `);
            // })
            $('#modal_detail').modal('show');

        });

    }

    
    
</script>
@endsection