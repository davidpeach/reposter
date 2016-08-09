@extends('layouts.main')

@section('main')
    <h2>Messages for {{ $post->title }} Post</h2>

    <p>Schedule messages for this post</p>

    <form action="{{ route('messages.store') }}" method="POST">
        {!! csrf_field() !!}

        <input type="hidden" name="post_id" value="{{ $post->id }}">

        <fieldset class="row">
            @foreach($intervals as $value => $label)
            <div class="col-md-2">
            <div class="form-group checkbox">
                <label for="{{ $value }}">
                    <input type="checkbox" name="intervals[]" value="{{ $value }}" id="{{ $value }}" checked>
                    {{ $label }}
                </label>
            </div>
            </div>
            @endforeach
        </fieldset>

        <button type="submit">Schedule Now</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Post Title</th>
                <th>Scheduled For</th>
                <th>Till then</th>
                <th>Sent?</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($post->messages as $message)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $message->scheduled_for->format('D jS M, Y') }}</td>
                <td>{{ $message->scheduled_for->diffForHumans() }}</td>
                <td>{{ $message->sent }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@stop