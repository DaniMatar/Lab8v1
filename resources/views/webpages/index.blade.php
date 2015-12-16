
@extends ('pages.app')

<html>
<head>
    <title>Pages</title>

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


    @foreach($pages as $page)

        <article>

            <h2>


                <a href="{{ url ('/webpages',$page-> page_id)}}">{{$page->page_name}}</a> </h2>

            <div class="body" >{{ $page-> page_id}}</div>




        </article>


    @endforeach

    </body>
@stop
</html>
