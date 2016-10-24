@extends('layouts.dashboard')

@section('title')
    All Posts
@stop

@section('subtitle')
    Blog posts that should be retweeted
@stop

@section('breadcrump')
    <li><a href="/messenger/">Messenger</a></li>
    <li class="active">Posts</li>
@stop

@section('main')


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
            <td><a href="{{ route('posts.messages.index', $post->id) }}">{{ $post->unsentMessages()->count() }} / {{ $post->messages()->count() }}</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop