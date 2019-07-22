
@extends('layout.app')
@section('content')
<div class="ScrollStyle-hor">
    <div class="text-right">
        <a href='/ghost/public/post' class='btn-default'>Go Back</a>
    </div>
    <div><br>
        <h4>
            We are happy to take all remarks and answer any questions that you may have.
            Just send us a message in the form below.
        </h4>
    </div><br>
    {!!  Form::open(['action' =>'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Regarding:') }}
            {{ Form::text('title','',['class' => 'form-control', 'placeholder' => "Customer's Name"]) }}
        </div><br>
        <div class="form-group">
                {{ Form::label('body', 'Remarks:') }}
                {{ Form::textarea('body','',['class' => 'form-control', 'placeholder' => "Remark 1:"]) }}
        </div>
        {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection


