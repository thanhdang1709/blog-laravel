<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets\front\css\open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\front\css\animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets\front\css\owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\front\css\owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\front\css\magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets\front\css\aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets\front\css\ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\front\css\bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets\front\css\jquery.timepicker.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets\front\css\flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets\front\css\icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets\front\css\style.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\prism.css')}}">
  </head>
  <body>
    <div id="cafeweb-page">
      <a href="#" class="js-cafeweb-nav-toggle cafeweb-nav-toggle"><i></i></a>
      <aside id="cafeweb-aside" role="complementary" class="js-fullheight">
        <nav id="cafeweb-main-menu" role="navigation">
          <ul>
            <li id="item-home"><a href="/">Home</a></li>
            <li id="item-about"><a href="/about">About</a></li>
           {{--  <li><a href="{{route('contact')}}">Contact</a></li> --}}
          </ul>
        </nav>
        <div class="cafeweb-footer">
          <h1 id="cafeweb-logo" class="mb-4"><a href="#" style="background-image: url(/assets/front/images/bg_1.jpg);">Cafe<span>Web<i class="icon icon-coffee"></i></span></a></h1>
          <div class="">
            <h6>My goal is to be an excellent software engineer in the future.</h6>
            <hr>
            {{-- <form action="#" class="cafeweb-subscribe-form">
              <div class="form-group d-flex">
                <div class="icon"><span class="icon-paper-plane"></span></div>
                <input type="text" class="form-control" placeholder="Enter Email Address">
              </div>
            </form> --}}
          </div>
          {{-- <p class="pfooter">
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://cafeweb.xyz" target="_blank">Laravel</a>
          </p> --}}

        </div>
        </aside> <!-- END cafeweb-ASIDE -->