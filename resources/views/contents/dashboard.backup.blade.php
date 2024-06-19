@extends('layout.main')

@section('title', 'Dashboard')

@section('css')

@endsection

@section('breadcumb')
<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">Hi, welcome back!</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a   href="javascript:void(0);"></a></li>
                <li class="breadcrumb-item active" aria-current="page"> Dashboard</li>
            </ol>
        </nav>
    </div>
    <!-- <div class="d-flex my-auto">
        <div class=" d-flex right-page">
            <div class="d-flex justify-content-center me-5">
                <div class="">
                    <span class="d-block">
                        <span class="label ">EXPENSES</span>
                    </span>
                    <span class="value">
                        $53,000
                    </span>
                </div>
                <div class="ms-3 mt-2">
                    <span class="sparkline_bar"></span>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="">
                    <span class="d-block">
                        <span class="label">PROFIT</span>
                    </span>
                    <span class="value">
                        $34,000
                    </span>
                </div>
                <div class="ms-3 mt-2">
                    <span class="sparkline_bar31"></span>
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection

@section('content')

<!-- main-content-body -->
<div class="main-content-body auth">
    <div class="row row-sm">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="card overflow-hidden project-card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="my-auto">
                            <svg enable-background="new 0 0 469.682 469.682" version="1.1"
                                class="me-4 ht-60 wd-60 my-auto primary" viewBox="0 0 469.68 469.68"
                                xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m120.41 298.32h87.771c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449h-87.771c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449z" />
                                <path
                                    d="m291.77 319.22h-171.36c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h171.36c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z" />
                                <path
                                    d="m291.77 361.01h-171.36c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h171.36c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z" />
                                <path
                                    d="m420.29 387.14v-344.82c0-22.987-16.196-42.318-39.183-42.318h-224.65c-22.988 0-44.408 19.331-44.408 42.318v20.376h-18.286c-22.988 0-44.408 17.763-44.408 40.751v345.34c0.68 6.37 4.644 11.919 10.449 14.629 6.009 2.654 13.026 1.416 17.763-3.135l31.869-28.735 38.139 33.959c2.845 2.639 6.569 4.128 10.449 4.18 3.861-0.144 7.554-1.621 10.449-4.18l37.616-33.959 37.616 33.959c5.95 5.322 14.948 5.322 20.898 0l38.139-33.959 31.347 28.735c3.795 4.671 10.374 5.987 15.673 3.135 5.191-2.98 8.232-8.656 7.837-14.629v-74.188l6.269-4.702 31.869 28.735c2.947 2.811 6.901 4.318 10.971 4.18 1.806 0.163 3.62-0.2 5.224-1.045 5.493-2.735 8.793-8.511 8.361-14.629zm-83.591 50.155-24.555-24.033c-5.533-5.656-14.56-5.887-20.376-0.522l-38.139 33.959-37.094-33.959c-6.108-4.89-14.79-4.89-20.898 0l-37.616 33.959-38.139-33.959c-6.589-5.4-16.134-5.178-22.465 0.522l-27.167 24.033v-333.84c0-11.494 12.016-19.853 23.51-19.853h224.65c11.494 0 18.286 8.359 18.286 19.853v333.84zm62.693-61.649-26.122-24.033c-4.18-4.18-5.224-5.224-15.673-3.657v-244.51c1.157-21.321-15.19-39.542-36.51-40.699-0.89-0.048-1.782-0.066-2.673-0.052h-185.47v-20.376c0-11.494 12.016-21.42 23.51-21.42h224.65c11.494 0 18.286 9.927 18.286 21.42v333.32z" />
                                <path
                                    d="m232.21 104.49h-57.47c-11.542 0-20.898 9.356-20.898 20.898v104.49c0 11.542 9.356 20.898 20.898 20.898h57.469c11.542 0 20.898-9.356 20.898-20.898v-104.49c1e-3 -11.542-9.356-20.898-20.897-20.898zm0 123.3h-57.47v-13.584h57.469v13.584zm0-34.482h-57.47v-67.918h57.469v67.918z" />
                            </svg>
                        </div>
                        <div class="project-content">
                            <h6>Monitoring Parkir</h6>
                            <ul>
                                <li>
                                    <strong>Terdaftar</strong>
                                    <span class="counter number-font">6</span>
                                </li>

                                <li>
                                    <strong>Not-Permission</strong>
                                    <span>0</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="card  overflow-hidden project-card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="my-auto">
                            <svg enable-background="new 0 0 438.891 438.891"
                                class="me-4 ht-60 wd-60 my-auto danger" version="1.1"
                                viewBox="0 0 438.89 438.89" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m347.97 57.503h-39.706v-17.763c0-5.747-6.269-8.359-12.016-8.359h-30.824c-7.314-20.898-25.6-31.347-46.498-31.347-20.668-0.777-39.467 11.896-46.498 31.347h-30.302c-5.747 0-11.494 2.612-11.494 8.359v17.763h-39.707c-23.53 0.251-42.78 18.813-43.886 42.318v299.36c0 22.988 20.898 39.706 43.886 39.706h257.04c22.988 0 43.886-16.718 43.886-39.706v-299.36c-1.106-23.506-20.356-42.068-43.886-42.319zm-196.44-5.224h28.735c5.016-0.612 9.045-4.428 9.927-9.404 3.094-13.474 14.915-23.146 28.735-23.51 13.692 0.415 25.335 10.117 28.212 23.51 0.937 5.148 5.232 9.013 10.449 9.404h29.78v41.796h-135.84v-41.796zm219.43 346.91c0 11.494-11.494 18.808-22.988 18.808h-257.04c-11.494 0-22.988-7.314-22.988-18.808v-299.36c1.066-11.964 10.978-21.201 22.988-21.42h39.706v26.645c0.552 5.854 5.622 10.233 11.494 9.927h154.12c5.98 0.327 11.209-3.992 12.016-9.927v-26.646h39.706c12.009 0.22 21.922 9.456 22.988 21.42v299.36z" />
                                <path
                                    d="m179.22 233.57c-3.919-4.131-10.425-4.364-14.629-0.522l-33.437 31.869-14.106-14.629c-3.919-4.131-10.425-4.363-14.629-0.522-4.047 4.24-4.047 10.911 0 15.151l21.42 21.943c1.854 2.076 4.532 3.224 7.314 3.135 2.756-0.039 5.385-1.166 7.314-3.135l40.751-38.661c4.04-3.706 4.31-9.986 0.603-14.025-0.19-0.211-0.391-0.412-0.601-0.604z" />
                                <path
                                    d="m329.16 256.03h-120.16c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h120.16c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z" />
                                <path
                                    d="m179.22 149.98c-3.919-4.131-10.425-4.364-14.629-0.522l-33.437 31.869-14.106-14.629c-3.919-4.131-10.425-4.364-14.629-0.522-4.047 4.24-4.047 10.911 0 15.151l21.42 21.943c1.854 2.076 4.532 3.224 7.314 3.135 2.756-0.039 5.385-1.166 7.314-3.135l40.751-38.661c4.04-3.706 4.31-9.986 0.603-14.025-0.19-0.211-0.391-0.412-0.601-0.604z" />
                                <path
                                    d="m329.16 172.44h-120.16c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h120.16c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z" />
                                <path
                                    d="m179.22 317.16c-3.919-4.131-10.425-4.363-14.629-0.522l-33.437 31.869-14.106-14.629c-3.919-4.131-10.425-4.363-14.629-0.522-4.047 4.24-4.047 10.911 0 15.151l21.42 21.943c1.854 2.076 4.532 3.224 7.314 3.135 2.756-0.039 5.385-1.166 7.314-3.135l40.751-38.661c4.04-3.706 4.31-9.986 0.603-14.025-0.19-0.21-0.391-0.411-0.601-0.604z" />
                                <path
                                    d="m329.16 339.63h-120.16c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h120.16c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z" />
                            </svg>
                        </div>
                        <div class="project-content">
                            <h6>StartUp Company</h6>
                            <ul>
                                <li>
                                    <strong>Terdaftar</strong>
                                    <span class="counter number-font">15</span>
                                </li>

                                <li>
                                    <strong>Not-Permission</strong>
                                    <span class="counter number-font">17</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="card overflow-hidden project-card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="my-auto">
                            <svg enable-background="new 0 0 477.849 477.849"
                                class="me-4 ht-60 wd-60 my-auto success" version="1.1"
                                viewBox="0 0 477.85 477.85" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m374.1 385.52c71.682-74.715 69.224-193.39-5.492-265.08-34.974-33.554-81.584-52.26-130.05-52.193-103.54-0.144-187.59 83.676-187.74 187.22-0.067 48.467 18.639 95.077 52.193 130.05l-48.777 65.024c-5.655 7.541-4.127 18.238 3.413 23.893s18.238 4.127 23.893-3.413l47.275-63.044c65.4 47.651 154.08 47.651 219.48 0l47.275 63.044c5.655 7.541 16.353 9.069 23.893 3.413 7.541-5.655 9.069-16.353 3.413-23.893l-48.775-65.024zm-135.54 24.064c-84.792-0.094-153.51-68.808-153.6-153.6 0-84.831 68.769-153.6 153.6-153.6s153.6 68.769 153.6 153.6-68.769 153.6-153.6 153.6z" />
                                <path
                                    d="m145.29 24.984c-33.742-32.902-87.767-32.221-120.67 1.521-32.314 33.139-32.318 85.997-8e-3 119.14 6.665 6.663 17.468 6.663 24.132 0l96.546-96.529c6.663-6.665 6.663-17.468 0-24.133zm-106.55 82.398c-12.186-25.516-1.38-56.08 24.136-68.267 13.955-6.665 30.175-6.665 44.131 0l-68.267 68.267z" />
                                <path
                                    d="m452.49 24.984c-33.323-33.313-87.339-33.313-120.66 0-6.663 6.665-6.663 17.468 0 24.132l96.529 96.529c6.665 6.663 17.468 6.663 24.132 0 33.313-33.322 33.313-87.338 0-120.66zm-14.08 82.449-68.301-68.301c19.632-9.021 42.79-5.041 58.283 10.018 15.356 15.341 19.371 38.696 10.018 58.283z" />
                                <path
                                    d="m238.56 136.52c-9.426 0-17.067 7.641-17.067 17.067v96.717l-47.787 63.71c-5.655 7.541-4.127 18.238 3.413 23.893s18.238 4.127 23.893-3.413l51.2-68.267c2.216-2.954 3.413-6.547 3.413-10.24v-102.4c1e-3 -9.426-7.64-17.067-17.065-17.067z" />
                            </svg>
                        </div>
                        <div class="project-content">
                            <h6>Asosiasi</h6>
                            <ul>
                                <li>
                                    <strong>Komunitas</strong>
                                    <span class="counter number-font">5</span>
                                </li>

                                <li>
                                    <strong>Not-Permission</strong>
                                    <span class="counter number-font">3</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="card overflow-hidden project-card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="my-auto">
                            <svg enable-background="new 0 0 512 512"
                                class="me-4 ht-60 wd-60 my-auto warning" version="1.1"
                                viewBox="0 0 512 512" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m259.2 317.72h-6.398c-8.174 0-14.824-6.65-14.824-14.824 1e-3 -8.172 6.65-14.822 14.824-14.822h6.398c8.174 0 14.825 6.65 14.825 14.824h29.776c0-20.548-13.972-37.885-32.911-43.035v-33.74h-29.777v33.739c-18.94 5.15-32.911 22.487-32.911 43.036 0 24.593 20.007 44.601 44.601 44.601h6.398c8.174 0 14.825 6.65 14.825 14.824s-6.65 14.824-14.825 14.824h-6.398c-8.174 0-14.824-6.65-14.824-14.824h-29.777c0 20.548 13.972 37.885 32.911 43.036v33.739h29.777v-33.74c18.94-5.15 32.911-22.487 32.911-43.035 0-24.594-20.008-44.603-44.601-44.603z" />
                                <path
                                    d="m502.7 432.52c-7.232-60.067-26.092-111.6-57.66-157.56-27.316-39.764-65.182-76.476-115.59-112.06v-46.29l37.89-98.425-21.667-0.017c-6.068-4e-3 -8.259-1.601-13.059-5.101-6.255-4.559-14.821-10.802-30.576-10.814h-0.046c-15.726 0-24.292 6.222-30.546 10.767-4.799 3.487-6.994 5.081-13.041 5.081h-0.027c-6.07-5e-3 -8.261-1.602-13.063-5.101-6.255-4.559-14.821-10.801-30.577-10.814h-0.047c-15.725 0-24.293 6.222-30.548 10.766-4.8 3.487-6.995 5.081-13.044 5.081h-0.027l-21.484-0.017 36.932 98.721v46.117c-51.158 36.047-89.636 72.709-117.47 111.92-33.021 46.517-52.561 98.116-59.74 157.74l-9.304 77.285h512l-9.304-77.284zm-301.06-395.47c4.8-3.487 6.995-5.081 13.045-5.081h0.026c6.07 4e-3 8.261 1.602 13.062 5.101 6.255 4.559 14.821 10.802 30.578 10.814h0.047c15.725 0 24.292-6.222 30.546-10.767 4.799-3.487 6.993-5.081 13.041-5.081h0.026c6.068 5e-3 8.259 1.602 13.059 5.101 2.869 2.09 6.223 4.536 10.535 6.572l-21.349 55.455h-92.526l-20.762-55.5c4.376-2.041 7.773-4.508 10.672-6.614zm98.029 91.89v26.799h-83.375v-26.799h83.375zm-266.09 351.08 5.292-43.947c6.571-54.574 24.383-101.7 54.458-144.07 26.645-37.537 62.54-71.458 112.73-106.5h103.78c101.84 71.198 150.75 146.35 163.29 250.56l5.291 43.948h-444.85z" />
                            </svg>
                        </div>
                        <div class="project-content">
                            <h6>Komunitas</h6>
                            <ul>
                                <li>
                                    <strong>Terdaftar</strong>
                                    <span class="counter number-font">6</span>
                                </li>
                                <li>
                                    <strong>Not-Permission</strong>
                                    <span class="counter number-font">6</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="card  overflow-hidden project-card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="my-auto">
                            <svg enable-background="new 0 0 438.891 438.891"
                                class="me-4 ht-60 wd-60 my-auto danger" version="1.1"
                                viewBox="0 0 438.89 438.89" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m347.97 57.503h-39.706v-17.763c0-5.747-6.269-8.359-12.016-8.359h-30.824c-7.314-20.898-25.6-31.347-46.498-31.347-20.668-0.777-39.467 11.896-46.498 31.347h-30.302c-5.747 0-11.494 2.612-11.494 8.359v17.763h-39.707c-23.53 0.251-42.78 18.813-43.886 42.318v299.36c0 22.988 20.898 39.706 43.886 39.706h257.04c22.988 0 43.886-16.718 43.886-39.706v-299.36c-1.106-23.506-20.356-42.068-43.886-42.319zm-196.44-5.224h28.735c5.016-0.612 9.045-4.428 9.927-9.404 3.094-13.474 14.915-23.146 28.735-23.51 13.692 0.415 25.335 10.117 28.212 23.51 0.937 5.148 5.232 9.013 10.449 9.404h29.78v41.796h-135.84v-41.796zm219.43 346.91c0 11.494-11.494 18.808-22.988 18.808h-257.04c-11.494 0-22.988-7.314-22.988-18.808v-299.36c1.066-11.964 10.978-21.201 22.988-21.42h39.706v26.645c0.552 5.854 5.622 10.233 11.494 9.927h154.12c5.98 0.327 11.209-3.992 12.016-9.927v-26.646h39.706c12.009 0.22 21.922 9.456 22.988 21.42v299.36z" />
                                <path
                                    d="m179.22 233.57c-3.919-4.131-10.425-4.364-14.629-0.522l-33.437 31.869-14.106-14.629c-3.919-4.131-10.425-4.363-14.629-0.522-4.047 4.24-4.047 10.911 0 15.151l21.42 21.943c1.854 2.076 4.532 3.224 7.314 3.135 2.756-0.039 5.385-1.166 7.314-3.135l40.751-38.661c4.04-3.706 4.31-9.986 0.603-14.025-0.19-0.211-0.391-0.412-0.601-0.604z" />
                                <path
                                    d="m329.16 256.03h-120.16c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h120.16c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z" />
                                <path
                                    d="m179.22 149.98c-3.919-4.131-10.425-4.364-14.629-0.522l-33.437 31.869-14.106-14.629c-3.919-4.131-10.425-4.364-14.629-0.522-4.047 4.24-4.047 10.911 0 15.151l21.42 21.943c1.854 2.076 4.532 3.224 7.314 3.135 2.756-0.039 5.385-1.166 7.314-3.135l40.751-38.661c4.04-3.706 4.31-9.986 0.603-14.025-0.19-0.211-0.391-0.412-0.601-0.604z" />
                                <path
                                    d="m329.16 172.44h-120.16c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h120.16c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z" />
                                <path
                                    d="m179.22 317.16c-3.919-4.131-10.425-4.363-14.629-0.522l-33.437 31.869-14.106-14.629c-3.919-4.131-10.425-4.363-14.629-0.522-4.047 4.24-4.047 10.911 0 15.151l21.42 21.943c1.854 2.076 4.532 3.224 7.314 3.135 2.756-0.039 5.385-1.166 7.314-3.135l40.751-38.661c4.04-3.706 4.31-9.986 0.603-14.025-0.19-0.21-0.391-0.411-0.601-0.604z" />
                                <path
                                    d="m329.16 339.63h-120.16c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h120.16c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z" />
                            </svg>
                        </div>
                        <div class="project-content">
                            <h6>Blog</h6>
                            <ul>
                                <li>
                                    <strong>Published</strong>
                                    <span class="counter number-font">42</span>
                                </li>

                                <li>
                                    <strong>Not-Permission</strong>
                                    <span class="counter number-font">23</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="card overflow-hidden project-card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="my-auto">
                            <svg enable-background="new 0 0 477.849 477.849"
                                class="me-4 ht-60 wd-60 my-auto success" version="1.1"
                                viewBox="0 0 477.85 477.85" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m374.1 385.52c71.682-74.715 69.224-193.39-5.492-265.08-34.974-33.554-81.584-52.26-130.05-52.193-103.54-0.144-187.59 83.676-187.74 187.22-0.067 48.467 18.639 95.077 52.193 130.05l-48.777 65.024c-5.655 7.541-4.127 18.238 3.413 23.893s18.238 4.127 23.893-3.413l47.275-63.044c65.4 47.651 154.08 47.651 219.48 0l47.275 63.044c5.655 7.541 16.353 9.069 23.893 3.413 7.541-5.655 9.069-16.353 3.413-23.893l-48.775-65.024zm-135.54 24.064c-84.792-0.094-153.51-68.808-153.6-153.6 0-84.831 68.769-153.6 153.6-153.6s153.6 68.769 153.6 153.6-68.769 153.6-153.6 153.6z" />
                                <path
                                    d="m145.29 24.984c-33.742-32.902-87.767-32.221-120.67 1.521-32.314 33.139-32.318 85.997-8e-3 119.14 6.665 6.663 17.468 6.663 24.132 0l96.546-96.529c6.663-6.665 6.663-17.468 0-24.133zm-106.55 82.398c-12.186-25.516-1.38-56.08 24.136-68.267 13.955-6.665 30.175-6.665 44.131 0l-68.267 68.267z" />
                                <path
                                    d="m452.49 24.984c-33.323-33.313-87.339-33.313-120.66 0-6.663 6.665-6.663 17.468 0 24.132l96.529 96.529c6.665 6.663 17.468 6.663 24.132 0 33.313-33.322 33.313-87.338 0-120.66zm-14.08 82.449-68.301-68.301c19.632-9.021 42.79-5.041 58.283 10.018 15.356 15.341 19.371 38.696 10.018 58.283z" />
                                <path
                                    d="m238.56 136.52c-9.426 0-17.067 7.641-17.067 17.067v96.717l-47.787 63.71c-5.655 7.541-4.127 18.238 3.413 23.893s18.238 4.127 23.893-3.413l51.2-68.267c2.216-2.954 3.413-6.547 3.413-10.24v-102.4c1e-3 -9.426-7.64-17.067-17.065-17.067z" />
                            </svg>
                        </div>
                        <div class="project-content">
                            <h6>App & Software</h6>
                            <ul>
                                <li>
                                    <strong>Published</strong>
                                    <span class="counter number-font">2</span>
                                </li>

                                <li>
                                    <strong>Not-Permission</strong>
                                    <span class="counter number-font">16</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="card overflow-hidden project-card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="my-auto">
                            <svg enable-background="new 0 0 469.682 469.682" version="1.1"
                                class="me-4 ht-60 wd-60 my-auto primary" viewBox="0 0 469.68 469.68"
                                xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m120.41 298.32h87.771c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449h-87.771c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449z" />
                                <path
                                    d="m291.77 319.22h-171.36c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h171.36c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z" />
                                <path
                                    d="m291.77 361.01h-171.36c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h171.36c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z" />
                                <path
                                    d="m420.29 387.14v-344.82c0-22.987-16.196-42.318-39.183-42.318h-224.65c-22.988 0-44.408 19.331-44.408 42.318v20.376h-18.286c-22.988 0-44.408 17.763-44.408 40.751v345.34c0.68 6.37 4.644 11.919 10.449 14.629 6.009 2.654 13.026 1.416 17.763-3.135l31.869-28.735 38.139 33.959c2.845 2.639 6.569 4.128 10.449 4.18 3.861-0.144 7.554-1.621 10.449-4.18l37.616-33.959 37.616 33.959c5.95 5.322 14.948 5.322 20.898 0l38.139-33.959 31.347 28.735c3.795 4.671 10.374 5.987 15.673 3.135 5.191-2.98 8.232-8.656 7.837-14.629v-74.188l6.269-4.702 31.869 28.735c2.947 2.811 6.901 4.318 10.971 4.18 1.806 0.163 3.62-0.2 5.224-1.045 5.493-2.735 8.793-8.511 8.361-14.629zm-83.591 50.155-24.555-24.033c-5.533-5.656-14.56-5.887-20.376-0.522l-38.139 33.959-37.094-33.959c-6.108-4.89-14.79-4.89-20.898 0l-37.616 33.959-38.139-33.959c-6.589-5.4-16.134-5.178-22.465 0.522l-27.167 24.033v-333.84c0-11.494 12.016-19.853 23.51-19.853h224.65c11.494 0 18.286 8.359 18.286 19.853v333.84zm62.693-61.649-26.122-24.033c-4.18-4.18-5.224-5.224-15.673-3.657v-244.51c1.157-21.321-15.19-39.542-36.51-40.699-0.89-0.048-1.782-0.066-2.673-0.052h-185.47v-20.376c0-11.494 12.016-21.42 23.51-21.42h224.65c11.494 0 18.286 9.927 18.286 21.42v333.32z" />
                                <path
                                    d="m232.21 104.49h-57.47c-11.542 0-20.898 9.356-20.898 20.898v104.49c0 11.542 9.356 20.898 20.898 20.898h57.469c11.542 0 20.898-9.356 20.898-20.898v-104.49c1e-3 -11.542-9.356-20.898-20.897-20.898zm0 123.3h-57.47v-13.584h57.469v13.584zm0-34.482h-57.47v-67.918h57.469v67.918z" />
                            </svg>
                        </div>
                        <div class="project-content">
                            <h6>Event</h6>
                            <ul>
                                <li>
                                    <strong>Published</strong>
                                    <span class="counter number-font">5</span>
                                </li>

                                <li>
                                    <strong>Not-Permission</strong>
                                    <span class="counter number-font">56</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <div class="card overflow-hidden project-card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="my-auto">
                            <svg enable-background="new 0 0 512 512"
                                class="me-4 ht-60 wd-60 my-auto warning" version="1.1"
                                viewBox="0 0 512 512" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m259.2 317.72h-6.398c-8.174 0-14.824-6.65-14.824-14.824 1e-3 -8.172 6.65-14.822 14.824-14.822h6.398c8.174 0 14.825 6.65 14.825 14.824h29.776c0-20.548-13.972-37.885-32.911-43.035v-33.74h-29.777v33.739c-18.94 5.15-32.911 22.487-32.911 43.036 0 24.593 20.007 44.601 44.601 44.601h6.398c8.174 0 14.825 6.65 14.825 14.824s-6.65 14.824-14.825 14.824h-6.398c-8.174 0-14.824-6.65-14.824-14.824h-29.777c0 20.548 13.972 37.885 32.911 43.036v33.739h29.777v-33.74c18.94-5.15 32.911-22.487 32.911-43.035 0-24.594-20.008-44.603-44.601-44.603z" />
                                <path
                                    d="m502.7 432.52c-7.232-60.067-26.092-111.6-57.66-157.56-27.316-39.764-65.182-76.476-115.59-112.06v-46.29l37.89-98.425-21.667-0.017c-6.068-4e-3 -8.259-1.601-13.059-5.101-6.255-4.559-14.821-10.802-30.576-10.814h-0.046c-15.726 0-24.292 6.222-30.546 10.767-4.799 3.487-6.994 5.081-13.041 5.081h-0.027c-6.07-5e-3 -8.261-1.602-13.063-5.101-6.255-4.559-14.821-10.801-30.577-10.814h-0.047c-15.725 0-24.293 6.222-30.548 10.766-4.8 3.487-6.995 5.081-13.044 5.081h-0.027l-21.484-0.017 36.932 98.721v46.117c-51.158 36.047-89.636 72.709-117.47 111.92-33.021 46.517-52.561 98.116-59.74 157.74l-9.304 77.285h512l-9.304-77.284zm-301.06-395.47c4.8-3.487 6.995-5.081 13.045-5.081h0.026c6.07 4e-3 8.261 1.602 13.062 5.101 6.255 4.559 14.821 10.802 30.578 10.814h0.047c15.725 0 24.292-6.222 30.546-10.767 4.799-3.487 6.993-5.081 13.041-5.081h0.026c6.068 5e-3 8.259 1.602 13.059 5.101 2.869 2.09 6.223 4.536 10.535 6.572l-21.349 55.455h-92.526l-20.762-55.5c4.376-2.041 7.773-4.508 10.672-6.614zm98.029 91.89v26.799h-83.375v-26.799h83.375zm-266.09 351.08 5.292-43.947c6.571-54.574 24.383-101.7 54.458-144.07 26.645-37.537 62.54-71.458 112.73-106.5h103.78c101.84 71.198 150.75 146.35 163.29 250.56l5.291 43.948h-444.85z" />
                            </svg>
                        </div>
                        <div class="project-content">
                            <h6>Member Event</h6>
                            <ul>
                                <li>
                                    <strong>Aktif User Event</strong>
                                    <span class="counter number-font">500</span>
                                </li>
                                <li>
                                    <strong>New User Event</strong>
                                    <span>null</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- row -->
    <div class="row row-sm ">
        <div class="col-sm-12 col-md-12">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Visitor Subscribe
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.
                    </p>
                    <div id="echart2" class="ht-300"></div>
                </div>
            </div>
        </div><!-- col-6 -->



    </div>
    <!-- /row -->

    <!-- row -->
    <div class="row row-sm ">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card mg-b-20">
                        <div class="card-body d-flex p-3">
                            <div class="main-content-label mb-0 mg-t-8">UPDATE BLOG / BERTA</div>
                            <div class="ms-auto d-flex">
                                <a class="" href="edit-post.html">
                                    <button class="btn btn-primary" style="border-radius: 20px;"> <i class="fa fa-user-plus me-1"></i> Create data</button>
                                    <button class="btn btn-warning" style="border-radius: 20px;"> <i class="fa fa-wrench me-1"></i> Edit Data</button>
                                    <button class="btn btn-danger" style="border-radius: 20px;"> <i class="fa fa-trash me-1"></i> Delete data</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3"
                            class="border-top-0  table table-bordered text-nowrap border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">Title</th>
                                    <th class="border-bottom-0">Author</th>
                                    <th class="border-bottom-0">Category</th>
                                    <th class="border-bottom-0">Date</th>
                                    <th class="border-bottom-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kopi Kenangan, Dari Mantan Jadi Startup Unicorn</td>
                                    <td>Admin</td>
                                    <td>Seminar</td>
                                    <td>2011/04/25</td>
                                    <td><span class="badge bg-pill bg-success">PUBLISHED</span></td>
                                </tr>
                                <tr>
                                    <td>Di Tahun Macan, Startup Pelacak Kendaraan Siap Menerkam</td>
                                    <td>Admin</td>
                                    <td>Seminar</td>
                                    <td>2011/04/25</td>
                                    <td><span class="badge bg-pill bg-success">PUBLISHED</span></td>
                                </tr>
                                <tr>
                                    <td>Jadi Unicorn ke-7 di Indonesia, Startup Ini Hanya Butuh Waktu
                                        2,5 Tahun</td>
                                    <td>Admin</td>
                                    <td>Seminar</td>
                                    <td>2011/04/25</td>
                                    <td><span class="badge bg-pill bg-success">PUBLISHED</span></td>
                                </tr>
                                <tr>
                                    <td>J&T Express Jadi Unicorn Baru Indonesia, Valuasinya Rp 113,5
                                        Triliun</td>
                                    <td>Admin</td>
                                    <td>Seminar</td>
                                    <td>2011/04/25</td>
                                    <td><span class="badge bg-pill bg-success">PUBLISHED</span></td>
                                </tr>
                                <tr>
                                    <td>Disuntik Dana Segar Rp 2,1 T, Xendit Jadi Startup Unicorn
                                        Terbaru RI
                                    </td>
                                    <td>Admin</td>
                                    <td>Seminar</td>
                                    <td>2011/04/25</td>
                                    <td><span class="badge bg-pill bg-success">PUBLISHED</span></td>
                                </tr>
                                <tr>
                                    <td>Heboh Iran kalah melawan Inggris, Ini tanggapan Lesti dan billar
                                    </td>
                                    <td>Admin</td>
                                    <td>Seminar</td>
                                    <td>2011/04/25</td>
                                    <td><span class="badge bg-pill bg-success">PUBLISHED</span></td>
                                </tr>
                                <tr>
                                    <td>Animasi Upin dan ipin akang resmi di berhentikan.. tapi boong
                                    </td>
                                    <td>Admin</td>
                                    <td>Seminar</td>
                                    <td>2011/04/25</td>
                                    <td><span class="badge bg-pill bg-success">PUBLISHED</span></td>
                                </tr>
                                <tr>
                                    <td>SiCepat Suntik Modal Perusahaan Podcast Milik Deddy Corbuzier
                                    </td>
                                    <td>Admin</td>
                                    <td>Seminar</td>
                                    <td>2011/04/25</td>
                                    <td><span class="badge bg-pill bg-success">PUBLISHED</span></td>
                                </tr>
                                <tr>
                                    <td>Startup Perikanan eFishery Memiliki Target Pasar Thailand, lalu
                                        Cina dan India
                                    </td>
                                    <td>Admin</td>
                                    <td>Seminar</td>
                                    <td>2011/04/25</td>
                                    <td><span class="badge bg-pill bg-success">PUBLISHED</span></td>
                                </tr>
                                <tr>
                                    <td>Resmi di kabarkan bahwa Karim Benzema tidak dapat ikut pildun
                                    </td>
                                    <td>Admin</td>
                                    <td>Seminar</td>
                                    <td>2011/04/25</td>
                                    <td><span class="badge bg-pill bg-success">PUBLISHED</span></td>
                                </tr>
                                <tr>
                                    <td>Abiyasa telah membuka open user untuk GHI</td>
                                    <td>Admin</td>
                                    <td>Seminar</td>
                                    <td>2011/04/25</td>
                                    <td><span class="badge bg-pill bg-success">PUBLISHED</span></td>
                                </tr>
                                <tr>
                                    <td>APLIKASI AI UNTUK UMKM</td>
                                    <td>Admin</td>
                                    <td>Seminar</td>
                                    <td>2011/04/25</td>
                                    <td><span class="badge bg-pill bg-success">PUBLISHED</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->

    <!-- row -->
    <div class="row row-sm ">
        <div class="col-lg-12 col-xl-4 col-sm-12">
            <div class="card">
                <div class="card-header pb-0 pt-4">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-10">Top Ongoing Projects</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 text-muted mb-0">Project Description is a formally written
                        declaration of the project and its idea and context . <a href="">Learn more</a>
                    </p>
                </div>
                <div class="card-body p-0 m-scroll mh-350 mt-2">
                    <div class="list-group projects-list">
                        <a href="javascript:void(0);"
                            class="list-group-item list-group-item-action flex-column align-items-start border-top-0">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1 font-weight-semibold ">PSD Projects</h6>
                                <small class="text-danger"><i class="fa fa-caret-down me-1"></i>5 days
                                    ago</small>
                            </div>
                            <p class="mb-0 text-muted mb-0 tx-12">Started:17-02-2020</p>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit...</small>
                        </a>
                        <a href="javascript:void(0);"
                            class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1 font-weight-semibold">Wordpress Projects</h6>
                                <small class="text-success"><i class="fa fa-caret-up me-1"></i>2 days
                                    ago</small>
                            </div>
                            <p class="mb-0 text-muted mb-0 tx-12">Started:15-02-2020</p>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit..</small>
                        </a>
                        <a href="javascript:void(0);"
                            class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1 font-weight-semibold">HTML &amp; CSS3 Projects</h6>
                                <small class="text-danger"><i class="fa fa-caret-down me-1"></i>1 days
                                    ago</small>
                            </div>
                            <p class="mb-0 text-muted mb-0 tx-12">Started:26-02-2020</p>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit..</small>
                        </a>
                        <a href="javascript:void(0);"
                            class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1 font-weight-semibold">HTML &amp; CSS3 Projects</h6>
                                <small class="text-danger"><i class="fa fa-caret-down me-1"></i>1 days
                                    ago</small>
                            </div>
                            <p class="mb-0 text-muted mb-0 tx-12">Started:26-02-2020</p>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit..</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card overflow-hidden ">
                <div class="card-header pb-0 pt-4">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-10 ">User Baru</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 text-muted mb-0">An activity is a scheduled phase in a project plan
                        with a distinct beginning and end. <a href="">Learn more</a></p>
                </div>
                <div class="card-body p-0">
                    <div class="activity Activity-scroll">
                        <div class="activity-list">
                            <img src="{{ asset('simbapar/assets/img/faces/6.png') }}" alt="" class="img-activity">
                            <div class="time-activity ">
                                <div class="item-activity">
                                    <p class="mb-0"><span class="h6 me-1">Alghi Arif Rahman</span><span
                                            class="text-muted tx-13">Baru saja Mengaktifkan Account |
                                            Status : </span> <span
                                            class="h6 badge bg-pill bg-success">Aktif</span></p><small
                                        class="text-muted ">30 mins ago</small>
                                </div>
                            </div>
                            <img src="{{ asset('simbapar/assets/img/faces/3.png') }}" alt="" class="img-activity">
                            <div class="time-activity">
                                <div class="item-activity">
                                    <p class="mb-0"><span class="h6 me-1">Diaz Alatta</span> <span
                                            class="text-muted tx-13"> Baru Saja Mendaftarkan Akun |
                                            Status : </span> <span
                                            class="h6 badge bg-pill bg-danger">Not Aktif</span></p>
                                    <small class="text-muted ">1 days ago</small>
                                </div>
                            </div>
                            <img src="{{ asset('simbapar/assets/img/faces/9.png') }}" alt="" class="img-activity">
                            <div class="time-activity">
                                <div class="item-activity">
                                    <p class="mb-0"><span class="h6 me-1">Rifki Alfandi</span> <span
                                            class="text-muted tx-13"> Baru saja Melebihi Batas
                                            Aktif</span> <span
                                            class="h6 badge bg-pill bg-warning">Suspend</span></p><small
                                        class="text-muted ">3 days ago</small>
                                </div>
                            </div>
                            <img src="{{ asset('simbapar/assets/img/faces/20.png') }}" alt="" class="img-activity">
                            <div class="time-activity">
                                <div class="item-activity">
                                    <p class="mb-0"><span class="h6 me-1">MangCep DevOps</span> <span
                                            class="text-muted tx-13"> Baru Mendaftarkan Akun | Status :
                                        </span> <span class="h6 badge bg-pill bg-danger">Not
                                            Aktif</span></p><small class="text-muted ">3 days
                                        ago</small>
                                </div>
                            </div>
                            <img src="{{ asset('simbapar/assets/img/faces/20.pn') }}g" alt="" class="img-activity">
                            <div class="time-activity">
                                <div class="item-activity">
                                    <p class="mb-0"><span class="h6 me-1">Aisa Devina Muharani</span>
                                        <span class="text-muted tx-13"> Baru Mengaktifkan Akun | Status
                                            : </span> <span
                                            class="h6 badge bg-pill bg-success">Aktif</span></p><small
                                        class="text-muted ">3 days ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card">
                <div class="card-header pt-4 pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-10 ">Top Catgeory Event</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 text-muted mb-0">The Statistics You can also summarize your data in
                        a graphical display, such as histograms <a href="">Learn more</a> </p>
                </div>
                <div class="p-4">
                    <div class="">
                        <div class="row">
                            <div class="col-md-6 col-6 text-center">
                                <div class="task-box primary mb-0">
                                    <p class="mb-0 tx-12">Total Vote Rating</p>
                                    <h3 class="counter number-font mb-0">385</h3>
                                </div>
                            </div>
                            <div class="col-md-6 col-6 text-center">
                                <div class="task-box danger  mb-0">
                                    <p class="mb-0 tx-12">Jumlah Category</p>
                                    <h3 class="counter number-font mb-0">19</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="task-stat pb-0">
                    <div class="d-flex tasks">
                        <div class="mb-0">
                            <div class="h6 fs-15 mb-0"><i
                                    class="far fa-dot-circle text-primary me-2"></i>StartUp</div>
                        </div>
                        <span class="tx-12 ms-auto">
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex tasks">
                        <div class="mb-0">
                            <div class="h6 fs-15 mb-0"><i
                                    class="far fa-dot-circle text-pink me-2"></i>UpdateTech</div>
                        </div>
                        <span class="tx-12 ms-auto">
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star-half text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex tasks">
                        <div class="mb-0">
                            <div class="h6 fs-15 mb-0"><i
                                    class="far fa-dot-circle text-success me-2"></i>Coaching</div>
                        </div>
                        <span class="tx-12 ms-auto" style="margin-right: 10px;">
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex tasks mb-0 border-bottom-0">
                        <div class="mb-0">
                            <div class="h6 fs-15 mb-0"><i
                                    class="far fa-dot-circle text-purple me-2"></i>Pitching</div>
                        </div>
                        <span class="tx-12 ms-auto" style="margin-right: 10px;">
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex tasks mb-0 border-bottom-0">
                        <div class="mb-0">
                            <div class="h6 fs-15 mb-0"><i
                                    class="far fa-dot-circle text-purple me-2"></i>Coding</div>
                        </div>
                        <span class="tx-12 ms-auto" style="margin-right: 10px;">
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star-half text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex tasks mb-0 border-bottom-0">
                        <div class="mb-0">
                            <div class="h6 fs-15 mb-0"><i
                                    class="far fa-dot-circle text-purple me-2"></i>TolkShow</div>
                        </div>
                        <span class="tx-12 ms-auto" style="margin-right: 20px;">
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star text-warning"></i>
                            <i class="ion ion-md-star-half text-warning"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row -->
<hr>
<div class="row row-sm auth">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    Data Statistik Event
                </div>
                <p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
                <div id="index" class="ht-300"></div>
            </div>
        </div>
    </div>


    <div class="row row-sm">
        <div class="col-md-12 col-xl-4 col-lg-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-10">Event Now</h4>
                        <i class="mdi mdi-dots-Vertical"></i>
                    </div>
                    <p class="tx-12 tx-gray-500 mb-3">Event Terbaru saat ini .<a href="event.html">All
                            View</a></p>
                    <div>
                        <div class="chips">
                            <div class="team">
                                <a href="javascript:void(0)" class="chip">
                                    <span class="avatar cover-image"
                                        data-bs-image-src="{{ asset('simbapar/assets/img/faces/15.png') }}"></span>
                                    Kemenperin
                                </a>
                                <i class="fab fa-facebook text-primary" aria-hidden="true"></i>
                                <i class="fab fa-twitter text-primary" aria-hidden="true"></i>
                                <i class="fas fa-envelope text-primary" aria-hidden="true"></i>
                                <p>Judul Event : Prototype Days : <span
                                        class="badge bg-pill bg-success">FREE REGISTER</span></p>
                            </div>
                            <div class="team">
                                <a href="javascript:void(0)" class="chip">
                                    <span class="avatar cover-image"
                                        data-bs-image-src="{{ asset('simbapar/assets/img/faces/21.png') }}"></span> ACCI
                                </a>
                                <i class="fab fa-facebook text-primary" aria-hidden="true"></i>
                                <i class="fab fa-twitter text-primary" aria-hidden="true"></i>
                                <i class="fas fa-envelope text-primary" aria-hidden="true"></i>
                                <p>Judul Event : Bisnis Matching : <span
                                        class="badge bg-pill bg-success">FREE REGISTER</span></p>
                            </div>
                            <div class="team">
                                <a href="javascript:void(0)" class="chip">
                                    <span class="avatar cover-image"
                                        data-bs-image-src="{{ asset('simbapar/assets/img/faces/22.png') }}"></span> MOVE
                                </a>
                                <i class="fab fa-facebook text-primary" aria-hidden="true"></i>
                                <i class="fab fa-twitter text-primary" aria-hidden="true"></i>
                                <i class="fas fa-envelope text-primary" aria-hidden="true"></i>
                                <p>Judul Event : Sosialiasi : <span
                                        class="badge bg-pill bg-primary">PAID</span> / <span
                                        class="badge bg-pill bg-warning">BERBAYAR</span></p>
                            </div>
                            <div class="team">
                                <a href="javascript:void(0)" class="chip">
                                    <span class="avatar cover-image"
                                        data-bs-image-src="{{ asset('simbapar/assets/img/faces/24.png') }}"></span>AGI
                                </a>
                                <i class="fab fa-facebook text-primary" aria-hidden="true"></i>
                                <i class="fab fa-twitter text-primary" aria-hidden="true"></i>
                                <i class="fas fa-envelope text-primary" aria-hidden="true"></i>
                                <p>Judul Event : Coaching | <span class="badge bg-pill bg-success">FREE
                                        REGISTER</span></p>
                            </div>
                            <div class="team">
                                <a href="javascript:void(0)" class="chip">
                                    <span class="avatar cover-image"
                                        data-bs-image-src="{{ asset('simbapar/assets/img/faces/23.png') }}"></span>Rice
                                    Bandung
                                </a>
                                <i class="fab fa-facebook text-primary" aria-hidden="true"></i>
                                <i class="fab fa-twitter text-primary" aria-hidden="true"></i>
                                <i class="fas fa-envelope text-primary" aria-hidden="true"></i>
                                <p>Judul Event : Bimtek simbapar : <span
                                        class="badge bg-pill bg-primary">PAID</span> / <span
                                        class="badge bg-pill bg-warning">BERBAYAR</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-xl-4 col-lg-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-10">Upcoming event</h4>
                        <i class="mdi mdi-dots-Vertical"></i>
                    </div>
                    <p class="tx-12 tx-gray-500 mb-3">Event yang akan mendatang .<a
                            href="event.html">All View</a></p>
                    <div>
                        <div class="chips">
                            <div class="team">
                                <a href="javascript:void(0)" class="chip">
                                    <span class="avatar cover-image"
                                        data-bs-image-src="{{ asset('simbapar/assets/img/faces/25.png') }}"></span> AINAKI
                                </a>
                                {{-- <span id="timer-outputpattern" class="mb-0 text-primary"></span> --}}
                                <p>Judul Event : Networking System : <span
                                        class="badge bg-pill bg-danger">PANDING</span></p>
                            </div>
                            <div class="team">
                                <a href="javascript:void(0)" class="chip">
                                    <span class="avatar cover-image"
                                        data-bs-image-src="{{ asset('simbapar/assets/img/faces/26.png') }}"></span> PT. WAGO
                                    MU. KREATI ASIA
                                </a>
                                <span id="timer-outputpattern1" class="mb-0 text-primary"></span>
                                <p>Judul Event : Startegi di Era Modern : <span
                                        class="badge bg-pill bg-danger">PANDING</span></p>
                            </div>
                            <div class="team">
                                <a href="javascript:void(0)" class="chip">
                                    <span class="avatar cover-image"
                                        data-bs-image-src="{{ asset('simbapar/assets/img/faces/27.png') }}"></span> Cimahi
                                    TechnoPark
                                </a>
                                <span id="timer-outputpattern2" class="mb-0 text-primary"></span>
                                <p>Judul Event : Menguasai Laravel : <span
                                        class="badge bg-pill bg-danger">PANDING</span></p>
                            </div>
                            <div class="team">
                                <a href="javascript:void(0)" class="chip">
                                    <span class="avatar cover-image"
                                        data-bs-image-src="{{ asset('simbapar/assets/img/faces/15.png') }}"></span>Kemenperin
                                </a>
                                <span id="timer-outputpattern3" class="mb-0 text-primary"
                                    style="margin-left: 15px;"></span>
                                <p>Judul Event : Strategi bisnis mudah : <span
                                        class="badge bg-pill bg-danger">PANDING</span></p>
                            </div>
                            <div class="team">
                                <a href="javascript:void(0)" class="chip">
                                    <span class="avatar cover-image"
                                        data-bs-image-src="{{ asset('simbapar/assets/img/faces/23.png') }}"></span>Rice
                                    Bandung
                                </a>
                                <span id="timer-outputpattern4" class="mb-0 text-primary"></span>
                                <p>Judul Event : Pelatihan 3D : <span
                                        class="badge bg-pill bg-danger">PANDING</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
            <div class="card overflow-hidden">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-10 mt-2">Statistik Event</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 text-muted mb-0"> In the Project Workload report, their remaining
                        assignments, completion dates, whether their work is at-risk. <a href="">Learn
                            more</a></p>
                </div>
                <div class="card-body">
                    <div class="">
                        <div class="row justify-content-md-center">
                            <div class="col-sm-12">
                                <div class="">
                                    <canvas id="chartDonut4" class="ht-175 drop-shadow"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="row ">
                            <div class="col-sm-8 ">
                                <h5 class="mb-0 tx-15 d-flex"><span
                                        class="legend bg-primary-gradient brround"></span>Event Selesai
                                    </h6>
                                    <p class="text-muted  tx-13 mb-0">Event yang sudah di kerjakan</p>
                            </div>
                            <div class="col-sm-4 ">
                                <span id="sparkel18">1,3,7,8,4,5,4,8,6</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-3">
                        <div class="row ">
                            <div class="col-sm-8 ">
                                <h6 class="mb-0 tx-15 d-flex"><span
                                        class="legend bg-danger-gradient brround"></span>Event Now</h6>
                                <p class="text-muted tx-13 mb-0 ">Event yang sedang berlangsung</p>
                            </div>
                            <div class="col-sm-4 ">
                                <span id="sparkel16">2,5,6,4,8,6,5,9,6</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="row ">
                            <div class="col-sm-8 ">
                                <h6 class="mb-0 tx-15 d-flex"><span
                                        class="legend bg-success-gradient brround"></span>Event Up
                                    Coming</h6>
                                <p class="text-muted tx-13 mb-0">Event yang akan datang</p>
                            </div>
                            <div class="col-sm-4 ">
                                <span id="sparkel17">2,5,6,4,8,6,5,9,6</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-8 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title pt-2">Apps & Software</h4>
                        <i class="mdi mdi-dots-Vertical"></i>
                    </div>
                    <p class="tx-12 tx-gray-500 mb-0">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Ipsum iure, quis corrupti culpa tempora ratione explicabo,
                        quidem ad perspiciatis, <a href="app.html"> View All</a></p>
                </div><!-- card-header -->
                <div class="card-body p-0">
                    <div class="browser-stats">
                        <div class="d-flex align-items-center item  border-bottom">
                            <div class="d-flex">
                                <img src="{{ asset('simbapar/assets/img/faces/dota.png') }}" alt="img"
                                    class="ht-30 wd-30 me-2">
                                <div class="">
                                    <h6 class="">Dota 2 </h6>
                                    <span class="sub-text">Category : <span
                                            class="badge badge-pill bg-danger">Games</span></span>
                                </div>
                            </div>
                            <div class=" my-auto">
                                <div class="d-flex">
                                    <i class="fa fa-gamepad mt-3"
                                        style="font-size:20px; margin-left:10px;"></i>
                                </div>
                            </div>
                            <div class=" my-auto">
                                <div class="d-flex">
                                    <h6 class="sub-text mt-3 badge badge-pill"
                                        style="margin-left: 10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius: 20px;padding: 10px;">
                                        Owner : Rice Bandung <img src="{{ asset('simbapar/assets/img/faces/23.png') }}"
                                            alt="" class="ht-30 wd-30"
                                            style="border-radius: 50%;margin-left: 10px;"> </h6>
                                </div>
                            </div>
                            <div class="ms-auto my-auto">
                                <div class="d-flex">
                                    <span class="text-success"><i
                                            class="fe fe-arrow-up"></i>61.54%</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center item  border-bottom">
                            <div class="d-flex">
                                <img src="{{ asset('simbapar/assets/img/faces/kotlin.png') }}" alt="img"
                                    class="ht-30 wd-30 me-2">
                                <div class="">
                                    <h6 class="">Kotlin</h6>
                                    <span class="sub-text">Category : <span
                                            class="badge badge-pill bg-primary">Software</span></span>
                                </div>
                            </div>
                            <div class=" my-auto">
                                <div class="d-flex">
                                    <i class="fa fa-code mt-3"
                                        style="font-size:20px; margin-left:10px;"></i>
                                </div>
                            </div>
                            <div class=" my-auto">
                                <div class="d-flex">
                                    <h6 class="sub-text mt-3 badge badge-pill"
                                        style="margin-left: 10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius: 20px;padding: 10px;">
                                        Owner : MOVE <img src="{{ asset('simbapar/assets/img/faces/22.png') }}" alt=""
                                            class="ht-30 wd-30"
                                            style="border-radius: 50%;margin-left: 10px;"> </h6>
                                </div>
                            </div>
                            <div class="ms-auto my-auto">
                                <div class="d-flex">
                                    <span class="text-danger"><i
                                            class="fe fe-arrow-down"></i>1.5%</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center item  border-bottom">
                            <div class="d-flex">
                                <img src="{{ asset('simbapar/assets/img/faces/postman.png') }}" alt="img"
                                    class="ht-30 wd-30 me-2">
                                <div class="">
                                    <h6 class="">Postman</h6>
                                    <span class="sub-text">Category : <span
                                            class="badge badge-pill bg-primary">Software</span></span>
                                </div>
                            </div>
                            <div class=" my-auto">
                                <div class="d-flex">
                                    <i class="fa fa-code mt-3"
                                        style="font-size:20px; margin-left:10px;"></i>
                                </div>
                            </div>
                            <div class=" my-auto">
                                <div class="d-flex">
                                    <h6 class="sub-text mt-3 badge badge-pill"
                                        style="margin-left: 10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius: 20px;padding: 10px;">
                                        Owner : PT WAGO MU. KREATI ASIA <img
                                            src="{{ asset('simbapar/assets/img/faces/26.png') }}" alt="" class="ht-30 wd-30"
                                            style="border-radius: 50%;margin-left: 10px;"> </h6>
                                </div>
                            </div>
                            <div class="ms-auto my-auto">
                                <div class="d-flex">
                                    <span class="text-danger"><i
                                            class="fe fe-arrow-down"></i>12.54%</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center item  border-bottom">
                            <div class="d-flex">
                                <img src="{{ asset('simbapar/assets/img/faces/unity.png') }}" alt="img"
                                    class="ht-30 wd-30 me-2">
                                <div class="">
                                    <h6 class="">Unity</h6>
                                    <span class="sub-text">Category : <span
                                            class="badge badge-pill bg-info">Animasi</span></span>
                                </div>
                            </div>
                            <div class=" my-auto">
                                <div class="d-flex">
                                    <i class="fa fa-object-ungroup mt-3"
                                        style="font-size:20px; margin-left:10px;"></i>
                                </div>
                            </div>
                            <div class=" my-auto">
                                <div class="d-flex">
                                    <h6 class="sub-text mt-3 badge badge-pill"
                                        style="margin-left: 10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius: 20px;padding: 10px;">
                                        Owner : AGI <img src="{{ asset('simbapar/assets/img/faces/24.png') }}" alt=""
                                            class="ht-30 wd-30"
                                            style="border-radius: 50%;margin-left: 10px;"> </h6>
                                </div>
                            </div>
                            <div class="ms-auto my-auto">
                                <div class="d-flex">
                                    <span class="text-danger"><i
                                            class="fe fe-arrow-down"></i>5,1%</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center item border-bottom">
                            <div class="d-flex">
                                <img src="{{ asset('simbapar/assets/img/faces/wa.png') }}" alt="img"
                                    class="ht-30 wd-30 me-2">
                                <div class="">
                                    <h6 class="">Whatsapp</h6>
                                    <span class="sub-text">Category : <span class="badge badge-pill"
                                            style="background-color:#ff8000 ;">Mobile Apps &
                                            Software</span></span>
                                </div>
                            </div>
                            <div class=" my-auto">
                                <div class="d-flex">
                                    <i class="fab fa-android mt-3"
                                        style="font-size:20px; margin-left:10px;"></i>
                                </div>
                            </div>
                            <div class=" my-auto">
                                <div class="d-flex">
                                    <h6 class="sub-text mt-3 badge badge-pill"
                                        style="margin-left: 10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius: 20px;padding: 10px;">
                                        Owner : Cimahi TechnoPark <img src="{{ asset('simbapar/assets/img/faces/27.png') }}"
                                            alt="" class="ht-30 wd-30"
                                            style="border-radius: 50%;margin-left: 10px;"> </h6>
                                </div>
                            </div>
                            <div class="ms-auto my-auto">
                                <div class="d-flex">
                                    <span class="text-success"><i
                                            class="fe fe-arrow-upss"></i>14,31%</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center item border-bottom">
                            <div class="d-flex">
                                <img src="{{ asset('simbapar/assets/img/faces/swift.png') }}" alt="img"
                                    class="ht-30 wd-30 me-2">
                                <div class="">
                                    <h6 class="">Swift</h6>
                                    <span class="sub-text">Category : <span class="badge badge-pill"
                                            style="background-color:#ff8000 ;">Mobile Apps &
                                            Software</span></span>
                                </div>
                            </div>
                            <div class=" my-auto">
                                <div class="d-flex">
                                    <i class="fab fa-android mt-3"
                                        style="font-size:20px; margin-left:10px;"></i>
                                </div>
                            </div>
                            <div class=" my-auto">
                                <div class="d-flex">
                                    <h6 class="sub-text mt-3 badge badge-pill"
                                        style="margin-left: 10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius: 20px;padding: 10px;">
                                        Owner : Aisa Devina Muharani <img
                                            src="{{ asset('simbapar/assets/img/faces/20.png') }}" alt="" class="ht-30 wd-30"
                                            style="border-radius: 50%;margin-left: 10px;"> </h6>
                                </div>
                            </div>
                            <div class="ms-auto my-auto">
                                <div class="d-flex">
                                    <span class="text-success"><i
                                            class="fe fe-arrow-upss"></i>4,81%</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center item">
                            <div class="d-flex">
                                <img src="{{ asset('simbapar/assets/img/faces/golang.png') }}" alt="img"
                                    class="ht-30 wd-30 me-2">
                                <div class="">
                                    <h6 class="">Golang</h6>
                                    <span class="sub-text">Category : <span
                                            class="badge badge-pill bg-primary">Software</span></span>
                                </div>
                            </div>
                            <div class=" my-auto">
                                <div class="d-flex">
                                    <i class="fa fa-code mt-3"
                                        style="font-size:20px; margin-left:10px;"></i>
                                </div>
                            </div>
                            <div class=" my-auto">
                                <div class="d-flex">
                                    <h6 class="sub-text mt-3 badge badge-pill"
                                        style="margin-left: 10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius: 20px;padding: 10px;">
                                        Owner : Alghi Arif R <img src="{{ asset('simbapar/assets/img/faces/6.png') }}" alt=""
                                            class="ht-30 wd-30"
                                            style="border-radius: 50%;margin-left: 10px;"> </h6>
                                </div>
                            </div>
                            <div class="ms-auto my-auto">
                                <div class="d-flex">
                                    <span class="text-success"><i
                                            class="fe fe-arrow-up"></i>2.99%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- card -->

        </div>
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card">
                <div class="card-header pt-4 pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-10 ">Top Category Apps & Software</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 text-muted mb-0">The Statistics You can also summarize your data in
                        a graphical display, such as histograms <a href="">Learn more</a> </p>
                </div>
                <div class="p-4">
                    <div class="">
                        <div class="row">
                            <div class="col-md-6 col-6 text-center">
                                <div class="task-box  mb-0"
                                    style="background-color: #870101;border-radius: 20px;color: white;box-shadow: rgba(255, 69, 69,0.90) 0px 3px 8px;">
                                    <p class="mb-0 tx-12">Jumlah Apps</p>
                                    <h3 class="counter number-font mb-0">385</h3>
                                </div>
                            </div>
                            <div class="col-md-6 col-6 text-center">
                                <div class="task-box  mb-0"
                                    style="background-color: #017582;border-radius: 20px;color: white;box-shadow: rgba(55, 221, 240,0.90) 0px 3px 8px;">
                                    <p class="mb-0 tx-12">Jumlah Category</p>
                                    <h3 class="counter number-font mb-0">4</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="task-stat pb-0">
                    <div class="d-flex tasks">
                        <div class="mb-0">
                            <div class="h6 fs-15 mb-0"><i class="fa fa-code me-2"></i>Software : </div>
                        </div>
                        <span class="tx-12 ms-auto">
                            <p class="counter number-font mb-0"
                                style="font-weight:bold;color: #017582;">100</p>
                        </span>
                    </div>
                    <div class="d-flex tasks">
                        <div class="mb-0">
                            <div class="h6 fs-15 mb-0"><i class="fa fa-object-ungroup me-2"></i>Animasi
                            </div>
                        </div>
                        <span class="tx-12 ms-auto">
                            <p class="counter number-font mb-0"
                                style="font-weight:bold;color: #017582;">70</p>
                        </span>
                    </div>
                    <div class="d-flex tasks">
                        <div class="mb-0">
                            <div class="h6 fs-15 mb-0"><i class="fab fa-android me-2"></i>Mobile & Apps
                            </div>
                        </div>
                        <span class="tx-12 ms-auto">
                            <p class="counter number-font mb-0"
                                style="font-weight:bold;color: #017582;">112</p>
                        </span>
                    </div>
                    <div class="d-flex tasks">
                        <div class="mb-0">
                            <div class="h6 fs-15 mb-0"><i class="fa fa-gamepad me-2"></i>Games</div>
                        </div>
                        <span class="tx-12 ms-auto">
                            <p class="counter number-font mb-0"
                                style="font-weight:bold;color: #017582;">400</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card mg-b-20 mg-md-b-0" style="margin-top: -10px;">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Statistik Apps
                    </div>
                    <div class="ht-200 ht-sm-300" id="flotPie1"></div>
                </div>
            </div>
        </div>
        <!-- ===================================== JANGAN DI HAPUS ===============================================================-->
        <!-- row -->
        <div class="row row-sm" style="visibility: hidden;">
            <div class="col-md-6">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Bar Chart
                        </div>
                        <p class="mg-b-20">Basic Charts Of Azira template.</p>
                        <div class="ht-200 ht-sm-300" id="flotBar1"></div>
                    </div>
                </div>
            </div><!-- col-6 -->
            <div class="col-md-6">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Bar Chart
                        </div>
                        <p class="mg-b-20">Basic Charts Of Azira template.</p>
                        <div class="ht-200 ht-sm-300" id="flotBar2"></div>
                    </div>
                </div>
            </div><!-- col-6 -->
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row row-sm" style="visibility: hidden;">
            <div class="col-md-6">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Line Chart
                        </div>
                        <p class="mg-b-20">Basic Charts Of Azira template.</p>
                        <div class="ht-200 ht-sm-300" id="flotLine1"></div>
                    </div>
                </div>
            </div><!-- col-6 -->
            <div class="col-md-6">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Line Chart
                        </div>
                        <p class="mg-b-20">Basic Charts Of Azira template.</p>
                        <div class="ht-200 ht-sm-300" id="flotLine2"></div>
                    </div>
                </div>
            </div><!-- col-6 -->
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row row-sm" style="visibility: hidden;">
            <div class="col-md-6">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Area Chart
                        </div>
                        <p class="mg-b-20">Basic Charts Of Azira template.</p>
                        <div class="ht-200 ht-sm-300" id="flotArea1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Area Chart
                        </div>
                        <p class="mg-b-20">Basic Charts Of Azira template.</p>
                        <div class="ht-200 ht-sm-300" id="flotArea2"></div>
                    </div>
                </div>
            </div><!-- col-6 -->
        </div>
        <!-- /row -->
        <!-- ====================================== -->
    </div>
    <!-- /row -->

    <!-- perbaikan -->
    <div class="row row-sm" style="margin-top: -1200px;">
        <div class="col-sm-12 col-md-12">
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card mg-b-20">
                        <div class="card-body d-flex p-3">
                            <div class="main-content-label mb-0 mg-t-8">masih progreses development
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12" style="display: flex;">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="">Total Revenue</div>
                            <div class="h3 mt-2 mb-2"><b>$2.98M</b><span
                                    class="text-success tx-13 ms-2">(+35%)</span></div>
                        </div>
                        <div class="col-auto align-self-center ">
                            <div class="feature mt-0 mb-0">
                                <i
                                    class="ti-bar-chart-alt project bg-success-transparent text-success "></i>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="mb-1">Overview of Last month</p>
                        <div class="progress progress-sm h-1 mb-1">
                            <div class="progress-bar bg-success wd-25 " role="progressbar"></div>
                        </div>
                        <small class="mb-0 text-muted">Monthly<span
                                class="float-end text-muted">25%</span></small>
                    </div>

                </div>
            </div>
            <div class="card" style="margin-left: 12px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="">Churned Users</div>
                            <div class="h3 mt-2 mb-2"><b>286</b><span
                                    class="text-success tx-13 ms-2">(+08%)</span></div>
                        </div>
                        <div class="col-auto align-self-center ">
                            <div class="feature mt-0 mb-0">
                                <i class="ti-pulse project bg-warning-transparent text-warning "></i>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="mb-1">Overview of Last month</p>
                        <div class="progress progress-sm h-1 mb-1">
                            <div class="progress-bar bg-danger wd-30 " role="progressbar"></div>
                        </div>
                        <small class="mb-0 text-muted">Monthly<span
                                class="float-end text-muted">30%</span></small>
                    </div>
                </div>
            </div>
            <div class="card" style="margin-left: 12px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="">New Users</div>
                            <div class="h3 mt-2 mb-2"><b>692</b><span
                                    class="text-success tx-13 ms-2">(+15%)</span></div>
                        </div>
                        <div class="col-auto align-self-center ">
                            <div class="feature mt-0 mb-0">
                                <i class="fe fe-users project bg-pink-transparent text-pink "></i>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="mb-1">Overview of Last month</p>
                        <div class="progress progress-sm h-1 mb-1">
                            <div class="progress-bar bg-secondary wd-50 " role="progressbar"></div>
                        </div>
                        <small class="mb-0 text-muted">Monthly<span
                                class="float-end text-muted">50%</span></small>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-left: 12px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="">New Users</div>
                            <div class="h3 mt-2 mb-2"><b>692</b><span
                                    class="text-success tx-13 ms-2">(+15%)</span></div>
                        </div>
                        <div class="col-auto align-self-center ">
                            <div class="feature mt-0 mb-0">
                                <i class="fe fe-users project bg-pink-transparent text-pink "></i>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="mb-1">Overview of Last month</p>
                        <div class="progress progress-sm h-1 mb-1">
                            <div class="progress-bar bg-secondary wd-50 " role="progressbar"></div>
                        </div>
                        <small class="mb-0 text-muted">Monthly<span
                                class="float-end text-muted">50%</span></small>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-left: 12px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="">New Users</div>
                            <div class="h3 mt-2 mb-2"><b>692</b><span
                                    class="text-success tx-13 ms-2">(+15%)</span></div>
                        </div>
                        <div class="col-auto align-self-center ">
                            <div class="feature mt-0 mb-0">
                                <i class="fe fe-users project bg-pink-transparent text-pink "></i>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="mb-1">Overview of Last month</p>
                        <div class="progress progress-sm h-1 mb-1">
                            <div class="progress-bar bg-secondary wd-50 " role="progressbar"></div>
                        </div>
                        <small class="mb-0 text-muted">Monthly<span
                                class="float-end text-muted">50%</span></small>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-left: 10px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="">New Users</div>
                            <div class="h3 mt-2 mb-2"><b>692</b><span
                                    class="text-success tx-13 ms-2">(+15%)</span></div>
                        </div>
                        <div class="col-auto align-self-center ">
                            <div class="feature mt-0 mb-0">
                                <i class="fe fe-users project bg-pink-transparent text-pink "></i>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="mb-1">Overview of Last month</p>
                        <div class="progress progress-sm h-1 mb-1">
                            <div class="progress-bar bg-secondary wd-50 " role="progressbar"></div>
                        </div>
                        <small class="mb-0 text-muted">Monthly<span
                                class="float-end text-muted">50%</span></small>
                    </div>
                </div>
            </div>



        </div>
        <!-- Trafik Member 1 -->
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
            <div class="card overflow-hidden">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-10 mt-2">Valuasi Technopark</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 text-muted mb-0">Key Performa Index Technopark
                </div>
                <div class="card-body">
                    <div class="">
                        <div class="row justify-content-md-center">
                            <div class="col-sm-12">
                                <div class="">
                                    <canvas id="chartDonut" class="ht-175 drop-shadow"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="row ">
                            <div class="col-sm-8 ">
                                <h5 class="mb-0 tx-15 d-flex"><span
                                        class="legend bg-primary-gradient brround"></span>Kerjasama</h6>
                                    <p class="text-muted  tx-13 mb-0">Performa Kerjasama antar
                                        Technopark</p>
                            </div>
                            <div class="col-sm-4 ">
                                <span id="sparkel1">1,3,7,8,4,5,4,8,6</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-3">
                        <div class="row ">
                            <div class="col-sm-8 ">
                                <h6 class="mb-0 tx-15 d-flex"><span
                                        class="legend bg-danger-gradient brround"></span>Kolaborasi</h6>
                                <p class="text-muted tx-13 mb-0 ">Performa Kolaborasi antar Technopark
                                </p>
                            </div>
                            <div class="col-sm-4 ">
                                <span id="sparkel2">2,5,6,4,8,6,5,9,6</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="row ">
                            <div class="col-sm-8 ">
                                <h6 class="mb-0 tx-15 d-flex"><span
                                        class="legend bg-success-gradient brround"></span>Value
                                    Pekerjaan</h6>
                                <p class="text-muted tx-13 mb-0">Pekerjaan yang dikerjakan</p>
                            </div>
                            <div class="col-sm-4 ">
                                <span id="sparkel3">2,5,6,4,8,6,5,9,6</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="row ">
                            <div class="col-sm-8 ">
                                <h6 class="mb-0 tx-15 d-flex"><span
                                        class="legend bg-danger-gradient brround"></span>Jumlah SDM</h6>
                                <p class="text-muted tx-13 mb-0">Pertumbuhan resources</p>
                            </div>
                            <div class="col-sm-4 ">
                                <span id="sparkel4">2,5,6,4,8,6,5,9,6</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="row ">
                            <div class="col-sm-8 ">
                                <h6 class="mb-0 tx-15 d-flex"><span
                                        class="legend bg-danger-gradient brround"></span>HKI</h6>
                                <p class="text-muted tx-13 mb-0">Implementasi ke Industri</p>
                            </div>
                            <div class="col-sm-4 ">
                                <span id="sparkel5">2,5,6,4,8,6,5,9,6</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trafik Member 2 -->
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
            <div class="card overflow-hidden">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-10 mt-2">Valuasi Startup Company</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 text-muted mb-0">Ker Performace Index Startup
                </div>
                <div class="card-body">
                    <div class="">
                        <div class="row justify-content-md-center">
                            <div class="col-sm-12">
                                <div class="">
                                    <canvas id="chartDonut1" class="ht-175 drop-shadow"
                                        style="margin-left: -25px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="row ">
                            <div class="col-sm-8 ">
                                <h5 class="mb-0 tx-15 d-flex"><span
                                        class="legend bg-primary-gradient brround"></span>Kerjasama</h6>
                                    <p class="text-muted  tx-13 mb-0">Performa Kerjasama antar Member
                                    </p>
                            </div>
                            <div class="col-sm-4 ">
                                <span id="sparkel6">1,3,7,8,4,5,4,8,6</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-3">
                        <div class="row ">
                            <div class="col-sm-8 ">
                                <h6 class="mb-0 tx-15 d-flex"><span
                                        class="legend bg-danger-gradient brround"></span>Kolaborasi</h6>
                                <p class="text-muted tx-13 mb-0 ">Performa Kolaborasi antar Member

                                </p>
                            </div>
                            <div class="col-sm-4 ">
                                <span id="sparkel7">2,5,6,4,8,6,5,9,6</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="row ">
                            <div class="col-sm-8 ">
                                <h6 class="mb-0 tx-15 d-flex"><span
                                        class="legend bg-success-gradient brround"></span>Value
                                    Pekerjaan</h6>
                                <p class="text-muted tx-13 mb-0">Pekerjaan yang dikerjakan

                                </p>
                            </div>
                            <div class="col-sm-4 ">
                                <span id="sparkel8">2,5,6,4,8,6,5,9,6</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="row ">
                            <div class="col-sm-8 ">
                                <h6 class="mb-0 tx-15 d-flex"><span
                                        class="legend bg-danger-gradient brround"></span>Jumlah SDM</h6>
                                <p class="text-muted tx-13 mb-0">Pertumbuhan Resource</p>
                            </div>
                            <div class="col-sm-4 ">
                                <span id="sparkel9">2,5,6,4,8,6,5,9,6</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="row ">
                            <div class="col-sm-8 ">
                                <h6 class="mb-0 tx-15 d-flex"><span
                                        class="legend bg-danger-gradient brround"></span>Hak Kekayaan
                                    Intelektual</h6>
                                <p class="text-muted tx-13 mb-0">Implementasi ke Industri</p>
                            </div>
                            <div class="col-sm-4 ">
                                <span id="sparkel10">2,5,6,4,8,6,5,9,6</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trafik Member 3 -->
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
            <div class="card overflow-hidden">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-10 mt-2">value Asosiasi / Komunitas</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 text-muted mb-0">Key Performace Index Asosiasi
                        <div class="card-body">
                            <div class="">
                                <div class="row justify-content-md-center">
                                    <div class="col-sm-12">
                                        <div class="">
                                            <canvas id="chartDonut2" class="ht-175 drop-shadow"
                                                style="margin-left: -45px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="row ">
                                    <div class="col-sm-8 ">
                                        <h5 class="mb-0 tx-15 d-flex"><span
                                                class="legend bg-primary-gradient brround"></span>Kerjasama
                                            </h6>
                                            <p class="text-muted  tx-13 mb-0">Performa Kerjasama antar
                                                Mmeber</p>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <span id="sparkel11">1,3,7,8,4,5,4,8,6</span>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-3">
                                <div class="row ">
                                    <div class="col-sm-8 ">
                                        <h6 class="mb-0 tx-15 d-flex"><span
                                                class="legend bg-danger-gradient brround"></span>Kolaborasi
                                        </h6>
                                        <p class="text-muted tx-13 mb-0 ">Performa Kolaborasi antar
                                            Mmeber</p>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <span id="sparkel12">2,5,6,4,8,6,5,9,6</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="row ">
                                    <div class="col-sm-8 ">
                                        <h6 class="mb-0 tx-15 d-flex"><span
                                                class="legend bg-success-gradient brround"></span>Value
                                            Pekerjaan</h6>
                                        <p class="text-muted tx-13 mb-0">Pekerjaan yang dikerjakan
                                        </p>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <span id="sparkel13">2,5,6,4,8,6,5,9,6</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="row ">
                                    <div class="col-sm-8 ">
                                        <h6 class="mb-0 tx-15 d-flex"><span
                                                class="legend bg-danger-gradient brround"></span>Jumlah
                                            SDM</h6>
                                        <p class="text-muted tx-13 mb-0">Pertumbuhan Resource
                                        </p>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <span id="sparkel14">2,5,6,4,8,6,5,9,6</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="row ">
                                    <div class="col-sm-8 ">
                                        <h6 class="mb-0 tx-15 d-flex"><span
                                                class="legend bg-danger-gradient brround"></span>HKI
                                        </h6>
                                        <p class="text-muted tx-13 mb-0">Implementasi ke Industri

                                        </p>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <span id="sparkel15">2,5,6,4,8,6,5,9,6</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

        </div>


        <!-- ========================================================== JANGAN DI HAPUS ================================================================= -->
        <div class="row row-sm" style="display: none;">
            <div class="col-lg-8 col-md-12">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Data Attributes
                        </div>
                        <p class="mg-b-20">It is Very Easy to Customize and it uses in website
                            apllication.</p>
                        <div id="echart1" class="ht-300"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-sm" style="display:none">
            <div class="col-lg-6 col-md-12">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Bar Chart
                        </div>
                        <p class="mg-b-20">It is Very Easy to Customize and it uses in website
                            apllication.</p>
                        <div id="echart1" class="ht-300"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Vertical Bar Chart
                        </div>
                        <p class="mg-b-20">It is Very Easy to Customize and it uses in website
                            apllication.</p>
                        <div id="echart3" class="ht-300"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row row-sm" style="display: none;">
            <div class="col-lg-6 col-md-12">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Line Chart
                        </div>
                        <p class="mg-b-20">It is Very Easy to Customize and it uses in website
                            apllication.</p>
                        <div id="echart2" class="ht-300"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Vertical Line Chart
                        </div>
                        <p class="mg-b-20">It is Very Easy to Customize and it uses in website
                            apllication.</p>
                        <div id="echart4" class="ht-300"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->

        <!-- row -->
        <div class="row row-sm" style="display: none;">
            <div class="col-lg-6 col-md-12">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Data Attributes
                        </div>
                        <p class="mg-b-20">It is Very Easy to Customize and it uses in website
                            apllication.</p>
                        <div id="echart5" class="ht-300"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Data Attributes
                        </div>
                        <p class="mg-b-20">It is Very Easy to Customize and it uses in website
                            apllication.</p>
                        <div id="echart6" class="ht-300"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->

        <!-- row -->
        <div class="row row-sm" style="display: none;">
            <div class="col-lg-6 col-md-12">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Data Attributes1
                        </div>
                        <p class="mg-b-20">It is Very Easy to Customize and it uses in website
                            apllication.</p>
                        <div id="echart7" class="ht-300"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Data Attributes
                        </div>
                        <p class="mg-b-20">It is Very Easy to Customize and it uses in website
                            apllication.</p>
                        <div id="echart8" class="ht-300"></div>
                    </div>
                </div>
            </div>

        </div>

        <!-- ========================================================== DI ATAS JANGAN DI HAPUS =============================================================== -->
    </div>
    <!-- /row -->
    <!-- /container -->
</div>

@endsection



@section('script')
    <!--- Internal Chart.bundle js --->
    <script src="{{ asset('simbapar/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

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

    <script src="{{ asset('simbapar/assets/js/table-data.js')}}"></script>

    <!--- Echart Plugin --->
    <script src="{{ asset('simbapar/assets/plugins/echart/echart.js') }}"></script>
    <script src="{{ asset('simbapar/assets/js/echarts.js') }}"></script>

    <!--- Select2 js --->
    <script src="{{ asset('simbapar/assets/plugins/select2/js/select2.min.js') }}" defer></script>

    <!--- Index js --->
    <script src="{{ asset('simbapar/assets/js/index.js') }}"></script>
@endsection