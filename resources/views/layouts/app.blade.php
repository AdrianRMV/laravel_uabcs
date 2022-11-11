<!doctype html>
<html lang="en">


<head>
@include('layouts.head');
</head>

<body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


       @include('layouts.nav');

        {{-- Left side bar --}}
        @include('layouts.sidebar')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    @include('layouts.bread');
                    <!-- end page title -->

                    @yield('contenido');

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.footer');
        </div>
        <!-- end main content-->

    </div>

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    @include('layouts.script');

</body>

</html>
