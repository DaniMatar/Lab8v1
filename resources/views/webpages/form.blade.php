

<div class="form-group">
    {!! Form::label('page_name','Name: ') !!}
    {!! Form::text('page_name',null,['class'=>'form-control']) !!}
</div>



<div class="form-group">
    {!! Form::label('active','Active: ') !!}
    {!! Form::select('active', array('Y' => 'Yes', 'N' => 'No'))!!}
</div>








<div class="form-group">


    {!! Form::submit( $submitButtonText , ['class'=> 'btn btn-primary form-control']) !!}


</div>

{{--@section('footer')--}}

    {{--<script>--}}
        {{--$('#tag_list').select2({placeholder:'chose tag',tags:true});--}}
    {{--</script>--}}
{{--@endsection--}}