@extends('layouts.front.main')

@section('content')

<section class="section">

	<h1 class="title is-1">My active projects</h1>

	<div class="columns">

		<div class="column is-one-third">
			<div class="card">
	  			<div class="card-image">
	    			<figure class="image is-4by3">
	      				<img src="/img/Du-Blonde.jpg" alt="Image">
	    			</figure>
	  			</div>
			  	<div class="card-content">
				    <div class="media">
				      	<div class="media-left">
				        	<figure class="image is-48x48">
				          		<img src="http://bulma.io/images/placeholders/96x96.png" alt="Image">
				        	</figure>
				      	</div>
				      	<div class="media-content">
				        	<p class="title is-4">New Thirty Three</p>
				        	<p class="subtitle is-6"><a href="https://newthirtythree.com">https://newthirtythree.com</a></p>
				     	</div>
				    </div>

				    <div class="content">
				     	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				      	Phasellus nec iaculis mauris. <a>@bulmaio</a>.
				      	<a>#css</a> <a>#responsive</a>
				      	<br>
				      	<small>11:09 PM - 1 Jan 2016</small>
				    </div>
			  	</div>
			</div>
		</div>

		<div class="column is-one-third">
			<div class="card">
	  			<div class="card-image">
	    			<figure class="image is-4by3">
	      				<img src="/img/tomb-raider.jpg" alt="Image">
	    			</figure>
	  			</div>
			  	<div class="card-content">
				    <div class="media">
				      	<div class="media-left">
				        	<figure class="image is-48x48">
				          		<img src="http://bulma.io/images/placeholders/96x96.png" alt="Image">
				        	</figure>
				      	</div>
				      	<div class="media-content">
				        	<p class="title is-4">My personal blog</p>
				        	<p class="subtitle is-6"><a href="https://chegalabonga.com">https://chegalabonga.com</a></p>
				     	</div>
				    </div>

				    <div class="content">
				     	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				      	Phasellus nec iaculis mauris. <a>@bulmaio</a>.
				      	<a>#css</a> <a>#responsive</a>
				      	<br>
				      	<small>11:09 PM - 1 Jan 2016</small>
				    </div>
			  	</div>
			</div>
		</div>

	</div>
</section>

@stop