@extends ('pages.app')


@section('content')


    <h1>Edit: {!!$article->title  !!}</h1>


    {!! Form::model($article, ['method' => 'DELETE','route' =>['articles.destroy', $article->article_id]]) !!}


    @include('articles.form' , ['submitButtonText' => 'Delete Article'])

    {!! Form::close() !!}


    @include('errors.list')
@stop