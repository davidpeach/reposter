@extends('layouts.dashboard')

@section('title')
    Messages for {{ $post->title }} Post
@stop

@section('subtitle')
    Schedule messages for this post
@stop

@section('breadcrump')
    <li><a href="/messenger/">Messenger</a></li>
    <li><a href="/messenger/posts/">Posts</a></li>
    <li><a href="/messenger/posts/27/">{{ $post->title }}</a></li>
    <li class="active">Messages</li>
@stop

@section('main')

    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Schedule Future Messages</h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('messages.store') }}" method="POST">
                        {!! csrf_field() !!}

                        <input type="hidden" name="post_id" value="{{ $post->id }}">

                        <fieldset class="row">
                            @foreach($intervals as $value => $label)
                            <div class="col-md-6">
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
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Current Messages Due for <strong>{{ $post->title }}</strong></h3>
                </div>
                <div class="box-body">
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
                </div>
            </div>
        </div>
    </div>
@stop