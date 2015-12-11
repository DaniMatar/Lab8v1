
@extends ('pages.app')

<html>
<head>
    <title>Create CSS Template</title>

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
            <div class="title">Create CSS </div>
            <hr/>

        </div>
    </div>
    <hr/>

    {!! Form::open(['url' => 'CSS']) !!}

    @include('css.form' , ['submitButtonText' => 'Add CSS Template'])


    {!! Form::close() !!}


    @include('errors.list')

    </body>
@stop
</html>
