@extends('layouts.app')

@section('content')
<div class="w-8/12 bg-white p-6 rounded-lg mb-14">
    @if ($posts->count())
    @foreach ($posts as $post)
    <div class="border border-gray-200 rounded mb-4 px-6 py-4">
        <x-post :post='$post' />
    </div>
    @endforeach
    @else
    there is no posts
    @endif
</div>
@endsection