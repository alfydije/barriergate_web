<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}" />

    <!-- TITLE -->
    <title>@yield('title')</title>

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" />

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style_backup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dark-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/transparent-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/skin-modes.css') }}" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/colors/color1.css') }}" />
    @yield('css')
</head>

<body class="app sidebar-mini ltr">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            @include('layout.navbar')
            <!-- /app-Header -->

            <!-- APP-SIDEBAR -->
            @include('layout.sidebar')
            <!-- /APP-SIDEBAR -->

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER Breadcrumbs -->
                        <div class="page-header">
                            <h1 class="page-title">Empties</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Empty</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER Breadcumbs END -->

                        <!-- Contents-->
                        @yield('content')
                        <!-- /Contents-->
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!--app-content closed-->
        </div>

        <!-- Sidebar-right -->
        @include('layout.right-sidebar')
        <!--/Sidebar-right-->

        <!-- Country-selector modal-->
        @include('layout.lang-selector')
        <!-- Country-selector modal-->

        <!-- FOOTER -->
        @include('layout.footer')
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{ asset('assets/plugins/p-scroll/pscroll-1.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('assets/js/themeColors.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        // Uncomment below line if you use ajax serverside
        // var token = `{{Session::get('token')}}`

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Select2 Formatter
        function formatState(state) {
            console.log(searchData);
            if (!state.id) {
                return state.text;
            }

            var regExp = new RegExp(searchData, 'gi');
            var $state = $(
                '<span>' + state.text.replace(regExp, `<span style="background:#a6e898;border-radius: 3px;">${searchData}</span>`) + '</span>'
            );
            return $state;
        };

    </script>

    @yield('script')

</body>

</html>
