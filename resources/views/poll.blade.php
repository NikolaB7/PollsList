<h1>Enter poll:</h1>

    {{ Form::open(array('url' => 'poll')) }}
    {{ Html::ul($errors->all()) }}

    {{ Form::label('question', 'Question:') }}
    {{ Form::text('question', Request::old('question'), array('class' => 'form-control')) }}<br>
    {{ Form::label('answer1', 'Answer 1:') }}
    {{ Form::text('answer1', Request::old('answer1'), array('class' => 'form-control')) }}<br>
    {{ Form::label('answer2', 'Answer 2:') }}
    {{ Form::text('answer2', Request::old('answer2'), array('class' => 'form-control')) }}<br>
    {{ Form::label('answer3', 'Answer 3:') }}
    {{ Form::text('answer3', Request::old('answer3'), array('class' => 'form-control')) }}<br>
    {{ Form::label('answer4', 'Answer 4:') }}
    {{ Form::text('answer4', Request::old('answer4'), array('class' => 'form-control')) }}<br>
    {{ Form::label('answer5', 'Answer 5:') }}
    {{ Form::text('answer5', Request::old('answer5'), array('class' => 'form-control')) }}<br>
    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}