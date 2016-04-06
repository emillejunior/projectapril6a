@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Article</div>

                <div class="panel-body">
                    {!! Form::open(array('url'=>'articles')) !!}
                    <div class="form-group">
                        {!! Form::label('title','Title: ') !!}  
                        {!! Form::text('title') !!}  
                    </div>
                    <div class="form-group">
                        {!! Form::label('body','Body: ') !!}  
                        {!! Form::textarea('body') !!}  
                    </div>
                    <div class="form-group">
                        {!! Form::label('category','Category: ') !!}  
                        {!! Form::select('category_id', 
                            array(
                                '1'=>'Olahraga',
                                '2'=>'Politik',
                                '3'=>'Hiburan',
                                '4'=>'Otomotif'
                            )
                        ) !!}
                    </div>
                    {!! Form::submit('Save Article') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
