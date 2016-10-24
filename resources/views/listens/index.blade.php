@extends('layouts.dashboard')

@section('title')
    Listens
@stop

@section('subtitle')
    all of my past listens
@stop

@section('breadcrump')
    <li><a href="/quantified/">Quantified</a></li>
    <li class="active">Listens</li>
@stop

@section('main')

<div class="box box-success">
    <div class="box-header">
        {!! $listens->render() !!}
    </div>
    <div class="box-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Song</th>
                    <th>Artist</th>
                    <th>Album</th>
                    <th>Listened on</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($listens as $listen)
                <tr>
                    <td>{{ $listen->song->title }}</td>
                    <td>{{ $listen->song->album->artist->name }}</td>
                    <td>{{ $listen->song->album->title }}</td>
                    <td>{{ $listen->listened_at->format('H:i (D dS M)') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop