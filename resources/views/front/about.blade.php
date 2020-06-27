@include('front/layouts/header')

        <div id="cafeweb-main">
          <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
              <div class="container-fluid px-0">
              <div class="row d-flex">
              <div class="col-md-6 d-flex">
              <div class="img d-flex align-self-stretch align-items-center js-fullheight" style="background-image: url('https://scontent.fvca1-2.fna.fbcdn.net/v/t1.0-9/62582643_1123914991142493_6004578873553977344_n.jpg?_nc_cat=101&_nc_sid=09cbfe&_nc_ohc=XR673VEfrQ0AX9naIiK&_nc_ht=scontent.fvca1-2.fna&oh=a26dd374c643a60edbdb0fdb189b2672&oe=5F1B41F5'); height: 667px;">
              </div>
              </div>
              <div class="col-md-6 d-flex align-items-center">
              <div class="text px-4 pt-5 pt-md-0 px-md-4 pr-md-5 ftco-animate fadeInUp ftco-animated">
              <h2 class="mb-4">I'm <span>Cao Thanh Dang</span> a Web Developer</h2>
              <p><code><_ Blog này nhầm chia sẻ, tích lũy kiến thức, học hỏi không ngừng trên con đường trở thành Fullstack Developer__</code>.</p>
              <p>Contact: </p>
              <p><a href="mailto:thanhdang.ag@gmail.com"><code>email: thanhdang.ag@gmail.com.</code></a></p>
              <p><a href="tel:0339888746"><code>phone: 0339888746.</code></a></p>
              <p><a href="#"><code>skype: thanhdang1709.</code></a></p>
              <p><a href="https://facebook.com/thanhdang.ag"><code>fb: fb.com/thanhdang.ag.</code></a></p>
              <button class="btn btn-warning"><i class="icon icon-folder"> </i>My resume</button >
              </div>
              </div>
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
              });
            </script>
          </body>
        </html>