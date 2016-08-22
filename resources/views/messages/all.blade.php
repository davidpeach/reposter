@extends('layouts.main')

@section('main')
    <h2>All Scheduled Messages</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Post Title</th>
                <th>Url</th>
                <th>Scheduled For</th>
                <th>Till then</th>
                <th>Sent?</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
            <tr>
                <td>{{ $message->post->title }}</td>
                <td>{{ $message->post->url }}</td>
                <td>{{ $message->scheduled_for->format('D jS M, Y') }}</td>
                <td>{{ $message->scheduled_for->diffForHumans() }}</td>
                <td>{{ $message->sent }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@stop