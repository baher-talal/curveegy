@extends('dashboard.layouts.app')

@section('content')

<div class="container">

    <h3>Footer</h3>
    @if (session()->has('success'))
    <div class="card mb-4 py-3 border-bottom-success">
        <div class="card-body">
            {{session('success')}}
        </div>
    </div>
    @endif
    <hr>

    <form action="{{url('dashboard/footer')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">address</span>
            </div>
            <input type="text" class="form-control" placeholder="address" name="address" aria-label="address" aria-describedby="basic-addon1" value="{{$address}}">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">phone</span>
            </div>
            <input type="text" class="form-control" placeholder="phone" name="phone" aria-label="phone" aria-describedby="basic-addon1" value="{{$phone}}">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">mail</span>
            </div>
            <input type="text" class="form-control" placeholder="mail" name="mail" aria-label="mail" aria-describedby="basic-addon1" value="{{$mail}}">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">website</span>
            </div>
            <input type="text" class="form-control" placeholder="website" name="website" aria-label="website" aria-describedby="basic-addon1" value="{{$website}}">
        </div>

        <input type="submit" class="btn btn-success btn-lg w-100" value="save">

    </form>

</div>

@endsection