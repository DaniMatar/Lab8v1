
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

    <li><a href="{{ url('/css/create') }}">Create CSS </a></li>


    @foreach($css as $CSS)

        <article>

        <h2>


            <a href="{{ url ('/css/show', $$CSS->css_id)}}">{{$$CSS->css_name}}</a> </h2>

            <div class="body" >{{$$CSS->content}}</div>




        </article>

</div>
    @endforeach

    </body>
@stop
</html>
