<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ $title ?? '' }}{{ isset($title) ? ' | ' : '' }}ISRLM</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('plus') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('plus') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('plus') }}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('plus') }}/assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="{{ asset('plus') }}/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('plus') }}/assets/css/demo_2/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('plus') }}/assets/images/kominfo.png" />
</head>

<body>
    <div class="container-scroller">
        @include('components.navbar')
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('components.footer')
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('plus') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('plus') }}/assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="{{ asset('plus') }}/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('plus') }}/assets/vendors/flot/jquery.flot.js"></script>
    <script src="{{ asset('plus') }}/assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('plus') }}/assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="{{ asset('plus') }}/assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="{{ asset('plus') }}/assets/vendors/flot/jquery.flot.stack.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('plus') }}/assets/js/off-canvas.js"></script>
    <script src="{{ asset('plus') }}/assets/js/hoverable-collapse.js"></script>
    <script src="{{ asset('plus') }}/assets/js/misc.js"></script>
    <script src="{{ asset('plus') }}/assets/js/settings.js"></script>
    <script src="{{ asset('plus') }}/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('plus') }}/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>
