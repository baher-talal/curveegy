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
                <span class="input-group-text" id="basic-addon1">address1</span>
            </div>
            <input type="text" class="form-control" placeholder="address" name="address1" aria-label="address" aria-describedby="basic-addon1" value="{{setting('address1')->value}}">
            <input type="checkbox" name="address1toggle" id="address1toggle" @if(setting('address1')->toggle == 1) checked @endif>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">address2</span>
            </div>
            <input type="text" class="form-control" placeholder="address" name="address2" aria-label="address" aria-describedby="basic-addon1" value="{{setting('address2')->value}}">
            <input type="checkbox" name="address2toggle" id="address2toggle" @if(setting('address2')->toggle == 1) checked @endif>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">phone1</span>
            </div>
            <input type="text" class="form-control" placeholder="phone" name="phone1" aria-label="phone" aria-describedby="basic-addon1" value="{{setting('phone1')->value}}">
            <input type="checkbox" name="phone1toggle" id="phone1toggle" @if(setting('phone1')->toggle == 1) checked @endif>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">phone2</span>
            </div>
            <input type="text" class="form-control" placeholder="phone" name="phone2" aria-label="phone" aria-describedby="basic-addon1" value="{{setting('phone2')->value}}">
            <input type="checkbox" name="phone2toggle" id="phone2toggle" @if(setting('phone2')->toggle == 1) checked @endif>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">mail</span>
            </div>
            <input type="text" class="form-control" placeholder="mail" name="mail" aria-label="mail" aria-describedby="basic-addon1" value="{{setting('mail')->value}}">
            <input type="checkbox" name="mailtoggle" id="mailtoggle" @if(setting('mail')->toggle == 1) checked @endif>
        </div>

        <input type="submit" class="btn btn-success btn-lg w-100" value="save">

    </form>

</div>

@endsection
