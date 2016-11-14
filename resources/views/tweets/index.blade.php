@extends('layouts.dashboard')

@section('title')
    Tweets
@stop

@section('subtitle')
    pulled in via Twitter REST API
@stop

@section('breadcrump')
    <li><a href="/tweets/">Tweets</a></li>
    <li class="active">All</li>
@stop

@section('main')

<div class="box box-success">
    <div class="box-header">
        {!! $tweets->render() !!}
    </div>
    <div class="box-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>How long ago</th>
                    <th>Content</th>
                    <th>Date / Time</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($tweets as $tweet)
                <tr>
                    <td>{{ $tweet->timestamp->diffForHumans() }}</td>
                    <td>{{ $tweet->content }}</td>
                    <td>{{ $tweet->timestamp->format('jS F Y') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer">
        {!! $tweets->render() !!}
    </div>
</div>

@stop