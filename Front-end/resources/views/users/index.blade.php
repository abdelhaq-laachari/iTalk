@extends('layouts.app')

@section('content')
    {{-- toolbar --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">

                {{-- end toolbar --}}

                {{-- table --}}
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Users list') }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <!-- <th scope="col">Password</th> -->
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a class="btn btn-danger" class="btn-delete"
                                                    href="{{ route('users.destroy', $user->id) }}">
                                                    Delete
                                                </a>
                                            </td>

                                        </tr>
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
@endsection

@section('scripts')
@endsection
