<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="/favicon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="/css/admin.css">

    <script src="/js/jquery/jquery-2.2.4.min.js"></script>

    <script src="/js/bootstrap/popper.min.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


    <script src="/js/geral.js"></script>


</head>
<body class="font-sans antialiased">
@extends('adminlte::page')
<main>
    {{ $slot }}
</main>

<div id="loadingOverlay">
    <div class="spinner-border text-light" role="status">
        <span class="visually-hidden"></span>
    </div>
</div>

<script>
    $(document).ready(function () {
        @if(session('type'))
        showNotification('{{ session('message') }}', '{{ session('type') }}');
        @endif
    });
</script>

</body>
</html>
