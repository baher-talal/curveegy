@extends('dashboard.layouts.app')

@section('content')

<div class="container">

    <h3>Header Video</h3>

    <hr>

    <form action="{{url('dashboard/headervideoStore')}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="headervideoinput" id="headervideoinput" accept=".mp4">
                <label class="custom-file-label" for="headervideoinput">Choose file</label>
            </div>
        </div>

        <input type="submit" value="save">

    </form>

</div>

@endsection