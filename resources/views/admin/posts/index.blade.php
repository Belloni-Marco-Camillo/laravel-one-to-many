@extends('layouts.admin')

@section('content')
    <div class="card_post d-flex flex-wrap container">
        @foreach ($posts as $post)
        <div class="text-center col-3">
            <p>{{$post['title']}}</p>
            <a href="{{route('admin.posts.show', $post->id)}}"><img class="img-fluid" src="{{$post['cover_img']}}" alt="{{$post['title']}}"></a>
        </div>
        @endforeach
        <a class="btn" href="{{route('admin.posts.create')}}">crea post</a>
    </div>
@endsection