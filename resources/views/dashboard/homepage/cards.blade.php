@extends('dashboard.layouts.app')

@section('content')

<div class="container">

    <h3>Cards</h3>

    <hr>

    <form action="{{url('dashboard/cards')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">title</span>
            </div>
            <input type="text" class="form-control" placeholder="title" aria-label="title" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">city</span>
            </div>
            <input type="text" class="form-control" placeholder="city" aria-label="city" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">installment</span>
            </div>
            <input type="text" class="form-control" placeholder="installment" aria-label="installment" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">downpayment</span>
            </div>
            <input type="text" class="form-control" placeholder="downpayment" aria-label="downpayment" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Description</span>
            </div>
            <textarea type="text" class="form-control" placeholder="Description" aria-label="Description" aria-describedby="basic-addon1"></textarea>
          </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Image</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="image" accept=".egp">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>
        </div>

        <input type="submit" value="save">

    </form>

</div>

@endsection