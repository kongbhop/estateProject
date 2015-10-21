{{ Form::open(array('url' => 'login', 'method' => 'post')) }}
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
