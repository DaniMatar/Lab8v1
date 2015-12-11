@extends ('pages.app')


@section('content')


    <h1>Edit: {!! $Area->title  !!}</h1>


    {!! Form::model( $Area, ['method' => 'DELETE','route' =>['areas.destroy',  $Area->id]]) !!}


    @include('areas.form' , ['submitButtonText' => 'Delete  Area'])

    {!! Form::close() !!}


    @include('errors.list')
@stop