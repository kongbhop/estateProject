{{ Form::open(array('url' => 'login', 'method' => 'post')) }}
<!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
				 
<div>
	<h4>เข้าสู่ระบบ</h4>
</div>

<div>
	<div>
	{{ Form::label('username', 'Username') }}
	{{ Form::text('username', null) }}
	</div>
</div>

<div>
	<div>
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password', null) }}
	</div>
</div>

<button type="submit" name="action">
	เข้าสู่ระบบ
</button>
{{ Form::close() }}
