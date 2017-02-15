<link rel="stylesheet" href="/css/front.css">

<div class="wrapper">

    <h1>David Peach's Feed</h1>

    <p><a href="https://davidpeach.co.uk">Go to my main website</a></p>

    <nav>
        {!! $notes->render() !!}
    </nav>

    @foreach($notes as $note)

        <article class="note">
            {!! $note->present()->content !!}
        </article>

    @endforeach
    <nav>
        {!! $notes->render() !!}
    </nav>

</div>