<!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
         

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
