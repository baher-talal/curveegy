@extends('front.layouts.app')

@section('content')

<section class="landing_page">
  <div class="container_views">
    <form class="form_landing" method="POST" action="{{url('/dashboard/landing')}}">
      @csrf
      <p class="your_data">
        <span class="d-block text-center font-weight-bold">سجل بياناتك لمزيد من المعلومات</span>
        <span class="d-block text-center font-weight-bold">هنكلمك و نقولك افضل الاختيارات</span>
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
          <span class="span_icon input-group-text" id="basic-addon1"><i class="fa fa-user"
              aria-hidden="true"></i></span>
        </div>
        <input type="text" class="form-control" name="username" placeholder="أسم المستخدم" aria-label="Username"
          aria-describedby="basic-addon1" required>
      </div>

      <div class="all_group input-group mb-3">
        <div class="input-group-prepend">
          <span class="span_icon input-group-text" id="basic-addon2"><i class="fa fa-phone"
              aria-hidden="true"></i></span>
        </div>
        <input type="phone" class="form-control" name="phone" placeholder="رقم التليفون" aria-label="phoneNumber"
          aria-describedby="basic-addon2" required>
      </div>

      <div class="all_group input-group mb-3">
        <div class="input-group-prepend">
          <span class="span_icon input-group-text" id="basic-addon3"><i class="fa fa-envelope-o"
              aria-hidden="true"></i></span>
        </div>
        <input type="email" class="form-control" name="mail" placeholder="الايميل [اختياري]" aria-label="phoneNumber"
          aria-describedby="basic-addon3">
      </div>

      <button class="btn text-capitalize form_submit" type="submit">submit</button>
    </form>

    <div class="landing_desc rounded">
      <p class="about_pro">نبذه عن</p>

      <h5 class="title_pro">مشروع كاسيل لاند مارك</h5>

      <p class="landing_desc_p mb-0">
        كاسيل لاندمارك هو وجهتك لتجربة حياة إستثنائية وفريدة من نوعها بمنطقة R7 المتميزة وبجانب جامعة كوفنتري البريطانية
        بالعاصمة الإدارية <br>
        تبلغ مساحة كاسيل لاندمارك ٤٣ فداناً مع ٨١٪ مساحات خضراء، حيث يبعد حوالي خمسة دقائق عن النهر الأخضر
        بالقرب من الطرق الرئيسية و المناطق التجارية والحكومية <br>
        صمم المشروع من قبل OKOPLAN فهي أفضل شركات الهندسة المعمارية. بالإضافة إلى أن المشروع يتمتع بأكبر جراج تحت الأرض
        لضمان أقصى حدود الرفاهية والخصوصية.
      </p>
    </div>
  </div>


  <div class="landing_img mt-3">
    <div class="row m-0">
      <div class="col-xl-4 p-0">
        <div class="">
          <img class="w-100" src="images/1.jpg" alt="">
        </div>
      </div>

      <div class="col-xl-4 p-0">
        <div class="">
          <img class="w-100" src="images/2.jpg" alt="">
        </div>
      </div>

      <div class="col-xl-4 p-0">
        <div class="">
          <img class="w-100" src="images/3.jpg" alt="">
        </div>
      </div>

      <div class="col-xl-4 p-0">
        <div class="">
          <img class="w-100" src="images/2.jpg" alt="">
        </div>
      </div>

      <div class="col-xl-4 p-0">
        <div class="">
          <img class="w-100" src="images/3.jpg" alt="">
        </div>
      </div>

      <div class="col-xl-4 p-0">
        <div class="">
          <img class="w-100" src="images/1.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="container_views">
    <form class="form_landing" method="POST" action="{{url('/dashboard/landing')}}">
      @csrf
      <p class="your_data">
        <span class="d-block text-center font-weight-bold">سجل بياناتك لمزيد من المعلومات</span>
        <span class="d-block text-center font-weight-bold">هنكلمك و نقولك افضل الاختيارات</span>
      </p>

      <div class="all_group input-group mb-3">
        <div class="input-group-prepend">
          <span class="span_icon input-group-text" id="basic-addon1"><i class="fa fa-user"
              aria-hidden="true"></i></span>
        </div>
        <input type="text" class="form-control" name="username" placeholder="أسم المستخدم" aria-label="Username"
          aria-describedby="basic-addon1" required>
      </div>

      <div class="all_group input-group mb-3">
        <div class="input-group-prepend">
          <span class="span_icon input-group-text" id="basic-addon2"><i class="fa fa-phone"
              aria-hidden="true"></i></span>
        </div>
        <input type="phone" class="form-control" name="phone" placeholder="رقم التليفون" aria-label="phoneNumber"
          aria-describedby="basic-addon2" required>
      </div>

      <div class="all_group input-group mb-3">
        <div class="input-group-prepend">
          <span class="span_icon input-group-text" id="basic-addon3"><i class="fa fa-envelope-o"
              aria-hidden="true"></i></span>
        </div>
        <input type="email" class="form-control" name="mail" placeholder="الايميل [اختياري]" aria-label="phoneNumber"
          aria-describedby="basic-addon3">
      </div>

      <button class="btn text-capitalize form_submit" type="submit">submit</button>
    </form>
  </div>
</section>


@endsection