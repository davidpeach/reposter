@extends('layouts.front.main')

@section('content')

<section class="section">
	
	<h2 class="title is-2">About me</h2>

	<div class="columns">
		
		<div class="column">
			
			<p>I am a web developer by trade - focussing primarily in PHP but with experience in HTML, CSS and JavaScript.</p>

			<p>My own time is spent improving my skills, maintaining my online projects and getting out and about with my lovely lady.</p>

		</div>

	</div>

</section>

<section class="section">

	<h2 class="title is-2">My active projects</h2>

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
				     	<p>Independent Entertainment Blog. </p>
				     	<p>Album, E.P. and song reviews; Artist interviews; Live venue write-ups.</p>
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
				        	<p class="title is-4">Chegalabonga</p>
				        	<p class="subtitle is-6"><a href="https://chegalabonga.com">https://chegalabonga.com</a></p>
				     	</div>
				    </div>

				    <div class="content">
				     	<p>My personal blog</p>
				     	<p>My own thoughts and opinions with no particular focus on specific topics.</p>
				    </div>
			  	</div>
			</div>
		</div>

	</div>
</section>

<section class="section">
		
	<h2 class="title is-2">Changelog</h2>

	<div class="notification is-warning">
        <p>Changelogs will soon be on their own page</p>        
    </div>

	<h3 class="title is-3">June 29th, 2017</h3>
	
	<h4 class="title is-4">davidpeach.co.uk</h4>

	<div class="content">
		<ul>
			<li>New landing page for davidpeach.co.uk uploaded.</li>
			<li>Changelog added.</li>
			<li>Website unfinished warning added.</li>
			<li>My active projects added.</li>
		</ul>
	</div>

	<h4 class="title is-4">chegalabonga.com</h4>
	
	<div class="content">
		<ul>
			<li>Posts from old davidpeach.co.uk WordPress site moved over</li>
		</ul>
	</div>

	<h4 class="title is-4">newthirtythree.com</h4>
	
	<div class="content">
		<ul>
			<li>Posts from old davidpeach.co.uk WordPress site moved over</li>
		</ul>
	</div>

</section>

@stop