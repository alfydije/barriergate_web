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
                <div class="main-img-user profile-user"><img alt="" src="{{ asset($data->user_profile->image) }}"><a href="JavaScript:void(0);" class="fas fa-camera profile-edit"></a></div>
                <div class="d-flex justify-content-between mg-b-20">
                  <div>
                    <h5 class="main-profile-name">{{ $data->user_profile->name }}</h5>
                    <p class="main-profile-name-text">{{ $data->getRoleNames()->first() }}</p>
                  </div>
                </div>
                <!-- <h6>Bio</h6>
                <div class="main-profile-bio">
                  pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure.. <a href="">More</a>
                </div> -->

                <!-- main-profile-bio -->
                <!-- <div class="main-profile-work-list">
                  <div class="media">
                    <div class="media-logo bg-success-transparent text-success">
                      <i class="icon ion-logo-whatsapp"></i>
                    </div>
                    <div class="media-body">
                      <h6>Web Designer at <a href="">Spruko</a></h6><span>2018 - present</span>
                      <p>Past Work: Spruko, Inc.</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-logo bg-primary-transparent text-primary">
                      <i class="icon ion-logo-buffer"></i>
                    </div>
                    <div class="media-body">
                      <h6>Studied at <a href="">University</a></h6><span>2004-2008</span>
                      <p>Graduation: Bachelor of Science in Computer Science</p>
                    </div>
                  </div>
                </div> -->
                <!-- main-profile-work-list -->

                <!-- <hr class="mg-y-30">
                <label class="main-content-label tx-13 mg-b-20">Social</label>
                <div class="main-profile-social-list">
                  <div class="media">
                    <div class="media-icon bg-primary-transparent text-primary">
                      <i class="icon ion-logo-github"></i>
                    </div>
                    <div class="media-body">
                      <span>Github</span> <a href="">github.com/spruko</a>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon bg-success-transparent text-success">
                      <i class="icon ion-logo-twitter"></i>
                    </div>
                    <div class="media-body">
                      <span>Twitter</span> <a href="">twitter.com/spruko.me</a>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon bg-info-transparent text-info">
                      <i class="icon ion-logo-linkedin"></i>
                    </div>
                    <div class="media-body">
                      <span>Linkedin</span> <a href="">linkedin.com/in/spruko</a>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-icon bg-danger-transparent text-danger">
                      <i class="icon ion-md-link"></i>
                    </div>
                    <div class="media-body">
                      <span>My Portfolio</span> <a href="">spruko.com/</a>
                    </div>
                  </div>
                </div>main-profile-social-list -->
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
                    {{ $data->user_profile->phone_number }}
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
                    San Francisco, CA
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
            <!-- <div class="mb-4 main-content-label">Personal Information</div>
            <form class="form-horizontal">
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Language</label>
                  </div>
                  <div class="col-md-9">
                    <select class="form-control select2">
                      <option>Us English</option>
                      <option>Arabic</option>
                      <option>Korean</option>
                    </select>
                  </div>
                </div>
              </div> -->
              <div class="mb-4 main-content-label">Name</div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">User Name</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control"  placeholder="User Name" value="{{ $data->username }}">
                  </div>
                </div>
              </div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Name</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control"  placeholder="First Name" value="{{ $data->user_profile->name }}">
                  </div>
                </div>
              </div>
              <!-- <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">last Name</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control"  placeholder="Last Name" value="Redashna">
                  </div>
                </div>
              </div> -->
              <!-- <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Nick Name</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control"  placeholder="Nick Name" value="Redash">
                  </div>
                </div>
              </div> -->
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Status</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control"  placeholder="Designation" value="{{ $data->username }}">
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
                    <input type="text" class="form-control"  placeholder="Email" value="{{ $data->email }}">
                  </div>
                </div>
              </div>
              <!-- <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Website</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control"  placeholder="Website" value="@spruko.w">
                  </div>
                </div>
              </div> -->
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Phone</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control"  placeholder="phone number" value="{{ $data->user_profile->phone_number }}">
                  </div>
                </div>
              </div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Address</label>
                  </div>
                  <div class="col-md-9">
                    <textarea class="form-control" name="example-textarea-input" rows="2"  placeholder="Address">San Francisco, CA</textarea>
                  </div>
                </div>
              </div>
              <!-- <div class="mb-4 main-content-label">Social Info</div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Twitter</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control"  placeholder="twitter" value="twitter.com/spruko.me">
                  </div>
                </div>
              </div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Facebook</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control"  placeholder="facebook" value="https://www.facebook.com/Redash">
                  </div>
                </div>
              </div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Google+</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control"  placeholder="google" value="spruko.com">
                  </div>
                </div>
              </div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Linked in</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control"  placeholder="linkedin" value="linkedin.com/in/spruko">
                  </div>
                </div>
              </div>
              <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Github</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="github" value="github.com/sprukos">
                  </div>
                </div>
              </div>
              <div class="mb-4 main-content-label">About Yourself</div> -->
              <!-- <div class="form-group ">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Biographical Info</label>
                  </div>
                  <div class="col-md-9">
                    <textarea class="form-control" name="example-textarea-input" rows="4" placeholder="">pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure..</textarea>
                  </div>
                </div>
              </div> -->
              <!-- <div class="mb-4 main-content-label">Email Preferences</div>
              <div class="form-group mb-0">
                <div class="row">
                  <div class="col-md-3">
                    <label class="form-label">Verified User</label>
                  </div>
                  <div class="col-md-9">
                    <div class="custom-controls-stacked">
                      <label class="ckbox mg-b-10"><input checked="" type="checkbox"><span> Accept to receive post or page notification emails</span></label>
                      <label class="ckbox"><input checked="" type="checkbox"><span> Accept to receive email sent to multiple recipients</span></label>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div> -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
          </div>
        </div>
      </div>
      <!-- /Col -->
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

<script src="{{ asset('simbapar/assets/js/script.js') }}"></script>
@endsection