
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
            <h1><div class="title">{{$page->page_name}}</div></h1>

        </div>
    </div>
    <hr/>



    <article>

        <h1><div class="title">{{$page->page_name}}</div></h1>
        <div class="body" >{{$page->page_id}}</div>




    </article>


    {{--@unless ($article->tags->isEmpty())--}}
    {{--<h5>Tags:</h5>--}}
    {{--<ul>--}}
    {{--@foreach ($article->tags as $tag)--}}

    {{--<li>{{$tag -> name }}</li>--}}


    {{--@endforeach--}}

    {{--</ul>--}}
    {{--@endunless--}}

    </body>










    <form action="<?php echo $page-> page_id?>/edit/">
        <input type="submit" value="Edit Page">
    </form>





    {!! Form::open([
    'method' => 'DELETE',
    'route' => ['webpages.destroy', $page->page_id]
    ]) !!}
    {!! Form::submit('Delete this Page?', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}



@stop



</html>
