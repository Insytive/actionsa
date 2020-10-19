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

        <div class="pCard_up-logo">
            <img src="{{ asset('images/logo.svg') }}" alt="site logo" >
        </div>
        <div class="pCard_text">
            <h2>Tshidiso Gumbo</h2>
            <p>ASA-20102305487</p>
        </div>

        <div class="pCard_add">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
        </div>
    </div>

    <div class="pCard_down">
        <div>
            <p>Joined</p>
            <p>09/20</p>
        </div>
        <div>
            <p>Expiry</p>
            <p>09/2021</p>
        </div>
        <div>
            <p>Province</p>
            <p>GP</p>
        </div>
    </div>

    <div class="pCard_back">
        <div class="pCard_back-content">
            <p>Plan</p>
            <small>Bronze - Free</small>
        </div>
        <div class="pCard_back-content">
        <p>Email</p>
        <small>sales@thrivebs.co.za</small>
        </div>
        
        <div class="pCard_back-content">
        <p>Phone</p>
        <small>081 493 8640</small>
        </div>

        <div class="pCard_back-content">
        <p>Voting Station</p>
        <small>Mosaledi Primary School</small>
        </div>
    </div>

</div>

<script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
<script src="{{ asset('js/pCard_script.js') }}"></script>
</body>

</html>
