
@extends('layout.app')
@section('content')
    <div class="text-right">
    <a href='/ghost/public/post' class='btn-default'>Go Back</a>
    </div>
    <div>
    <h3 >{{ $post->title }}</h3>
    </div>
    <br />&nbsp;<br />
    <div>
        {{ $post->body }}

    </div>
    <hr>
    <small>Written on {{ $post->created_at }}</small>
    <hr>
    <a href="/posts/{{ $post->id }}/edit"  class=" btn btn-default">Edit</a>
            <div class="ScrollStyle-hor">

@endsection


