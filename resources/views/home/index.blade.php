@extends('master')

@section('content')

<div class="container-fluid">
    <h2 style="text-align: center;margin-top: 10px;">Latest news</h2>
    <div class="row">
        @include('home.posts.index')
    </div>
    <br>
    <div class="row mb-4">
        <div class="col-md-12">
            <a class="btn btn-lg btn-secondary btn-block" href="#">LOAD MORE</a>
        </div>
    </div>
</div>
@endsection