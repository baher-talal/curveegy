@extends('front.layouts.app')
@section('content')

<section class="landing_page">
  <div class="container_views">
    <form class="form_landing" method="POST" action="{{url('/dashboard/landing')}}">
      @csrf
      <p class="your_data">
        @lang('front.your_data')
      </p>

      <section class="text-center">
        <div class="container">
          @if(session()->has('success'))
          <span class="alert alert-success">{{session()->get('success')}}</span>
          @endif
        </div>
      </section>

      <div class="all_group input-group mb-3">
        <div class="input-group-prepend">
          <span class="span_icon input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
        </div>
        <input type="text" class="form-control" name="username" placeholder="أسم المستخدم" aria-label="Username" aria-describedby="basic-addon1" required>
      </div>

      <div class="all_group input-group mb-3">
        <div class="input-group-prepend">
          <span class="span_icon input-group-text" id="basic-addon2"><i class="fa fa-phone" aria-hidden="true"></i></span>
        </div>
        <input type="phone" class="form-control" name="phone" placeholder="رقم التليفون" aria-label="phoneNumber" aria-describedby="basic-addon2" required>
      </div>

      <div class="all_group input-group mb-3">
        <div class="input-group-prepend">
          <span class="span_icon input-group-text" id="basic-addon3"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
        </div>
        <input type="email" class="form-control" name="mail" placeholder="الايميل [اختياري]" aria-label="phoneNumber"
          aria-describedby="basic-addon3">
      </div>

      <button class="btn text-capitalize form_submit" type="submit">@lang('front.submit')</button>
    </form>

    <div class="landing_desc rounded">
      <p class="about_pro">نبذه عن</p>

      <h5 class="title_pro">{{$card->title}}</h5>

      <p class="landing_desc_p mb-0">{{$card->description}}</p>
    </div>
  </div>

  @if ($card_imgs)
  <div class="landing_img mt-3">
    <div class="row m-0">
      @foreach ($card_imgs as $img)
      <div class="col-xl-4 p-0">
        <div class="">
          <img class="w-100" src="{{url("uploads/$img")}}" alt="">
        </div>
      </div>
      @endforeach

    </div>
  </div>
  @endif

  <div class="container_views">
    <form class="form_landing" method="POST" action="{{url('/dashboard/landing')}}">
      @csrf
      <p class="your_data">
        @lang('front.your_data')
      </p>

      <div class="all_group input-group mb-3">
        <div class="input-group-prepend">
          <span class="span_icon input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
        </div>
        <input type="text" class="form-control" name="username" placeholder="أسم المستخدم" aria-label="Username" aria-describedby="basic-addon1" required>
      </div>

      <div class="all_group input-group mb-3">
        <div class="input-group-prepend">
          <span class="span_icon input-group-text" id="basic-addon2"><i class="fa fa-phone" aria-hidden="true"></i></span>
        </div>
        <input type="phone" class="form-control" name="phone" placeholder="رقم التليفون" aria-label="phoneNumber" aria-describedby="basic-addon2" required>
      </div>

      <div class="all_group input-group mb-3">
        <div class="input-group-prepend">
          <span class="span_icon input-group-text" id="basic-addon3"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
        </div>
        <input type="email" class="form-control" name="mail" placeholder="الايميل [اختياري]" aria-label="phoneNumber" aria-describedby="basic-addon3">
      </div>

      <button class="btn text-capitalize form_submit" type="submit">@lang('front.submit')</button>
    </form>
  </div>
</section>
@endsection
