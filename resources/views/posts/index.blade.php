
@extends('layout.app')
@section('content')
    <h1>Customer Remarks</h1>
    <div class="text-right">
            <a href='/ghost/public/post/create' class='btn L1 btn-primary'>Write Remark</a>
        </div>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <br>
            <div class="well" class="list-group">
                <h5 class = "list-group-item">
                    <a href='/ghost/public/post/{{ $post->id }}'>{{ $post->title }}</a>
                    <br><br>
                    <ul style="list-style-type:disc;">
                        <small><li><a href='/ghost/public/post/{{ $post->id }}'>{{ $post->body }}</a></li><small>
                    </ul>
                    <br />&nbsp;<br /> <br />&nbsp;<br />
                    <small>Written on {{ $post->created_at }}</small>
                    </h5>
            </div>
        @endforeach
        {{ $posts-> links() }}
    @else
        <p>No Posts Found.</p>
    @endif
    <div class="ScrollStyle-hor">


@endsection


