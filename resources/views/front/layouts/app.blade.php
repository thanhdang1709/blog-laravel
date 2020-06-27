@include('front/layouts/header')

        <div id="cafeweb-main">
          <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
              <div class="row d-flex">
                <div class="col-xl-9 px-md-5">
                  
                  @yield('content')
                  
                </div>
                <div class="col-xl-3 sidebar ftco-animate bg-light pt-5">
                  <div class="sidebar-box pt-md-4">
                    <form action="" class="search-form">
                      <div class="form-group">
                        <span class="icon icon-search"></span>
                        <input type="text" id="search_input" class="form-control" placeholder="Type a keyword and hit enter">
                      </div>
                    </form>
                  </div>
                  <x-sidebar-category></x-sidebar-category>
                  <x-sidebar-popular-articles></x-sidebar-popular-articles>
                  <x-sidebar-tag></x-sidebar-tag>


                  {{-- <div class="sidebar-box subs-wrap img py-4" style="background-image: url(assets/front/images/bg_1.jpg);">
                    <div class="overlay"></div>
                    <h3 class="mb-4 sidebar-heading">Newsletter</h3>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
                    <form action="#" class="subscribe-form">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address">
                        <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
                      </div>
                    </form>
                  </div> --}}
                  {{-- <div class="sidebar-box ftco-animate">
                    <h3 class="sidebar-heading">Archives</h3>
                    <ul class="categories">
                      <li><a href="#">Decob14 2018 <span>(10)</span></a></li>
                      <li><a href="#">September 2018 <span>(6)</span></a></li>
                      <li><a href="#">August 2018 <span>(8)</span></a></li>
                      <li><a href="#">July 2018 <span>(2)</span></a></li>
                      <li><a href="#">June 2018 <span>(7)</span></a></li>
                      <li><a href="#">May 2018 <span>(5)</span></a></li>
                    </ul>
                  </div> --}}
                  <div class="sidebar-box ftco-animate">
                    <h3 class="sidebar-heading">Quote</h3>
                    <p>Code is my life. Coffee is my life.</p>
                  </div>
                  </div><!-- END COL -->
                </div>
              </div>
            </section>
            </div><!-- END cafeweb-MAIN -->
            </div><!-- END cafeweb-PAGE -->
            <!-- loader -->
            <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
            <script src="{{asset('assets\front\js\jquery.min.js')}}"></script>
            <script src="{{asset('assets\front\js\jquery-migrate-3.0.1.min.js')}}"></script>
            <script src="{{asset('assets\front\js\popper.min.js')}}"></script>
            <script src="{{asset('assets\front\js\bootstrap.min.js')}}"></script>
            <script src="{{asset('assets\front\js\jquery.easing.1.3.js')}}"></script>
            <script src="{{asset('assets\front\js\jquery.waypoints.min.js')}}"></script>
            <script src="{{asset('assets\front\js\jquery.stellar.min.js')}}"></script>
            <script src="{{asset('assets\front\js\owl.carousel.min.js')}}"></script>
            <script src="{{asset('assets\front\js\jquery.magnific-popup.min.js')}}"></script>
            <script src="{{asset('assets\front\js\aos.js')}}"></script>
            <script src="{{asset('assets\front\js\jquery.animateNumber.min.js')}}"></script>
            <script src="{{asset('assets\front\js\scrollax.min.js')}}"></script>
            <script src="{{asset('assets\front\js\main.js')}}"></script>
            <script type="text/javascript">
              $(document).ready(function(){
                    var current = location.pathname;
                      if(current == '/about'){
                          $('#item-about').addClass('cafeweb-active');
                      }
                      else{
                          $('#item-home').addClass('cafeweb-active');
                      }
                  var input = $("#search_input");    
                    input.keyup(function(event) {
                    if (event.keyCode === 13) {
                      event.preventDefault();
                      window.location.href="/search/"+input.val();
                    }
                  });
              });

            </script>
          </body>
        </html>