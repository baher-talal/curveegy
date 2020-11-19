<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Curve Egy Real Estate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- SEO Engine -->
  <meta name="keywords" content="">
  <meta name="description" content="Place the meta description text here.">
  <meta name="title" content="">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
  <!-- Fontawesome CSS-->
  <!-- <link rel="stylesheet" type="text/css" href="css/all.min.css"> -->
  <!-- owl carousel -->
  <!-- <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
  <!-- curveegy CSS-->
  <link rel="stylesheet" type="text/css" href="{{url('css/curveegy.css')}}">
</head>

<body>
  <header class="w-100">
    <a class="link_logo" href="#0">
      <img class="m-auto d-block" src="{{url('img/curve/curve_logo.png')}}" alt="">
    </a>
  </header>

  @yield('content')

  <footer class="w-100 p-3">
    <div class="row">
      <div class="col-xl-4">
        <div class="latest_news">
          <ul class="list-unstyled">
            <h6 class="text-center text-capitalize">Latest News</h6>

            <li>
              <div class="row">
                <div class="col-xl-1">
                  <i class="fas fa-stopwatch"></i>
                </div>
                <div class="col-xl-11 font-weight-bold">ODE Signs EGP 3.8 bn Debt Rescheduling Package with Egyptian Banks</div>
              </div>
            </li>

            <li>
              <div class="row">
                <div class="col-xl-1">
                  <i class="fas fa-stopwatch"></i>
                </div>
                <div class="col-xl-11 font-weight-bold">Inertia Intends to Develop Projects in Ain Sokhna, New Cairo</div>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-xl-4">
        <div class="get_touch">
          <ul class="list-unstyled">
            <h6 class="text-center text-capitalize">Get In Touch</h6>
            <li>
              <div class="row">
                <div class="col-xl-1">
                  <i class="fas fa-phone"></i>
                </div>
                <div class="col-xl-11">
                  <a class="foot_link font-weight-bold" href="tel:+19666">19666</a>
                </div>
              </div>
            </li>

            <li>
              <div class="row">
                <div class="col-xl-1">
                  <i class="fas fa-envelope-open"></i>
                </div>
                <div class="col-xl-11">
                  <a class="foot_link font-weight-bold" href="mailto:admin@curveegy.com">admin@curveegy.com</a>
                </div>
              </div>
            </li>

            <li>
              <div class="row">
                <div class="col-xl-1">
                  <i class="fas fa-globe"></i>
                </div>
                <div class="col-xl-11">
                  <a class="foot_link font-weight-bold" href="#0">http://www.curveegy.com/</a>
                </div>
              </div>
            </li>

            <li>
              <div class="row">
                <div class="col-xl-1">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="col-xl-11  font-weight-bold">
                  The fifth settlement south of Academy Property 281 First Floor
                  <button type=" button" class="location_btn btn text-capitalize" data-toggle="modal" data-target="#exampleModalCenter">
                    location
                  </button>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-xl-4">
        <div class="subscribe">
          <ul class="list-unstyled">
            <h6 class="text-center text-capitalize">subscribe</h6>

            <li>
              <form class="subscribe_mail">
                <div class="form-group col-xl-12">
                  <label for="inputEmail4">Sign up with your email to get latest updates and offers</label>
                  <div class="input_icon input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input_icon_bg input-group-text"><i class="fas fa-envelope-open"></i></div>
                    </div>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                </div>
              </form>
            </li>

            <li>
              <div class="row">
                <div class="col-xl-6">
                  <div class="google_play">
                    <a href="#0">
                      <img src="img/curve/googleplay.png" class="img-fluid" alt="googleplay">
                    </a>
                  </div>
                </div>

                <div class="col-xl-6">
                  <div class="app_store">
                    <a href="#0">
                      <img src="img/curve/applestore.png" class="img-fluid" alt="applestore">
                    </a>
                  </div>
                </div>

              </div>
            </li>

            <li>
              
            </li>

            <!-- <li>
              <div class="rounded-social-buttons">
                <a class="social-button facebook" href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="social-button instagram" href="#0" target="_blank"><i class="fab fa-instagram"></i></a>
                <a class="social-button linkedin" href="#0" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a class="social-button twitter" href="1.25" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="social-button whatsapp" href="1.25" target="_blank"><i class="fab fa-whatsapp"></i></a>
              </div>
            </li> -->
          </ul>
        </div>
      </div>
    </div>

    <div id="location_modal">
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
  </footer>
</body>

</html>
<!-- jQuery JS -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap JS -->
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/popper.min.js')}}"></script>

<script src="{{url('js/script.js')}}"></script>
</body>

</html>
