
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>ADMIN DASHBOARD</title>
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="CRM" name="description">
        <meta content="" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        @yield('meta')
        @yield('before-styles')
        <!-- App css -->
        <link href="{{asset('assets\css\bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets\css\icons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets\css\app.min.css')}}" rel="stylesheet" type="text/css">
        @yield('after-style')
    </head>

    <body>
        <style type="text/css">
            #sidebar-menu>ul>li>a {
                padding: 2px 2px;
            }
            #sidebar-menu>ul>li>a.active {
                color: orange;
                background-color: #f7f8f9;
            }

            .nav-second-level li.active>a, .nav-third-level li.active>a {
                color: orange;
            }

            #sidebar-menu>ul>li>a {
                padding: 5px 7px;

            }
            #sidebar-menu>ul>li>a i {

                margin: -1px 1px 0 3px;
               
            }
        </style>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
           {{--  @include('admin/includes/navbar_custom') --}}
           <x-topbar></x-topbar>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            {{-- @include('admin/includes/left_sidebar') --}}
            <x-sidebar></x-sidebar>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page" style="margin-left: 150px;margin-top: 40px;">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid" style="padding-left: 0px;padding-right: 0px">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <!-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tổng Kho Buôn Sỉ</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active"></li>
                                        </ol> -->
                                    </div>
                                    <h4 class="page-title">@yield('page-title')</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        @yield('content')
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer" style="bottom: 0;position: absolute;right: 0;color: #fff;left: 150px;background-color: #1a61ae;border-top: 1px solid #1a61ae;padding: 2px 2px 2px;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2018 - 2020 &copy; ADMIN<a href=""></a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About us</a>
                                    <a href="javascript:void(0);">Feedback</a>
                                    <a href="javascript:void(0);">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <!-- /Right-bar -->
        <script type="text/javascript">
            var _token = "{{ csrf_token() }}";
        </script>
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        @yield('before-scripts')
        <!-- Vendor js -->
        <script src="{{asset('assets\js\vendor.min.js')}}"></script>
        @yield('after-scripts')
        <!-- App js -->
        <script src="{{asset('assets\js\app.min.js')}}"></script>
        
    </body>
</html>