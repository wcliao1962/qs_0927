<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel 快速入門 - 基本</title>

    <!-- CSS 及 JavaScript -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>

<body id="app-layout">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Task List
            </a>
        </div>

    </div>
</nav>

@yield('content')

<!-- JavaScripts -->

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>