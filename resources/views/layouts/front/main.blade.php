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
            <div class="section">
                <div class="columns">
                    <div class="column">
                        <div class="card">
                          {{-- <div class="card-image">
                            <figure class="image is-4by3">
                              <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">
                            </figure>
                          </div> --}}
                          <div class="card-content">
                            <div class="media">
                              <div class="media-left">
                                <figure class="image is-48x48">
                                  <img src="https://placecage.com/75/75" alt="Image">
                                </figure>
                              </div>
                              <div class="media-content">
                                <p class="title is-4">David Peach</p>
                                <p class="subtitle is-6">Writer | Web Developer | Bedroom grime artist</p>
                              </div>
                            </div>

                            <div class="content">
                                <p>Welcome to my personal website. From here you can find links to everything I have online.</p>
                                <p>I am a Web Developer by trade - working primarily in PHP, but also spend a lot of time writing on one of my own blogs.</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div><!-- .columns -->
            </div>
        </div>

        {{-- <div class="container">
            <nav class="nav">
                <div class="nav-left">
                    <a class="nav-item">
                        David Peach
                    </a>
                    <a class="nav-item" href="/">
                        Home
                    </a>

                    <a class="nav-item" href="https://chegalabonga.com">
                        Blog
                    </a>
                </div>
                
            </nav>
        </div> --}}


        <main class="container">

            @yield('content')

        </main>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
