
@extends ('pages.app')

<html>
<head>
    <title>Laravel</title>

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
            <h1><div class="title">{{$Area->title}}</div></h1>

        </div>
    </div>
    <hr/>



        <article>


            <div class="body" >{{ $Area->body}}</div>




        </article>



    </body>









    <form action="<?php echo  $Area-> area_id?>/edit/">
        <input type="submit" value="Edit Article">
    </form>




    {!! Form::open([
    'method' => 'DELETE',
    'route' => ['areas.destroy',  $Area->area_id]
    ]) !!}
    {!! Form::submit('Delete this  Area?', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}



@stop



</html>
