@extends('layouts.dashboard')

@section('title')
    New Post
@stop

@section('subtitle')
    Manually add a new post that should be reposted
@stop

@section('breadcrump')
    <li><a href="/messenger/">Messenger</a></li>
    <li><a href="/messenger/posts/">Posts</a></li>
    <li class="active">New Post</li>
@stop

@section('main')

    <div class="row">
        <div class="col-md-6">
            <div class="box box-success">
                <form action="{{ route('posts.store') }}" method="POST" class="box-body">

                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="title">The Post Title</label>
                        <input class="form-control" type="text" name="title" id="title" placeholder="The Post Title">
                    </div>

                    <div class="form-group">
                        <label for="url">The Full URL to schedule for resharing </label>
                        <input class="form-control" type="url" name="url" id="url" placeholder="https://davidpeach.co.uk/2016/08/09/the-post-slug">
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
            </div>
        </div>
    </div>
</div>
@stop
