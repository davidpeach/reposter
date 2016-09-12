@extends('layouts.dashboard')

@section('title')
    Add a custom message
@stop

@section('subtitle')
    Schedule a new custom message
@stop

@section('breadcrump')
    <li><a href="/messenger/">Messenger</a></li>
    <li><a href="/messenger/messages/">Messages</a></li>
    <li class="active">Custom Message</li>
@stop

@section('main')
	
	<div class="box box-info">
		
		<form method="POST" action="{{ route('messages.storeCustomMessage') }}">
			<div class="box-body">
				
				{!! csrf_field() !!}

				<div class="form-group">
		            <label>Message Content</label>
		            <textarea class="form-control" name="message_content" rows="3" placeholder="Enter ..."></textarea>
		        </div>

	        </div>

	        <div class="box-footer">
	        	<button type="submit" class="btn btn-info pull-right">Save</button>
	    	</div>
		</form>

	</div>

	

@stop