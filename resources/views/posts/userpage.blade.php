@extends('layouts.app')
@section('content')
@forelse ($posts as $post)
    <div class="p-2">
    <h1 class="text-xl">
        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
    </h1>
    <p>Created By: {{$post->user->name}}</p>
</div>
@empty
    {{"No post yet"}}
@endforelse
@endsection
