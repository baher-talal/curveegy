<!DOCTYPE html>
<html lang="en">

<head>
  <title>Curve Egy Real Estate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta content="We offer more than 300 real estate compounds i
  n New Cairo, 6 October, Sheikh Zayed, North Coast, Ain Sokhna & Over 300 Real-estate consultants." name="description" />
  <meta content="real estate egypt, realestate egypt, property for sale, property for rent, mls listings, property listings, New Cairo, 6 October, Sheikh Zayed, North Coast, Ain Sokhna" name="keywords">
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- Custom Theme files -->
  <!-- <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all"> -->
  <link href="{{url('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet" media="all">
  <link href="{{url('css/font-awesome.css')}}" rel="stylesheet"> <!-- font-awesome icons -->
  <link rel="stylesheet" href="{{url('css/flexslider.css')}}" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{url('css/curveegy_en.css')}}">

  @if(Session::get('language') == 'ar')
  <link rel="stylesheet" type="text/css" href="{{url('css/curveegy_ar.css')}}">
  @endif

  <!-- //Custom Theme files -->
  <!-- font -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700&amp;subset=latin-ext" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <!-- //font -->

</head>

<body>
  <header>
    <div class="row m-0">
      <div class="col-8 p-0">
        <div class="head_logo">
          <a href="{{url('/')}}">
            <img class="img_logo" src="{{url('images/curve_logo.png')}}" alt="Curve Logo">
          </a>
        </div>
      </div>

      <div class="col-4 p-0">
        <div class="toggle_lang">
          <input type="checkbox" id="on-off" name="on-off" onclick="toggle_lang()" class="switch-input" @if(Session::get('language')=='ar' ) checked @endif>
          <label for="on-off" class="switch-label">
            <span class="toggle--on toggle--option">
              <img class="w-100" src="{{url('images/en.png')}}" alt="EN">
            </span>

            <span class="toggle--off toggle--option">
              <img class="w-100" src="{{url('images/ar.png')}}" alt="AR">
            </span>
          </label>
        </div>
      </div>
    </div>
  </header>
  <!-- //navigation -->

  @yield('content')
  <!-- footer -->
  <div class="w3-agile-footer">
    <div class="container_views">
      <div class="footer-grids">
        <div class="row m-0">
          <div class="col-md-4 col-lg-4 col-xl-4 col-12 footer-grid">
            <div class="foot-top-w3 borderBottom">
              <div class="footer-grid-heading">
                <h4>@lang('front.touch')</h4>
              </div>

              <div class="footer-grid-info">
                <div class="row">
                  <div class="col-xl-1 col-1 p-0">
                    <i class="fa fa-map-marker i_icons"></i>
                  </div>

                  <div class="col-xl-11 col-11 p-0">
                    <p>{{$address}}</p>
                  </div>

                  <div class="col-xl-1 col-1 p-0">
                    <i class="fa fa-phone i_icons"></i>
                  </div>

                  <div class="col-xl-11 col-11 p-0">
                    <a href="tel:+{{$phone}}">{{$phone}}</a>
                  </div>

                  <div class="col-xl-1 col-1 p-0">
                    <i class="fa fa-envelope-o i_icons"></i>
                  </div>

                  <div class="col-xl-11 col-11 p-0">
                    <a href="mailto:admin@curveegy.com">{{$mail}}</a>
                  </div>

                  <div class="col-xl-1 col-1 p-0">
                    <i class="fa fa-globe i_icons"></i>
                  </div>

                  <div class="col-xl-11 col-11 p-0">
                    <a class="text-lowercase" href="http://www.curveegy.com/">{{$website}}</a>
                  </div>

                  <div class="col-xl-12">
                    <button type="button" class="location_btn btn text-capitalize" data-toggle="modal" data-target="#exampleModalCenter">@lang('front.location')</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 col-xl-4 col-12 footer-grid">
            <div class="foot-top-w3 borderBottom">
              <div class="footer-grid-heading">
                <h4>@lang('front.Newsletter')</h4>
              </div>

              <div class="footer-grid-info">
                <p>@lang('front.news')</p>
              </div>

              <div class="w3-agileits-subscribe-form">
                <form action="{{url('dashboard/newsletterStore')}}" method="post">
                  @csrf
                  <input type="text" placeholder="Email" name="mail" required="">
                  <button type="submit" class="btn1">@lang('front.Subscribe')</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 col-xl-4 col-12 footer-grid">
            <div class="foot-top-w3">
              <div class="footer-grid-heading">
                <h4>@lang('front.follow')</h4>
              </div>
              <div class="social">
                <ul>
                  <li><a href="https://wa.me/+201005721414"><i class="fa fa-whatsapp"></i></a></li>
                  <li><a href="https://www.facebook.com/Curve-104326978133886/"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/curve.realestateco/?igshid=18yvkdv78idlf"><i class="fa fa-instagram"></i></a></li>
                  <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                  <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="clearfix"> </div>

        </div>
      </div>
    </div>
  </div>
  <!-- //footer -->

  <!-- copy rights start here -->
  <div class="copy-w3right">
    <div class="container_views">
      <p>© 2020 Curve Egy. All Rights Reserved | Powered by <a class="text-capitalize" href="http://www.ideagroupegypt.com/">idea group</a> </p>
    </div>
  </div>

  <!-- //copy right end here -->

  <div class="location_modal">
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="my_location">
              <ul class="list-unstyled">
                <li>
                  <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=fifth%20settlement&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org"></a></div>
                  </div>
                </li>

              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn x_modal" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scroll Up -->
  <a class="rounded-circle" href="javascript:" id="return-to-top">
    <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i>
  </a>

  <!-- //bootstrap-pop-up -->
  <script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>
  <!-- js -->
  <!-- FlexSlider -->
  <script defer src="{{url('js/jquery.flexslider.js')}}"></script>
  <script type="text/javascript" src="{{url('js/easing.js')}}"></script>
  {{-- <script src="{{url('js/bootstrap.js')}}"></script> --}}
  <script src="{{url('js/bootstrap.min.js')}}"></script>
  <script src="{{url('js/popper.min.js')}}"></script>
  <script src="{{url('js/script.js')}}"></script>
  @yield('script')
  <script>
    function toggle_lang() {
      const checkbox = document.getElementById("on-off");
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
          location.href = "{{url('lang/ar')}}";
        } else {
          location.href = "{{url('lang/en')}}";
        }
      });
    }
  </script>
</body>

</html>
