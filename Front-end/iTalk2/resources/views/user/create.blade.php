@extends('layouts.app')

@section('content')

<div class="container">
    <div class="title">
        <h4>Create Post</h4>
        <hr>
    </div>
    <div class="create-post mt-2 ">
        <form action="" class="form" method="post">
            <div class="cate-select">
                <select class="form-select" aria-label="Default select example">
                    <option selected disabled>Choose a category</option>
                    @foreach($category as $key => $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <!-- <label>Id</label> -->
                <input type="text" class="form-control" name="user_id" value="{{ Auth::user()->id }}" hidden>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea class="form-control" name="topic" cols="3" rows="5"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>
</div>










@endsection