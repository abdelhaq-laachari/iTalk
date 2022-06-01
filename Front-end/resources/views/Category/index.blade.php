@extends('layouts.app')

@section('content')
{{-- toolbar --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <button class="btn btn-primary d-block mb-3" data-toggle="modal" data-target="#myModal" style="margin-left: auto">
                <i class="fa fa-plus"></i>
                <span>{{ __('Add') }}</span>
            </button>

            {{-- end toolbar --}}

            {{-- table --}}
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('All category') }}</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                    <!-- <th scope="col">Delete</th> -->

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category )

                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-{{ $category->id }}">
                                            Update
                                        </button>
                                        <a class="btn btn-danger" class="btn-delete" href="{{ route('categories@destroy', $category->id) }}">
                                            Delete
                                        </a>
                                    </td>
                                    <!-- <td>
                                        <a class="btn btn-danger" class="btn-delete" href="{{ route('categories@destroy', $category->id) }}">
                                            Delete
                                        </a>
                                    </td> -->

                                </tr>
                                <div class="modal fade" id="modal-edit-{{ $category->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    &times
                                                </button>
                                            </div>
                                            <form class="needs-validation was-validated" method="post" novalidate action="{{route("categories@update",$category->id)}}">
                                                @csrf()
                                                @method("PUT")
                                                <div class="modal-body">
                                                    <div class="mb-3 position-relative">
                                                        <label class="form-label" for="inputEmail">Name </label>
                                                        <input type="text" class="form-control" id="inputEmail" name="name" placeholder="Name " required value="{{$category->name}}">
                                                        @error('name')
                                                        <span class=" text-danger">please provide a valid name</span>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Annuler</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add a category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    &times
                </button>
            </div>
            <form class="needs-validation was-validated" method="post" action="{{route('categories@store')}}" novalidate>
                @csrf()
                <div class="modal-body">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="inputEmail">Name </label>
                        <input type="text" class="form-control" id="inputEmail" name="name" placeholder="Name " required value="{{old('name')}}">
                        @error('name')
                        <span class=" text-danger">Please provide a valid name</span>
                        @enderror
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection