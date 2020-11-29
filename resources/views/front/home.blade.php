@extends('front.layouts.app')

@section('content')

<main class="">
  <!-- banner -->
  <div class="w3ls-banner">

    <video id="myVideo" class="video-fluid" poster="images/2.jpg" loop muted playsinline>
      <source src="{{url("uploads/$header_video->value")}}" type="video/mp4" />
    </video>

    <!-- banner-text -->
    <div class="banner-text banner_slider rounded">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <h2>Finding Your House is Much Easier now!</h2>
            <h5>We help you to find the best property match to you need in just a few simple steps.</h5>
          </li>
          <li>
            <h3>The Best Way To Find Your Home</h3>
            <h5>We help you to find the best property match to you need in just a few simple steps.</h5>
          </li>
          <li>
            <h3>Finding Your House is Much Easier now!</h3>
            <h5>We help you to find the best property match to you need in just a few simple steps.</h5>
          </li>
        </ul>
      </div>
    </div>
    <!-- //banner-text -->
  </div>
  <!-- //banner -->
  <div class="container_views">

    @foreach ($cards as $card)

    <div class="dFlex">
      <figure class="effect-julia rounded">
        <a href="{{url('/landing')}}" class="btn text-capitalize more_details">
          <img src="images/2.jpg" class="img-fluid " alt="curve">

          <figcaption>
            <div class="more_desc">
              <p class="text-capitalize">New Cairo</p>
              <p class="text-capitalize">10% Down Payment</p>
              <p class="text-capitalize">8 Installment</p>
            </div>
            <!-- <a href="#0" class="text-capitalize btn more_details">more details</a> -->
          </figcaption>
        </a>
        <a href="#0" class="btn text-capitalize read_more" data-toggle="modal" data-target="#myModal">Read More</a>
      </figure>
    </div>

    @endforeach
  </div>
</main>

<!-- Modal -->
@foreach ($cards as $card)
<div id="modalImg">
  <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <section>
          <div class="modal-body">
            <img src="images/3.jpg" alt=" " class="img-responsive" />
            <p>Ut enim ad minima veniam, quis nostrum
              exercitationem ullam corporis suscipit laboriosam,
              nisi ut aliquid ex ea commodi consequatur? Quis autem
              vel eum iure reprehenderit qui in ea voluptate velit
              esse quam nihil molestiae consequatur, vel illum qui
              dolorem eum fugiat quo voluptas nulla pariatur.
              <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                esse quam nihil molestiae consequatur.</i></p>

            <a class="btn btn_download" href="images/3.jpg" download>Download</a>
          </div>
        </section>
        <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection

@section('script')
<script>
  const myVideo = document.getElementById('myVideo');

  // Not all browsers return promise from .play().
  const playPromise = myVideo.play() || Promise.reject('');
  playPromise.then(() => {
    // Video could be autoplayed, do nothing.
  }).catch(err => {
    // Video couldn't be autoplayed because of autoplay policy. Mute it and play.
    myVideo.muted = true;
    myVideo.play();
  });
</script>
@endsection