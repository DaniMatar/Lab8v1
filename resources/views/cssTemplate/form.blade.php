

<div class="form-group">
    {!! Form::label('name','Name: ') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description','Description: ') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('active','Active: ') !!}
    {!! Form::select('active', array('Y' => 'Yes', 'N' => 'No'))!!}
</div>
<div class="form-group">
    {!! Form::label('content','Css Content: ') !!}
    {!! Form::textarea('content',null,['class'=>'form-control']) !!}
</div>





<div class="form-group">

    {!! Form::submit($submitButton,['class'=>'btn btn-primary form-control']) !!}
</div>

@section('footer')

    <script>
        $('#tag_list').select2({placeholder:'chose tag',tags:true});
    </script>
@endsection