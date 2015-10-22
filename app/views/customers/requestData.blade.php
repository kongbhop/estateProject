
{{ Form::open(array('url' => 'contact', 'class' => ''))}}

	<h4>Request Data</h4>
	
	<div>
		{{Form::label('firstname', 'Firstname')}}
		{{Form::text('firstname', null)}}
	</div>

	<div>
		{{Form::label('lastname', 'Lastname')}}
		{{Form::text('lastname', null)}}
	</div>
	
	<div>
		{{Form::label('email','Email')}}
		{{Form::text('email', null)}}
	</div>
	
	<div>
		{{Form::label('mobile','Mobile')}}
		{{Form::text('mobile', null)}}
	</div>

	<div>
		{{Form::label('description','Description')}}
		{{Form::textarea('description', null)}}
	</div>

	<div>
		<button type="submit" name="action">
			submit
		</button>
	</div>

{{ Form::close() }}
