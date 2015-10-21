{{ Form::open(array('url' => 'createUser', 'class' => ''))}}

    <h4>register</h4>

    <div>
        <div>
            {{Form::label('username', 'Username')}}
            {{Form::text('username', null)}}
        </div>
        <div>
            {{Form::label('password', 'Password')}}
            {{Form::password('password', null)}}
        </div>
    </div>

    <div>
        <button type="submit" name="action">
            create
        </button>
    </div>

{{ Form::close() }}