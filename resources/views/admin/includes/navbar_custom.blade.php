<div class="navbar-custom" style="background-color: #6c757d;    height: 50px;">
                <ul class="list-unstyled topnav-menu float-right mb-0" style="margin-top: -10px;">

                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
        
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Delete All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                              

                                

                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('assets\images\users\user-1.jpeg')}}" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Setting</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a class="dropdown-item notify-item" href="{{-- {{ route('logout') }} --}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{-- {{ route('logout') }} --}}" method="POST" style="display: none;">
                                        {{csrf_field()}}
                                    </form>
                        </div>
                    </li>

                    <!-- <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li> -->


                </ul>

                <!-- LOGO -->
                <div class="logo-box" style="margin-top: -12px;height: 50px;width: 150px">
                    <a href="#" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{asset('assets\images\logo-fhr.png')}}" alt="" height="50">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src="{{asset('assets\images\logo-fhr.png')}}" alt="" height="50">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0" >
                    <li style="margin-top: -12px;height: 50px;">
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
        
                    

                    {{-- <li class="dropdown dropdown-mega d-none d-lg-block">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            Kho Hàng
                            <i class="mdi mdi-chevron-down"></i> 
                        </a>
                        <div class="dropdown-menu dropdown-megamenu">
                            <div class="row">
                                <div class="col-sm-8">
                        
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">Phiếu xuất nhập kho</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Phiếu XNK</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Sản phẩm XNK</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">Phiếu yêu cầu XNK</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Phiếu yêu cầu XNK</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Sản phẩm yêu cầu XNK</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">Báo cáo</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Doanh thu</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Bán hàng</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Bán buôn</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Sản phẩm</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Khuyến mãi</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center mt-3">
                                        <h3 class="text-dark">TỔNG KHO BUÔN SỈ</h3>
                                        <h4>Liên hệ lỗi lầm/góp ý.</h4>
                                        <button class="btn btn-primary btn-rounded mt-3">LIÊN HỆ</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li> --}}
                    <!-- <li class="dropdown dropdown-mega d-none d-lg-block">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            Case App
                            <i class="mdi mdi-chevron-down"></i> 
                        </a>
                        <div class="dropdown-menu dropdown-megamenu">
                            <div class="row">
                                <div class="col-sm-8">
                        
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">Phiếu xuất nhập kho</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Phiếu XNK</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Sản phẩm XNK</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">Phiếu yêu cầu XNK</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Phiếu yêu cầu XNK</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Sản phẩm yêu cầu XNK</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="text-dark mt-0">Báo cáo</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Doanh thu</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Bán hàng</a>
                                                </li>
                                                <li>
                                                    <a href="">Giỏ hàng</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center mt-3">
                                        <h3 class="text-dark">FHR.VN</h3>
                                        <h4>Liên hệ lỗi lầm/góp ý.</h4>
                                        <button class="btn btn-primary btn-rounded mt-3">LIÊN HỆ</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li> -->
                </ul>
            </div>