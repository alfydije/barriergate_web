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
						<h4 class="content-title mb-2">Hi, welcome back {{ $data->username }}!</h4>
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
                <div class="main-img-user profile-user"><img alt="" src="{{ asset($data->user_profile->image ?? 'assets/images/default-profile.jpg') }}"><a href="JavaScript:updateImage();" class="ion-ios-brush fs-5 profile-edit"></a></div>
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
              Contact
            </div>
            <div class="main-profile-contact-list">
              <div class="media">
                <div class="media-icon bg-primary-transparent text-primary">
                  <i class="icon ion-md-phone-portrait"></i>
                </div>
                <div class="media-body">
                  <span>Mobile</span>
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
                  <span>Current Address</span>
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
              <div class="mb-4 main-content-label">Name</div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Username</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="username" name="username"  placeholder="Username" value="{{ $data->username ?? ''}}">
                  </div>
                </div>
              </div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Name</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="{{ $data->user_profile->name ?? ''}}">
                  </div>
                </div>
              </div>
              <div class="mb-4 main-content-label">Contact Info</div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Email<i>(required)</i></label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $data->email ?? ''}}">
                  </div>
                </div>
              </div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Phone</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="phone_number" name="phone_number"  placeholder="phone number" value="{{ $data->user_profile->phone_number ?? '' }}">
                  </div>
                </div>
              </div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Address</label>
                  </div>
                  <div class="col-md-9">
                    <textarea class="form-control" id="address"  name="address" rows="2"  placeholder="Address">{{ $data->user_profile->address ?? '' }}</textarea>
                  </div>
                </div>
              </div>
            </form>
            <div class="card-footer">
              <button type="button" id="btnSave" class="btn btn-primary waves-effect waves-light">Update Profile</button>
            </div>
        </div>
        </div>
      <!-- /Col -->
      </div>
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
    
    $('#form').on('submit', function(e){
        e.preventDefault();

        submit();
    })
  });

  function updateImage(){
    var html = `
    <form id="form-image" enctype="multipart/form-data" method="POST" >
      @csrf
      <input id="image" class="dropify" type="file" name="image" data-allowed-file-extensions="jpeg jpg png webp svg" />
    </form>
    <button type="button" class="btn btn-info mt-3">Unggah</button>
    `;
    
    $('.main-profile-overview').append(html);
    
    $('.dropify').dropify();

    $('.profile-edit').hide();
  };

  function submit() {
        var id          = $('#id').val();
        var username        = $('#username').val();
        var name        = $('#name').val();
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
                name: name,
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

  
</script>
@endsection