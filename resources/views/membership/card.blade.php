<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ActionSA') }}</title>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/pCard_iconCode.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pCard_mainStyle.css') }}">

</head>

<body>

<div class="pCard_card">

    <div class="pCard_up">
        <div class="pCard_text">
            <h2>Eslam Adel</h2>
            <p>UI/UX Designer &amp; UI Developer</p>
        </div>

        <div class="pCard_add"><i class="fa fa-plus"></i></div>
    </div>

    <div class="pCard_down">
        <div>
            <p>Projects</p>
            <p>26</p>
        </div>
        <div>
            <p>Views</p>
            <p>21579</p>
        </div>
        <div>
            <p>Likes</p>
            <p>976</p>
        </div>
    </div>

    <div class="pCard_back">
        <p>See My Latest Work Here</p>
        <a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a>
        <a href="#"><i class="fa fa-linkedin fa-2x fa-fw"></i></a>
        <a href="#"><i class="fa fa-behance fa-2x fa-fw"></i></a> <br>
        <a href="#"><i class="fa fa-codepen fa-2x fa-fw"></i></a>
        <a href="#"><i class="fa fa-dribbble fa-2x fa-fw"></i></a>
        <a href="#"><i class="fa fa-instagram fa-2x fa-fw"></i></a>
        <p>Follow Me...</p>
    </div>

</div>

<div class="pCard_card">

    <div class="pCard_up">
        <div class="pCard_text">
            <h2>Eslam Adel</h2>
            <p>UI/UX Designer &amp; UI Developer</p>
        </div>

        <div class="pCard_add"><i class="fa fa-plus"></i></div>
    </div>

    <div class="pCard_down">
        <div>
            <p>Projects</p>
            <p>26</p>
        </div>
        <div>
            <p>Views</p>
            <p>21579</p>
        </div>
        <div>
            <p>Likes</p>
            <p>976</p>
        </div>
    </div>

    <div class="pCard_back">
        <p>See My Latest Work Here</p>
        <a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a>
        <a href="#"><i class="fa fa-linkedin fa-2x fa-fw"></i></a>
        <a href="#"><i class="fa fa-behance fa-2x fa-fw"></i></a> <br>
        <a href="#"><i class="fa fa-codepen fa-2x fa-fw"></i></a>
        <a href="#"><i class="fa fa-dribbble fa-2x fa-fw"></i></a>
        <a href="#"><i class="fa fa-instagram fa-2x fa-fw"></i></a>
        <p>Follow Me...</p>
    </div>

</div>

<script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
<script src="{{ asset('js/pCard_script.js') }}"></script>
</body>

</html>
