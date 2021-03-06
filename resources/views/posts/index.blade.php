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

<div class="box box-success">
    <div class="box-header">
        {!! $posts->render() !!}
    </div>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>URL</th>
                    <th>Published At</th>
                    <th>Upcoming Schedule</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->url }}</td>
                    <td>{{ $post->published_at }}</td>
                    <td><a href="{{ route('posts.messages.index', $post->id) }}">{{ $post->unsentMessages()->count() }} / {{ $post->messages()->count() }}</a></td>
                    <td><a href="{{ route('posts.edit', [$post->id]) }}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="box-footer">
        {!! $posts->render() !!}
    </div>
</div>

@stop