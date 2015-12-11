@extends ('pages.app')


@section('content')


    <h1>Edit: {!!$Area->title  !!}</h1>


    {!! Form::model( $Area, ['method' => 'PATCH','route' =>['areas.update',  $Area->id]]) !!}


    @include('areas.form' , ['submitButtonText' => 'Update  Area'])

    {!! Form::close() !!}


 @include('errors.list')
@stop