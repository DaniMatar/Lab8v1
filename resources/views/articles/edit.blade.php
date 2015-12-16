@extends ('pages.app')


@section('content')


    <h1>Edit: {!!$article->title  !!}</h1>


    {!! Form::model($article, ['method' => 'PATCH','route' =>['articles.update', $article->article_id]]) !!}


    @include('articles.form' , ['submitButtonText' => 'Update Article'])

    {!! Form::close() !!}


 @include('errors.list')
@stop