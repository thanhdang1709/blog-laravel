@extends('admin.layouts.app1')
@section('before-styles')

<!-- Plugins css-->
        <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css -->
        <link href="{{asset('assets\libs\datatables\dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets\libs\datatables\responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets\libs\datatables\buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets\libs\datatables\select.bootstrap4.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets\libs\switchery\switchery.min.css')}}" rel="stylesheet" type="text/css">
         <link href="{{asset('assets/libs/jquery-toast/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
        <!-- third party css end -->


@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">

        </div>
    </div>
</div>
@endsection

@section('after-scripts')
        <!-- third party js -->
        <script src="{{asset('assets\libs\datatables\jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets\libs\datatables\dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('assets\libs\datatables\dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets\libs\datatables\responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets\libs\switchery\switchery.min.js')}}"></script>
        <script src="{{asset('assets\libs\datatables\dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets\libs\datatables\dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('assets\libs\datatables\dataTables.select.min.js')}}"></script>
        <script src="{{asset('assets/libs/jquery-toast/jquery.toast.min.js')}}"></script>
        <!-- third party js ends -->
        <!-- Datatables init -->
        <script src="{{asset('assets\js\pages\datatables.init.js')}}"></script>
        <script src="{{asset('assets\libs\sweetalert2\sweetalert2.min.js')}}"></script>
        <script type="text/javascript">
        </script>
        
@endsection