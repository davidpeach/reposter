<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <div class="container">

            <div class="notification is-warning">
                <p>My websites are currently in a state of minor flux. This is my new landing page, which links out to my online projects.</p>
                <p>Old posts have been moved between my two blogs.</p>
                <p><strong>This page is currently being built and as such may currently appear unfinished</strong>.</p>
            </div>

            <div class="section">
                <div class="columns">
                    <div class="column">
                        <h1 class="title is-1">David Peach</h1>
                        <p>Welcome to my website. My online projects can by reached below. Thanks for visiting.</p>
                    </div>
                </div><!-- .columns -->
            </div>
        </div>

        <main class="container">

            @yield('content')

        </main>

    </div>

    <footer class="footer">
        <div class="container">
            <p>Thank you for stopping by.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
