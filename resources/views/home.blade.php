<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Geronimo test technique DJIBRINE Adoum Souleyman</title>

    <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet">
</head>
<body>
@include('partials.nav')
@include('partials.header')
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
@include('partials.footer')
<script src="{{ asset("assets/js/jquery.min.js") }}"></script>
<script src="{{ asset("assets/js/bootstrap.bundle.min.js") }}"></script>
</body>
</html>