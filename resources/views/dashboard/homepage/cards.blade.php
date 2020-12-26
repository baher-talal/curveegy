@extends('dashboard.layouts.app')

@section('content')

<div class="container">

    <h3>Cards</h3>
    @if (session()->has('success'))
    <div class="card mb-4 py-3 border-bottom-success">
        <div class="card-body">
            {{session('success')}}
        </div>
    </div>
    @endif    

    <hr>

    <form action="{{url('dashboard/cardsStore')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="input-group mb-3 d-none">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">id</span>
          </div>
          <input type="text" class="form-control" placeholder="id" name="id" aria-label="id" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">title</span>
          </div>
          <input type="text" class="form-control" placeholder="title" name="title" aria-label="title" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">city</span>
          </div>
          <input type="text" class="form-control" placeholder="city" name="city" aria-label="city" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">installment</span>
          </div>
          <input type="text" class="form-control" placeholder="installment" name="installment" aria-label="installment" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">downpayment</span>
          </div>
          <input type="text" class="form-control" placeholder="downpayment" name="downpayment" aria-label="downpayment" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Description</span>
          </div>
          <textarea type="text" class="form-control" placeholder="Description" name="description" aria-label="Description" aria-describedby="basic-addon1"></textarea>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">title AR</span>
          </div>
          <input type="text" class="form-control" placeholder="title" name="title_ar" aria-label="title" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">city AR</span>
          </div>
          <input type="text" class="form-control" placeholder="city" name="city_ar" aria-label="city" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">installment AR</span>
          </div>
          <input type="text" class="form-control" placeholder="installment" name="installment_ar" aria-label="installment" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">downpayment AR</span>
          </div>
          <input type="text" class="form-control" placeholder="downpayment" name="downpayment_ar" aria-label="downpayment" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Description AR</span>
          </div>
          <textarea type="text" class="form-control" placeholder="Description" name="description_ar" aria-label="Description" aria-describedby="basic-addon1"></textarea>
        </div>

      <div class="input-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text">Image</span>
          </div>
          <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="image">
              <label class="custom-file-label" for="image">Choose file</label>
          </div>
      </div>

      <div class="input-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text">Landing Images</span>
          </div>
          <div class="custom-file">
              <input type="file" class="custom-file-input" name="landing_imgs[]" id="landing-imgs" multiple>
              <label class="custom-file-label" for="landing-imgs">Choose files</label>
          </div>
      </div>

      <input type="submit" class="btn btn-success btn-lg w-100" value="save">

    </form>

</div>

<hr>
<div class="card-body">

<div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
          <tr>
              <th>title</th>
              <th>city</th>
              <th>installment</th>
              <th>downpayment</th>
              <th>image</th>
              <th>action</th>
          </tr>
      </thead>
      {{-- <tfoot>
          <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
          </tr>
      </tfoot> --}}
      <tbody>
        @foreach ($cards as $card)
          <tr>
            <td>{{$card->title}}</td>
            <td>{{$card->city}}</td>
            <td>{{$card->installment}}</td>
            <td>{{$card->downpayment}}</td>
            <td><img width="100px" class="img-fluid rounded-circle" src="{{url("uploads/$card->image")}}" alt=""></td>
            <td data-id="{{$card->id}}">
              <a class="btn btn-sm btn-primary edit"><i class="fa fa-pen"></i></a>
              <a class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
  </table>
</div>
</div>

@endsection

@section('script')
<script>
  $('.edit').click(function (e) {
    var id = $(this).parent().data('id');
    $.ajax({
      type: "get",
      url: "{{url('dashboard/cardsEdit')}}",
      data: {"id": id},
      success: function (response) {
        $("input[name='id']").val(response.id);
        $("input[name='title']").val(response.title);
        $("input[name='city']").val(response.city);
        $("input[name='installment']").val(response.installment);
        $("input[name='downpayment']").val(response.downpayment);
        $("textarea[name='description']").val(response.description);
        $("input[name='title_ar']").val(response.title_ar);
        $("input[name='city_ar']").val(response.city_ar);
        $("input[name='installment_ar']").val(response.installment_ar);
        $("input[name='downpayment_ar']").val(response.downpayment_ar);
        $("textarea[name='description_ar']").val(response.description_ar);
      }
    });
  });
</script>  
<script>
  $('.delete').click(function (e) {
    if(confirm('delete?')){
      var element = $(this).parent().parent();
      var id = $(this).parent().data('id');
      var csrf = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
        type: "post",
        url: "{{url('dashboard/cardsDelete')}}",
        data: {
          "id": id, 
          'X-CSRF-TOKEN': csrf
          },
        success: function (response) {
          if(response){
            element.remove();
            alert('deleted!')
          }
        }
      });
    }
  });
</script>  
@endsection