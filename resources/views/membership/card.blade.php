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
            <h2>Tshidiso Gumbo</h2>
            <p>ASA-20102305487</p>
        </div>

        <div class="pCard_add"><i class="fa fa-plus"></i></div>
    </div>

    <div class="pCard_down">
        <div>
            <p>Joined</p>
            <p>10/22</p>
        </div>
        <div>
            <p>Expiry</p>
            <p>10/2021</p>
        </div>
        <div>
            <p>Province</p>
            <p>GP</p>
        </div>
    </div>

    <div class="pCard_back">
        <p>Plan - Bronze</p>
        <p>Email - sales@thrivebs.co.za</p>
        <p>Phone - 081 493 8640</p>
        <p>Voting Station - Mosaledi Primary School</p>
    </div>

</div>

<script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
<script src="{{ asset('js/pCard_script.js') }}"></script>
</body>

</html>
