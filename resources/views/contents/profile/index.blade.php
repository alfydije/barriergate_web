@extends('layout.main')

@section('title', 'profile')

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
						<h4 class="content-title mb-2">Hai, selamat datang kembali {{ $data->username }}!</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a   href="javascript:void(0);">Profile</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Edit-Profile</li>
							</ol>
						</nav>
					</div>
				</div>
<!-- PAGE-HEADER Breadcumbs END -->
@endsection

@section('content')

<!-- row -->
  <div class="row row-sm">
      <!-- Col -->
      <div class="col-lg-4">
        <div class="card mg-b-20">
          <div class="card-body">
            <div class="ps-0">
              <div class="main-profile-overview">
                <div class="main-img-user profile-user"><img alt="" src="{{ asset(auth()->user()->user_profile ? auth()->user()->user_profile->image ? 'storage/' . auth()->user()->user_profile->image :'assets/images/default-profile.jpg' : 'assets/images/default-profile.jpg') }}">
                  <a href="JavaScript:updateImage();" id="btnEdit" class="ion-ios-brush fs-5 profile-edit"></a>
                  <a href="JavaScript:deleteForm();" id="btnClose" class="zmdi zmdi-close bg-danger fs-5 profile-edit"></a>
                </div>
                <div class="d-flex justify-content-between mg-b-20">
                  <div>
                    <h5 class="main-profile-name">{{ $data->user_profile->name ?? '' }}</h5>
                    <p class="main-profile-name-text">{{ $data->getRoleNames()->first() ?? ''}}</p>
                  </div>
                </div>
              </div><!-- main-profile-overview -->
            </div>
          </div>
        </div>
        <div class="card mg-b-20">
          <div class="card-body">
            <div class="main-content-label tx-13 mg-b-25">
              Kontak
            </div>
            <div class="main-profile-contact-list">
              <div class="media">
                <div class="media-icon bg-primary-transparent text-primary">
                  <i class="icon ion-md-phone-portrait"></i>
                </div>
                <div class="media-body">
                  <span>Nomor Hp</span>
                  <div>
                    {{ $data->user_profile->phone_number ?? '' }}
                  </div>
                </div>
              </div>
              <div class="media">
                <div class="media-icon bg-info-transparent text-info">
                  <i class="icon ion-md-locate"></i>
                </div>
                <div class="media-body">
                  <span>Alamat</span>
                  <div>
                    {{ $data->user_profile->address ?? '' }}
                  </div>
                </div>
              </div>
            </div><!-- main-profile-contact-list -->
          </div>
        </div>
      </div>
      <!-- /Col -->

      <!-- Col -->
      <div class="col-lg-8">
        <div class="card">
          <div class="card-body">
            <form class="form-horizontal" id="form" method="POST">
              @csrf
              <input type="hidden" name="id" id="id" value="{{ $data->id }}">
              <div class="mb-4 main-content-label">IDENTITAS</div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Username</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control" disabled id="username" name="username"  placeholder="Username" value="{{ $data->username ?? ''}}">
                  </div>
                </div>
              </div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">NIP/NIM</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="nip_nim" name="nip_nim" placeholder="Your id" value="{{ $data->user_profile->nip_nim ?? ''}}">
                  </div>
                </div>
              </div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Nama</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="{{ $data->user_profile->name ?? ''}}">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row mg-t-10">
                  <div class="col-md-3">
                    <label class="form-label">Jenis Kelamin</label>
                  </div>
                  <div class="col-md-9">
                    <div class="row">
                      <div class="col-md-6">
                        <label class="rdiobox"><input id="lk" name="gender" {{ $data->user_profile != null ? $data->user_profile->gender  == 'Laki-laki' ? 'checked' : '' : '' }}  value="Laki-laki" type="radio"> <span>Laki-laki</span></label>
                      </div>
                      <div class="col-md-6">
                        <label class="rdiobox"><input id="lk" name="gender" {{ $data->user_profile != null ? $data->user_profile->gender  == 'Perempuan' ? 'checked' : '' : '' }}  value="Perempuan" type="radio"> <span>Perempuan</span></label>
                      </div>
                    </div>
                  </div>
								</div>
              </div>
              <div class="mb-4 main-content-label">INFO KONTAK</div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Email</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $data->email ?? ''}}">
                  </div>
                </div>
              </div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Nomor Hp</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="phone_number" name="phone_number"  placeholder="phone number" value="{{ $data->user_profile->phone_number ?? '' }}">
                  </div>
                </div>
              </div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Alamat</label>
                  </div>
                  <div class="col-md-9">
                    <textarea class="form-control" id="address"  name="address" rows="2"  placeholder="Address">{{ $data->user_profile->address ?? '' }}</textarea>
                  </div>
                </div>
              </div>
            </form>
            <div class="card-footer">
              <button type="button" id="btnSave" class="btn btn-primary waves-effect waves-light">Update Profile</button>
              <button type="button" id="btnUpdatePw" class="btn btn-primary waves-effect waves-light modal-effect" data-bs-effect="effect-super-scaled" onclick="updatePassword()">Ubah Password</button>
              <!-- <a class="btn btn-primary modal-effect mb-3 data-table-btn ms-4" data-bs-effect="effect-super-scaled" onclick="updatePassword()">
                    <span class="fe fe-plus"> </span>Tambah data baru
                </a> -->
            </div>
        </div>
        </div>
      <!-- /Col -->
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal_password">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Ubah Password</h6>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                        <form id="formPassword" method="POST">
                            @csrf
                        <div class="form-group">
                            <input type="hidden" value="{{ auth()->user()->id }}" id="idPassword" name="idPassword">
                            <div class="mb-3">
                                <label for="currentPassword" class="form-label">Password saat ini</label>
                                <input type="password" placeholder="" value="" name="currentPassword" class="form-control" id="currentPassword">
                            </div>
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">Password baru</label>
                                <input type="password" placeholder="Setidaknya 8 karakter" value="" name="password" class="form-control" id="newPassword">
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Konfirmasi password</label>
                                <input type="password" placeholder="Setidaknya 8 karakter" value="" name="password_confirmation" class="form-control" id="confirmPassword">
                            </div>
                        </div>
                    </div>
                </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                        <button  id="btnSavePw" class="btn btn-primary">Simpan</button>
                    </div>
            </div>
        </div>
      </div>
    <!-- Modal Closed -->
  </div>
    <!-- row closed -->

@endsection

@section('script')

<!-- DATA TABLE JS-->
<script src="{{ asset('simbapar/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/dataTables.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/js/jszip.min.js') }}"></script>
{{-- <script src="{{ asset('simbapar/assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script> --}}
{{-- <script src="{{ asset('simbapar/assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script> --}}
<script src="{{ asset('simbapar/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('simbapar/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>

<!--moment JS -->
<script src="{{ asset('simbapar/assets/plugins/moment/moment.js') }}"></script>

<script src="{{ asset('simbapar/assets/plugins/fileuploads/js/fileupload.js') }}"></script>

<script src="{{ asset('simbapar/assets/js/script.js') }}"></script>
<script>
  $(document).ready(function(){

    $('#btnSave').on('click', function () {
        submit();
    })

    $('#btnSavePw').on('click', function () {
      // console.log('haloooo');
      $('#formPassword').submit();
    })
    
    $('#btnClose').hide();
    
    $('#form').on('submit', function(e){
      e.preventDefault();
      
      submit();
    })
    
    $('#formPassword').on('submit', function(e){
      e.preventDefault();

      var id = $('#idPassword').val();
      const _form = this
      const data = new FormData(_form);
      data.append('_method', 'PUT');
      
      var url = "{{ route('profile-password.change',":id") }}";
      url = url.replace(':id', id);
    
      $('#btnSavePw').text('Menyimpan...');
      $('#btnSavePw').attr('disabled', true);

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            processData:false,
            success: function (data) {
                if(data.status) {
                    $('#modal_password').modal('hide');
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: data.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    
                    $('#btnSavePw').text('Simpan');
                    $('#btnSavePw').attr('disabled', false);
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
                
                $('#btnSavePw').text('Simpan');
                $('#btnSavePw').attr('disabled',false); //set button enable 
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
                $('#btnSavePw').text('Simpan');
                $('#btnSavePw').attr('disabled', false);
            },
        });
      });
  });

  function updateImage(){
    var html = `
    <form id="form-image" action="{{ route('profile-image.update', $data->id)  }}" enctype="multipart/form-data" method="POST" >
      @csrf
      @method('put')
      <input type="hidden" name="old_image" id="old_image" value="{{ $data->user_profile ? $data->user_profile->image : ''}}">
      <input id="image" class="dropify" type="file" accept=".jpg,.png,.svg,.jpeg,.webp" name="image" data-allowed-file-extensions="jpeg jpg png webp svg" />
      <small class="text-danger">Ukuran foto maksimal 1MB</small>
    </form>
    <div class="mt-3">
      <button type="button" id="btnUpload" onclick="uploadImage()" class="btn btn-info ">Unggah</button>
      @if($data->user_profile != null && $data->user_profile->image != null)
        <button class="btn btn-danger" id="btnDelete" onclick="destroyImage('{{ $data->id }}')" type="button">Hapus Foto</button>
      @endif
    </div>
    `;
    
    $('.main-profile-overview').append(html);
    
    $('.dropify').dropify();

    $('#btnEdit').hide();
    $('#btnClose').show();
  };

  
  function uploadImage() {
    $('#form-image').submit();
  }

  // function uploadImage() {

  //   $('#btnUpload').text('Mengunggah...');
  //   $('#btnUpload').attr('disabled', true);

  //   $('#form-image').submit();
  //   $('#form-image').on('submit', function(e){
  //     e.preventDefault();
  //     $.ajax({
  //       type: 'PUT',
  //       url : `{{ route('profile-image.update', $data->id) }}`, // or whatever
  //       data: new FormData(this),
  //       dataType: 'json',
  //       contentType: false,
  //       cache: false,
  //       processData:false,
  //       success: function (data) {
  //             if(data.status) {
  //                 Swal.fire({
  //                     toast: true,
  //                     position: 'top-end',
  //                     icon: 'success',
  //                     title: data.message,
  //                     showConfirmButton: false,
  //                     timer: 1500
  //                 });
  //                 window.location.reload();

  //                 $('#btnUpload').text('Unggah');
  //                 $('#btnUpload').attr('disabled', false);
  //             }else{
  //               Swal.fire({
  //                     toast: true,
  //                     position: 'top-end',
  //                     icon: 'error',
  //                     title: 'ERROR !',
  //                     text: data.message,
  //                     showConfirmButton: false,
  //                     timer: 2000
  //                 });
  //             }
  //         }, 
  //         error: function(data){
  //             var error_message = "";
  //             error_message += " ";
              
  //             $.each( data.responseJSON.errors, function( key, value ) {
  //                 error_message +=" "+value+" ";
  //             });

  //             let errors = data.responseJSON?.errors

  //             if(errors){
  //                 for(const [key, value] of Object.entries(errors)){
  //                     $(`[name='${key}']`).parent().append(`<sp class="text-danger text-small">${value}</sp>`)
  //                     $(`[name='${key}']`).addClass('is-invalid')
  //                 }
  //             }

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
  //             $('#btnUpload').text('Unggah');
  //             $('#btnUpload').attr('disabled', false);
  //         },
  //     })
  //   })
  // }

  function deleteForm() {
    $('#form-image, #btnUpload, #btnCancel, #btnDelete').remove();
    $('#btnEdit').show();
    $('#btnClose').hide();
  }

  function submit() {
        var id          = $('#id').val();
        var username        = $('#username').val();
        var gender        = $('input[name=gender]:checked').val();
        var name        = $('#name').val();
        var nip_nim        = $('#nip_nim').val();
        var phone_number        = $('#phone_number').val();
        var address        = $('#address').val();
        var email        = $('#email').val();
    
        $('#btnSave').text('Menyimpan...');
        $('#btnSave').attr('disabled', true);

        var url = "{{ route('profile.update',":id") }}";
        url = url.replace(':id', id);

        $.ajax({
            url: url,
            type: 'PUT',
            dataType: 'json',
            data: {
                id: id,
                username: username,
                gender: gender,
                name: name,
                nip_nim: nip_nim,
                address: address,
                phone_number: phone_number,
                email: email,
            },
            success: function (data) {
                if(data.status) {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: data.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    window.location.reload();

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

    function destroyImage(id) {
        var url = "{{ route('profile-image.delete',":id") }}";
        url = url.replace(':id', id);
    
        Swal.fire({
            title: "Yakin ingin menghapus foto?",
            text: "Ketika foto terhapus, anda tidak bisa mengembalikan foto tersbut!",
            icon: "warning",
            showCancelButton  : true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor : "#d33",
            confirmButtonText : "Ya, Hapus!"
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url    : url,
                    type   : "delete",
                    data: { "id":id },
                    dataType: "JSON",
                    success: function(data) {
                        window.location.reload();
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            title: 'Foto berhasil dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                })
            }
        })
    } 

    function updatePassword(){
      $('#formPassword').find('.text-danger.text-small').remove();
      $('#formPassword').find('input,select').removeClass('is-invalid');
      $('#formPassword')[0].reset();
      $('#modal_password').modal('show');
    }

  
</script>
@endsection