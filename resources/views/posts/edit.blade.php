
@extends('layout.app')
@section('content')
<div class="ScrollStyle-hor">
    <div class="text-right">
        <a href='/ghost/public/post' class='btn-default'>Go Back</a>
    </div>
<h1>Edit</h1>
    {!!  Form::open(['action' =>['PostsController@update', $post->id]'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Regarding:') }}
            {{ Form::text('title',$post->title,['class' => 'form-control', 'placeholder' => "Customer's Name"]) }}
        </div><br>
        <div class="form-group">
                {{ Form::label('body', 'Remarks:') }}
                {{ Form::textarea('body',$post->body,['class' => 'form-control', 'placeholder' => "Remark 1:"]) }}
        </div>
        {{ Form::hidden('_method','PUT') }}
        {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection


