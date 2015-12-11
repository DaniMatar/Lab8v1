
@extends ('pages.app')

<html>
<head>
    <title>Create Area</title>

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
            <div class="title">Create Area</div>
            <hr/>

        </div>
    </div>
    <hr/>

  {!! Form::open(['url' => 'areas']) !!}

    @include('areas.form' , ['submitButtonText' => 'areas'])


    {!! Form::close() !!}


    @include('errors.list')

    </body>
@stop
</html>
