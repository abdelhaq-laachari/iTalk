@extends('layouts.app')


@section('content')

<div class="container">
    <img src="dist/profile/{{ Auth::user()->photo }} " style="width: 150px; height:150px; border-radius:50%;" alt="">
    <h1> {{ Auth::user()->name }} </h1>
    <form enctype="multipart/form-data " action="/update" method="POST">
        <label> Update Profile </label>
        <input type="file" name="photo" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="pull-right btn-sm btn-info" >
    </form>
</div>

@endsection