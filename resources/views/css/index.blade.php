
@extends ('pages.app')

<html>
<head>
    <title>CSS Template</title>

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
            <div class="title">CSS Template</div>

        </div>
    </div>
    <hr/>

    <li><a href="{{ url('/areas/create') }}">Create CSS </a></li>


    @foreach($CSSs as $CSS)

        <article>

        <h2>


            <a href="{{ url ('/css/show', $$CSS->id)}}">{{$$CSS->title}}</a> </h2>

            <div class="body" >{{$$CSS->body}}</div>




        </article>

</div>
    @endforeach

    </body>
@stop
</html>
