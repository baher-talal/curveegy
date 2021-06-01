@extends('dashboard.layouts.app')

@section('content')

<div class="container">

    <h3>Social Media</h3>
    @if (session()->has('success'))
    <div class="card mb-4 py-3 border-bottom-success">
        <div class="card-body">
            {{session('success')}}
        </div>
    </div>
    @endif
    <hr>

    <form action="{{url('dashboard/socialMedia')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">facebook</span>
            </div>
            <input type="text" class="form-control" placeholder="facebook" name="facebook" aria-label="facebook" aria-describedby="basic-addon1" value="{{setting('facebook')->value}}">
            <input type="checkbox" name="facebooktoggle" id="facebooktoggle" @if(setting('facebook')->toggle == 1) checked @endif>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">twitter</span>
            </div>
            <input type="text" class="form-control" placeholder="twitter" name="twitter" aria-label="address" aria-describedby="basic-addon1" value="{{setting('twitter')->value}}">
            <input type="checkbox" name="twittertoggle" id="twittertoggle" @if(setting('twitter')->toggle == 1) checked @endif>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">instagram</span>
            </div>
            <input type="text" class="form-control" placeholder="instagram" name="instagram" aria-label="phone" aria-describedby="basic-addon1" value="{{setting('instagram')->value}}">
            <input type="checkbox" name="instagramtoggle" id="instagramtoggle" @if(setting('instagram')->toggle == 1) checked @endif>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">linkedin</span>
            </div>
            <input type="text" class="form-control" placeholder="linkedin" name="linkedin" aria-label="phone" aria-describedby="basic-addon1" value="{{setting('linkedin')->value}}">
            <input type="checkbox" name="linkedintoggle" id="linkedintoggle" @if(setting('linkedin')->toggle == 1) checked @endif>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">youtube</span>
            </div>
            <input type="text" class="form-control" placeholder="youtube" name="youtube" aria-label="youtube" aria-describedby="basic-addon1" value="{{setting('youtube')->value}}">
            <input type="checkbox" name="youtubetoggle" id="youtubetoggle" @if(setting('youtube')->toggle == 1) checked @endif>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">whatsapp</span>
            </div>
            <input type="text" class="form-control" placeholder="whatsapp" name="whatsapp" aria-label="whatsapp" aria-describedby="basic-addon1" value="{{setting('whatsapp')->value}}">
            <input type="checkbox" name="whatsapptoggle" id="whatsapptoggle" @if(setting('whatsapp')->toggle == 1) checked @endif>
        </div>

        <input type="submit" class="btn btn-success btn-lg w-100" value="save">

    </form>

</div>

@endsection
