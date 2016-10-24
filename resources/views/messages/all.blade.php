@extends('layouts.dashboard')

@section('title')
    All Scheduled Messages
@stop

@section('subtitle')
    All messages to go out, in order
@stop

@section('breadcrump')
    <li><a href="/messenger/">Messenger</a></li>
    <li class="active">Messages</li>
@stop

@section('main')

<div class="box box-success">

    <div class="box-header">
        {!! $messages->render() !!}
    </div>

    <div>
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
    </div>

    <div class="box-footer">
        {!! $messages->render() !!}
    </div>

</div>
@stop