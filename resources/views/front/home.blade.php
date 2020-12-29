@extends('front.layouts.app')
@section('content')

<style>
  header {
    height: 0;
}
</style>

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
            @lang('front.slider1')
          </li>
          <li>
            @lang('front.slider2')
          </li>
          <li>
            @lang('front.slider3')
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
        <a href="{{url("/landing/$card->id")}}" class="btn text-capitalize dFlex_title">
          <h6>{{$card->title}}</h6>
        </a>

        <a href="{{url("/landing/$card->id")}}" class="btn text-capitalize more_details">
          <img src="{{url("uploads/$card->image")}}" class="img-fluid " alt="curve">

          <figcaption>
            <div class="more_desc">
              @if ($card->city)
              <p class="text-capitalize">{{$card->city}}</p>
              @endif
              @if ($card->downpayment)
              <p class="text-capitalize">{{$card->downpayment}}</p>
              @endif
              @if ($card->installment)
              <p class="text-capitalize">{{$card->installment}}</p>
              @endif
            </div>
            <!-- <a href="#0" class="text-capitalize btn more_details">more details</a> -->
          </figcaption>
        </a>
        <button class="btn text-capitalize read_more" type="button" data-toggle="modal" data-target='{{"#cardID$card->id"}}'>@lang('front.read_more')</button>
      </figure>
      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target='{{"#test$card->id"}}'>
  Launch demo modal
</button> -->
    </div>

    @endforeach
  </div>
</main>
@foreach ($cards as $card)

<div class="modalImg">
  <div class="modal fade myModal" id='{{"cardID$card->id"}}' tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">{{$card->title}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <section>
          <div class="modal-body">
            <img src="{{url("uploads/$card->image")}}" alt="{{$card->image}}" class="img-responsive rounded" />
            <p class="modalDesc mb-0">{{$card->description}}</p>

            <a class="btn btn_download" href="{{url("uploads/$card->image")}}" download>Download</a>
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
