@extends ('pages.app')

<html>
<head>
    <title>Search Articles</title>

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
        <div class="title">Search Articles</div>
        <hr/>

    </div>
</div>
<hr/>


@if (count($articles) === 0)
    ... html showing no articles found
@elseif (count($articles) >= 1)
    ... print out results
    @foreach($articles as $article)
        print article
    @endforeach
@endif




@include('errors.list')

</body>
@stop





</html>
