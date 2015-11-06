<!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
         

{{ Form::open(array('url' => 'createUser', 'class' => ''))}}
    <div class="container">
        <h4 class="row">register</h4>

        <div class="row">
            {{Form::label('username', 'Username')}}
            {{Form::text('username', null)}}
        </div>
        <div class="row">
            {{Form::label('password', 'Password')}}
            {{Form::password('password', null)}}
        </div>

        <div class="row">
            <button class="waves-effect waves-light btn" type="submit" name="action">
                create
            </button>
        </div>
    </div>
{{ Form::close() }}
