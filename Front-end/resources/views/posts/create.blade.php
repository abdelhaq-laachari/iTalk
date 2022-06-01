@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create new post
                </div>
                <form class="card-body form-group" method="POST" enctype="multipart/form-data" action="{{ route("Posts@store") }}">
                    @csrf
                    <!-- category -->
                    <label for="price" class="">
                        Choose a category:
                    </label>
                    <select class="form-control mb-3" name="category_id">
                        @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <!-- title -->
                    <label for="name">
                        Title :
                    </label>
                    <input type="text" class="form-control" name="title" placeholder="Write Something">
                    <!-- description -->
                    <label for="price" class="mt-3">
                        Description :
                    </label>
                    <input type="text" class="form-control" name="desc" placeholder="Write Something">
                    <!-- image -->
                    <label for="image" class="mt-3"> Picture : </label>
                    <input type="file" class="form-control" name="image">
                    <!-- button -->
                    <input name="submit-form" value="Add" type="submit" class="btn btn-primary px-4 mt-3" />
                </form>
            </div>

        </div>
    </div>
</div>
@endsection