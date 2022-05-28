@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
     <div class="w-8/12">

      
      <div class="p-6 bg-gray-100 rounded-lg mb-4 w-8/12">
      <h1 class="text-2xl font-medium mb-1">{{ $user->name }}</h1>
      <p>Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and received {{ $user->receivedLikes->count() }} {{ Str::plural('like', $user->receivedLikes->count()) }}</p>
     </div>
     
     
     
     
     <div class="w-8/12 bg-white p-6 rounded-lg mb-16">
       @if ($posts->count())
       @foreach ($posts as $index => $post)
       
       @if($index > 0)
       <hr class="my-3">
       @endif
       <x-post :post='$post' />
       @endforeach
        @else
        <p>{{ $user->name}} does not have any posts</p>
        @endif
       </div>
       
      </div>
      </div>
@endsection