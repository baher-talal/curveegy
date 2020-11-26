@extends('front.layouts.app')

@section('content')

<section class="landing_page">
  <div class="container">
    <form class="form_landing" action="#0">
      <p class="your_data">
        <span class="d-block text-center font-weight-bold">سجل بياناتك لمزيد من المعلومات</span>
        <span class="d-block text-center font-weight-bold">هنكلمك و نقولك افضل الاختيارات</span>
      </p>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon2"><i class="fa fa-phone" aria-hidden="true"></i></span>
        </div>
        <input type="phone" class="form-control" placeholder="Phone Number" aria-label="phoneNumber" aria-describedby="basic-addon2" required>
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon3"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
        </div>
        <input type="email" class="form-control" placeholder="Email [Optional]" aria-label="phoneNumber" aria-describedby="basic-addon3">
      </div>

      <button class="btn text-capitalize form_submit" type="submit">submit</button>
    </form>

    <div class="landing_desc rounded">
      <p>نبذه عن</p>

      <h5>مشروع كاسيل لاند مارك</h5>

      <p class="landing_desc_p">
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

  <div class="container">
    <form class="form_landing" action="#0">
      <p class="your_data">
        <span class="d-block text-center font-weight-bold">سجل بياناتك لمزيد من المعلومات</span>
        <span class="d-block text-center font-weight-bold">هنكلمك و نقولك افضل الاختيارات</span>
      </p>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon2"><i class="fa fa-phone" aria-hidden="true"></i></span>
        </div>
        <input type="phone" class="form-control" placeholder="Phone Number" aria-label="phoneNumber" aria-describedby="basic-addon2" required>
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon3"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
        </div>
        <input type="email" class="form-control" placeholder="Email [Optional]" aria-label="phoneNumber" aria-describedby="basic-addon3">
      </div>

      <button class="btn text-capitalize form_submit" type="submit">submit</button>
    </form>
  </div>
</section>


@endsection
