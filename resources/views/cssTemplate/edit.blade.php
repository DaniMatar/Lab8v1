@extends ('pages.app')


@section('content')


    <h1>Edit: {!!$article->title  !!}</h1>


    {!! Form::model($page, ['method' => 'PATCH','route' =>['webpages.update', $page->id]]) !!}


    @include('webpages.form' , ['submitButtonText' => 'Update Pages'])

    {!! Form::close() !!}


    @include('errors.list')
@stop