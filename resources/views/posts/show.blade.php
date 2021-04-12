@extends('layouts.app')
@section('content')
<div class="p-2">
    <h1 class="text-xl">
        {{$post->title}}
    </h1>
    <p>{{$post->content}}</p>
</div>
@auth
@if (auth()->user()->id==$post->user->id)

<a href="{{$post->id}}/edit">Edit</a>
<form action="/posts/{{$post->id}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">
    Delete
</button>
</form>
@else

@endif
@endauth
@endsection
