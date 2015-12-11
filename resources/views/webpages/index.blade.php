
@extends ('pages.app')

<html>
<head>
    <title>Articles</title>

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
            <div class="title">Pages</div>

        </div>
    </div>
    <hr/>

    <li><a href="{{ url('/webpages/create') }}">Create Page</a></li>


    @foreach($pages as $Webpage)

        <article>

            <h2>


                <a href="{{ url ('/articles',$Webpagee->id)}}">{{$Webpage->title}}</a> </h2>

            <div class="body" >{{$Webpage->body}}</div>




        </article>


    @endforeach

    </body>
@stop
</html>
