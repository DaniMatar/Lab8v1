
@extends ('pages.app')

<html>
<head>
    <title>Create Article</title>

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>


        .title {
            font-size: 50px;
            margin-bottom: 20px;
        }


    </style>
</head>

@section('content')

    <body>
    <div class="container">
        <div class="content">
            <div class="title">Write a New Article</div>
            <hr/>

        </div>
    </div>
    <hr/>

  {!! Form::open(['url' => 'articles']) !!}

    <div class ="form-group">

    {!! Form::label('title', 'Title: ') !!}

    {!! Form::text('title', null, ['class'=> 'form-control']) !!}

    </div>

    <div class ="form-group">

        {!! Form::label('body', 'Body: ') !!}

        {!! Form::textarea('body', null, ['class'=> 'form-control']) !!}

    </div>



    <div class ="form-group">

        {!! Form::submit('Add Article', ['class'=> 'btn btn-primary form-control']) !!}



    </div>


    <div class ="form-group">

        {!! Form::label('published_at', 'Published on: ') !!}

        {!! Form::input('date','published_at', date('Y-m-d'), ['class'=> 'form-control']) !!}

    </div>


    {!! Form::close() !!}

    </body>
@stop
</html>
