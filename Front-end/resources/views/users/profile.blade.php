@extends('layouts.app')

@section('content')
    <div class="flex justify-center mb-20">
     <div class="w-8/12 bg-white p-6 rounded-lg">
       <h1 class="text-xl text-center font-semibold mb-5">View Or Edit Profile</h1>
       <form action="{{ route('Profile.edit', $users->id) }}" method="POST" class=" bg-white flex flex-col gap-2 rounded-lg">
        @csrf
        <div class="w-96 flex items-center justify-between mx-auto">
         <label for="name" class="whitespace-nowrap">Full Name</label>
        <input placeholder="name" value="{{ $users->name }}" class="bg-gray-200 border border-gray-300 focus:outline-none rounded px-3 w-64 py-2" type="text" name="name" id="name">
       </div>
       @error('name')
        <div class="text-red-500 mt-2vtext-sm text-center ">
         {{ $message }}
        </div>
       @enderror
        <div class="w-96 flex items-center justify-between mx-auto">
         <label for="name" class="whitespace-nowrap">Email Address</label>
         <input placeholder="email" value="{{ $users->email }}" class="bg-gray-200 border border-gray-300 focus:outline-none rounded px-3 w-64 py-2" type="email" name="email" id="email">
        </div>
        @error('email')
        <div class="text-red-500 mt-2vtext-sm text-center ">
         {{ $message }}
        </div>
       @enderror
        <div class="w-96 flex items-center justify-between mx-auto">
         <label for="name" class="whitespace-nowrap">Username</label>
         <input placeholder="username" value="{{ $users->username }}" class="bg-gray-200 border border-gray-300 focus:outline-none rounded px-3 w-64 py-2" type="text" name="username" id="username">
        </div>
        @error('username')
        <div class="text-red-500 mt-2vtext-sm text-center ">
         {{ $message }}
        </div>
       @enderror
        <div class="w-96 flex items-center justify-between mx-auto">
         <label for="name" class="whitespace-nowrap">Password</label>
         <input placeholder="New password"  class="bg-gray-200 border border-gray-300 focus:outline-none rounded px-3 w-64 py-2" type="text" name="password" id="password">
         <input type="hidden" name="old_password" value='{{ $users->password }}'>
        </div>
        @error('password')
        <div class="text-red-500 mt-2vtext-sm text-center ">
         {{ $message }}
        </div>
       @enderror
       <input class="bg-blue-600 cursor-pointer w-1/4 mx-auto text-white mt-2 border border-gray-300 rounded px-4 py-2" value='edit my profile' type="submit" name="submit-profile">
      </form>
      {{-- ////////////////// --}}
      <a href="{{ route('Profile.delete',$users->id) }}" class="bg-red-700 block text-center w-1/4 mx-auto text-white mt-2 border border-gray-300 rounded px-4 py-2">Delete Account</a>
      <a href='{{ route('home') }}' class="bg-gray-600 border block text-center w-1/4 mx-auto mt-2 border-gray-300 rounded text-white px-4 py-2">Back to Home</a>
      {{-- ///////////////// --}}
     </div>
    </div>
@endsection