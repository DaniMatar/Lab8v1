
@extends ('pages.app')

<html>
<head>
    <title>Areas</title>

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
        <div class="content">
            <div class="title">Areas</div>

        </div>
    </div>
    <hr/>

    <li><a href="{{ url('/areas/create') }}">Create Area</a></li>


    @foreach($areas as $Area)

        <article>

        <h2>


            <a href="{{ url ('/areas/show', $Area->id)}}">{{$Area->title}}</a> </h2>

            <div class="body" >{{$Area->body}}</div>




        </article>

</div>
    @endforeach

    </body>
@stop
</html>
