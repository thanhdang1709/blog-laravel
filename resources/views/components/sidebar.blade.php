<div class="left-side-menu" style="width: 150px;top: 40px;">
    <div class="slimscroll-menu">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">DASHBOARD</li>
                <li>
                    <a href="{{route('category.index')}}">
                        <i class="fas fa-newspaper"></i>
                        <span class="badge badge-success badge-pill float-right">0</span>
                        <span> Danh mục </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('post.index')}}">
                        <i class="fas fa-newspaper"></i>
                        <span class="badge badge-success badge-pill float-right">0</span>
                        <span> Posts </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->
        {{-- <div class="clearfix">
            <p style="margin-top: 0;margin-bottom: 0px;font-style: italic;color: #98a6ad;">Hết hạn:</p>
            {{dd($expire)}}
            <span class="text-mute">{{$exprire}}</span>
        </div> --}}
    </div>
    <!-- Sidebar -left -->
</div>