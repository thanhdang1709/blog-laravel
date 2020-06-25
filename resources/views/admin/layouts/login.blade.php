
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>FHR PORTAL - LOGIN</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://portal.fhr.vn/assets/images/logo-fhr.png">
        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Sweet Alert-->
        <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern" style="background-image: url('https://www.peopletrail.com/wp-content/uploads/2019/06/X.png')">

        @yield('content')


        <footer class="footer footer-alt">
            2015 - 2020 &copy; FHR <a href="" class="text-white-50">JSC</a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>

        <!-- Sweet Alerts js -->
        <script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- Sweet alert init js-->
        <script src="{{asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
       {{--  <script type="text/javascript">
            $(document).ready(function() {
                $("#submit").on('click', function(e){
                    e.preventDefault();
                    var form = $(this);
                
                    
                        
                     
                        var email = $('#email').val();
                        var password = $('#password').val();
                        //var role = $("input[name='radio']:checked").val();

                        var dataSubmit = { email:email, password:password};
                        //console.log(dataSubmit);
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                              url: '{{url('ajax/login')}}',
                              method: 'POST',
                              dataType:'json',
                              contentType: "application/json; charset=utf-8",
                              data: JSON.stringify(dataSubmit),
                              beforeSend: function() {

                                  $('#loading').addClass('fa-spin fa-spinner');
                                     $('#btn-pink').attr("disabled", true);
                              },    
                              success: function(res){

                                  var data = res;
                                  if(data.alert == 'success'){
                                    /*setTimeout(function(){*/
                                            $('#loading').removeClass('fa-spin fa-spinner');
                                           swal({
                                                    type: 'success',
                                                    title: 'Thông báo...',
                                                    text: 'Đăng nhập thành công!!',
                                                }).then(function(){

                                            window.location.href=data.url;

                                            });
                                            
                                             $('#btn-pink').attr("disabled", true);
                                    /*},1000);*/
                                  }else{
                                        /*setTimeout(function(){*/

                                            $('#loading').removeClass('fa-spin fa-spinner');
                                            $('#btn-pink').attr("disabled", false);
                                            swal({
                                                    type: 'error',
                                                    title: 'Thông báo...',
                                                    text: data.message,
                                                }).then(function(){

                                            var email = $('#email').val('');
                                            var password = $('#password').val('');

                                            });

                                   /* },1000);*/
                                      
                                  }
                              }
                          });
                    
                });
            });
           sessionStorage.clear();
        </script> --}}
    </body>
</html>