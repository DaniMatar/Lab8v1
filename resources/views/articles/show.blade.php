
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
            <h1><div class="title">{{$article->title}}</div></h1>

        </div>
    </div>
    <hr/>


        <article>


            <div class="body" >{{$article->body}}</div>




        </article>




    </body>
@stop
</html>
