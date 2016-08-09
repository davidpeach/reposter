@extends('layouts.main')

@section('main')
<form action="{{ route('posts.store') }}" method="POST">

    {!! csrf_field() !!}

    <div class="form-group">
        <label for="title">The Post Title</label>
        <input class="form-control" type="text" name="title" id="title" placeholder="The Post Title">
    </div>

    <div class="form-group">
        <label for="url">The Full URL to schedule for resharing </label>
        <input class="form-control" type="url" name="url" id="url" placeholder="https://chegalabonga.com/2016/08/09/the-post-slug">
    </div>

    <div class="form-group">
        <label for="hashtags">Hashtags</label>
        <input class="form-control" type="text" name="hashtags" id="hashtags" placeholder="tagone, tagtwo, tagthree">
        <p class="help-block">A comma-separated list of hashtags</p>
    </div>

    <div class="form-group">
        <button type="submit">Schedule</button>
    </div>
</form>
@stop
