@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <img src="{{ asset($Post->image) }}" style="height: auto" width="470px" />
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6  ">

            <h1 class="">{{ $Post->title }}</h1>
            <ul class="list-inline text-muted">
                <li>Date | {{ $Post->created_at }}</li>
            </ul>
            <p class="lead">{{ $Post->description }}</p>
            @auth

            <div class="row mb-2">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group">
                        <span class="input-group-btn">

                            {{-- @if ($hasVoted) --}}
                            {{-- <a type="button" id="decreaseButton" href="{{ route('Posts@vote', $Post->id) }}"
                            class="btn btn-danger">
                            <i class="fa-solid fa-thumbs-down"></i>
                            </a> --}}
                            {{-- @else --}}
                            <a type="button" id="increaseButton" href="{{ route('Posts@vote', $Post->id) }}" class="btn btn-outline-success">
                                <i class="fa-solid fa-thumbs-up"></i>
                            </a>
                            {{-- @endif --}}

                        </span>
                        <input type="text" class="form-control ml-2" disabled id="vote" placeholder="Vote" value="{{ count($Post->votes) }}" />

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group">
                        <span class="input-group-btn">

                            <a type="button" id="decreaseButton" href="{{ route('Posts@unvote', $Post->id) }}" class="btn btn-outline-danger">
                                <i class="fa-solid fa-thumbs-down"></i>
                            </a>

                        </span>
                        <input type="text" class="form-control ml-2" disabled id="vote" placeholder="Vote" value="{{ count($Post->unvotes) }}" />

                    </div>
                </div>
            </div>
            @endauth
        </div>

        
    </div>
    <div class=" mb-5 mt-5">
        <div class="container">
            @auth
            <form action="{{ route('comments@store') }}" method="POST">
                @csrf
                Leave a comment
                <textarea cols="30" rows="4" name="comment" class="form-control"></textarea>
                <input type="hidden" name="Post_id" value="{{ $Post->id }}">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <button class="btn btn-primary mt-3">Post</button>
            </form>
            @endauth

            <div class="row">
                <div class="col-md-12">
                    <h3 class=" my-5">comment section :</h3>
                    <div class="row">
                        @foreach ($Post->comments as $item)
                        <div class="col-md-12 ">
                            <div class="media"> <img class="mr-3 rounded-circle" alt="Bootstrap Media Preview" height="70" width="70" src="https://www.logolynx.com/images/logolynx/5c/5c5fbe66daa900ad13c9a0046596c465.png" />
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-8 d-flex">
                                            <h5>{{ $item->user->name }} - </h5> <span>
                                                {{ $item->created_at }}</span> -
                                            @if (Auth::user()->role == 'admin' || Auth::user()->id == $item->user_id)
                                            <a href="{{ route('comments@destroy', $item->id) }}">supprimer</a>
                                            @endif
                                        </div>

                                    </div>{{ $item->comment }}
                                </div>

                            </div>
                            <hr>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- /container -->
@endsection