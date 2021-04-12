@extends('layouts.app')
@section('content')
    <form action="/posts" method="post" class="justify-between mx-20">
        @csrf
        <input type="text" name="title" class="bg-gray-100 rounded-lg border-gray-150 m-2"><br>
        <textarea name="posts" id="" cols="80" rows="10" class="bg-gray-100 rounded-lg m-2 border-gray-150"></textarea><br>
        <button type="submit" class="bg-blue-800 py-4 px-8 rounded-lg text-gray-50 shadow-lg uppercase text-lg font-semibold">Submit</button>
    </form>
@endsection
