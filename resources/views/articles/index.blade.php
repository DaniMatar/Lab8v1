
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
        <div class="content">
            <div class="title">Articles</div>

        </div>
    </div>
    <hr/>

    <li><a href="{{ url('/articles/create') }}">Create Article</a></li>


    @foreach($articles as $article)

        <article>

        <h2>


            <a href="{{ url ('/articles/'. $article->article_id )}}">{{$article->title}}</a> </h2>

            <div class="body" >{{$article->body}}</div>




        </article>


    @endforeach
</div>
    </body>
@stop
</html>
