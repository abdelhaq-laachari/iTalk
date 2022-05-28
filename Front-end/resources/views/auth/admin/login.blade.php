@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-semibold my-9 mx-auto text-center">Login As Admin</h1>
 <div class="flex justify-center">
  <div class="w-4/12 bg-white p-6 rounded-lg">
   @if (session('status'))
   <div class="bg-red-500 p-4 rounded-lg text-white text-center mb-4">
    {{session('status')}}
   </div>
   @endif
   {{-- //////////////////////////////////////////////// --}}
   <form action="{{ route('login') }}" method="POST">
    @csrf
   
    {{-- //////////////////////////////////// --}}
    <div class="mb-4">
     <label class="sr-only" for="email">email</label>
     <input 
     type="email" name="email" id="email" placeholder=" email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">
    </div>
    @error('email')
       <div class="text-red-500 my-3">
        {{ $message }}
       </div>
    @enderror
    {{-- //////////////////////////////////// --}}
    <div class="mb-4">
     <label class="sr-only" for="password">password</label>
     <input 
     type="password" name="password" id="password" placeholder="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror"">
    </div>
    @error('password')
       <div class="text-red-500 my-3">
        {{ $message }}
       </div>
     @enderror
    <div>
     <button type="submit" class="bg-blue-500 w-full px-4 py-3 rounded font-medium text-white ">
      login
     </button>
    </div>
   </form>
  </div>
 </div>
@endsection