@extends('layouts.main')

@section('main')

<h2>All Posts</h2>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>URL</th>
            <th>Published At</th>
            <th>Upcoming Schedule</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->url }}</td>
            <td>{{ $post->published_at }}</td>
            <td><a href="{{ route('posts.messages.index', $post->id) }}">??</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop