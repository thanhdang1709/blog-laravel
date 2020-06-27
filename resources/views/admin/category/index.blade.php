@extends('admin.layouts.app1')
@section('before-styles')
<!-- Plugins css-->
<link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<!-- third party css -->
<link href="{{asset('assets\libs\datatables\dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets\libs\switchery\switchery.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/libs/jquery-toast/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
<!-- third party css end -->
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div class="btn-header mb-1">
                <button onclick="window.location.href='{{route('category.create')}}'" class="btn btn-success"><span class="fas fa-plus"></span> Add category</button>
                {{-- <button class="btn btn-primary"><span class="fas fa-plus"></span> Add post</button> --}}
            </div>
<table     data-toggle="table"
           data-show-columns="false"
           {{-- data-page-list="[5, 10, 20]"
           data-page-size="5" --}}
           data-buttons-class="xs btn-light"
           data-pagination="false" class="table-borderless">
        <thead class="thead-light">
        <tr>
            <th width="auto"></th>
            <th data-field="title" data-switchable="false">Title</th>
            <th data-field="image">Image</th>
            <th data-field="status">status</th>
            <th data-field="comment">Comment</th>
            <th data-field="featured">Featured</th>
            <th data-field="created_at">created_at</th>
            <th data-field="updated_at">updated_at</th>
        </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td><a href="{{route('category.edit',$category->id)}}"><span class="fas fa-edit"></span></a>  <a href="{{route('admin.category.delete',$category->id)}}"><span class="fas fa-trash text-danger"></span></a></td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>
                </tr>
            @endforeach
            

        </tbody>
    </table>
    <div class="row text-center">
                 {{ $categories->links('admin.vendor.pagination.bootstrap-4')}}
    </div>
        </div>
    </div>
</div>

<style type="text/css">
    .table{
        margin-bottom: 0rem;
    }
    .table td, .table th {
        padding: .15rem;
    }
    .fixed-table-container thead th .th-inner {
        padding: .15rem;
    }   
</style>
@endsection

@section('after-scripts')
        <!-- third party js -->
        <script src="{{asset('assets\libs\bootstrap-table/bootstrap-table.min.js')}}"></script>
        <script src="{{asset('assets\libs\switchery\switchery.min.js')}}"></script>
        <script src="{{asset('assets/libs/jquery-toast/jquery.toast.min.js')}}"></script>
        <!-- third party js ends -->
        <!-- Datatables init -->
        <script src="{{asset('assets\libs\sweetalert2\sweetalert2.min.js')}}"></script>
        <script type="text/javascript">
        </script>
        <script type="text/javascript">
        $(window).on("load", function () {
            $('[data-toggle="table"]').show();
            $('.fixed-table-loading').css('display','none');
        }),
        (window.icons = { refresh: "mdi mdi-refresh", toggle: "fa-refresh", toggleOn: "fa-toggle-on", toggleOff: "fa-toggle-on", columns: "fas fa-th-list", paginationSwitchDown: "glyphicon-collapse-down icon-chevron-down" });

        </script>
@endsection