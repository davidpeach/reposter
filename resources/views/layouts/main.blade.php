<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <meta name="google-site-verification" content="xnMiSlceNBtxCm5qO6XWMYZgeWI28aeIPQ8JtkA6L00" />
        <title>Reposter</title>
    </head>
    <body>
        <div class="container">
            <h1>Reposter</h1>
            <nav class="navbar">
                <a href="{{ route('messages.index') }}">All Messages</a> |
                <a href="{{ route('posts.index') }}">All Posts</a> |
                <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            </nav>
            @yield('main')
        </div>


        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </body>
</html>