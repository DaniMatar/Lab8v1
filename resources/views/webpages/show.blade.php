
@extends ('pages.app')

<html>
<head>
    <title><div class="title">{{$page->page_name}}</div></title>

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


    @unless ($article->tags->isEmpty())
        <h5>Tags:</h5>
        <ul>
            @foreach ($article->tags as $tag)

                <li>{{$tag -> name }}</li>


            @endforeach

        </ul>
    @endunless

    </body>




